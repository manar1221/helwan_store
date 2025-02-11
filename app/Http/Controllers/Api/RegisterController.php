<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

use function Ramsey\Uuid\v1;

class RegisterController extends BaseController
{
    /**
     * Get all users
     */
    public function index()
    {
        $users = User::all();
        return $this->sendResponse($users, 'Displaying all users data');
    }

    /**
     * Register new user
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
            'approved_state' => 0,
        ]);

        $verificationCode = random_int(10000, 99999);
        $user->verification_code = $verificationCode;
        $user->save();

        Mail::send('auth.verify-email', ['code' => $verificationCode], function ($message) use ($request) {
            $message->to($request->email)
                ->subject('Your OTP Verification Code');
        });

        return $this->sendResponse(['message' => 'User registered successfully. Please check your email for the verification code.', 'email' => $user->email], 'User registered successfully.');
    }

    /**
     * Login user
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->approved_state == 0) {
                return $this->sendError('Your account is not verified. Please check your email.', ['error' => 'Not verified']);
            }

            return $this->sendResponse([
                'name' => $user->name,
                'id' => $user->id,
                'email' => $user->email,
                'phone' => $user->phone,
                'utype' => $user->utype,
            ], 'User login successfully.');
        }

        return $this->sendError('Unauthorized.', ['error' => 'Unauthorized']);
    }

    /**
     * Verify email with code
     */
    public function verifyEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'verification_code' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $user = User::where('email', $request->email)
            ->where('verification_code', $request->verification_code)
            ->first();

        if (!$user) {
            return $this->sendError('Invalid verification code.', ['error' => 'Invalid verification code.']);
        }

        $user->approved_state = 1;
        $user->save();

        return $this->sendResponse(['message' => 'Email verified successfully. You can now log in.'], 'Email verified successfully.');
    }
}
