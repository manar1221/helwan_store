<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ForgotPasswordController extends Controller
{
    /**
     * Step 1: Verify if email exists and send verification code
     */
    public function sendResetCode(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Validation error.', 'errors' => $validator->errors()], 422);
        }

        $user = User::where('email', $request->email)->first();

        // Generate a random OTP
        $resetCode = random_int(10000, 99999);
        $user->verification_code = $resetCode;
        $user->save();

        // Send email with OTP
        Mail::send('auth.reset-password', ['code' => $resetCode], function ($message) use ($request) {
            $message->to($request->email)
                ->subject('Password Reset OTP Code');
        });

        return response()->json(['success' => true, 'message' => 'A password reset code has been sent to your email.']);
    }

    /**
     * Step 2: Verify OTP Code
     */
    public function verifyResetCode(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'verification_code' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Validation error.', 'errors' => $validator->errors()], 422);
        }

        $user = User::where('email', $request->email)
            ->where('verification_code', $request->verification_code)
            ->first();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Invalid reset code.'], 400);
        }

        return response()->json(['success' => true, 'message' => 'Reset code verified successfully. You can now reset your password.']);
    }

    /**
     * Step 3: Reset Password (without requiring OTP input)
     */
    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'new_password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Validation error.', 'errors' => $validator->errors()], 422);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || empty($user->verification_code)) {
            return response()->json(['success' => false, 'message' => 'Password reset cannot be completed.'], 400);
        }

        // Update password (without removing the OTP code)
        $user->password = Hash::make($request->new_password);
        $user->save();

        return response()->json(['success' => true, 'message' => 'Password reset successfully.']);
    }
}
