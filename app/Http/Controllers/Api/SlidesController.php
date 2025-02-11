<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\BaseController;
use App\Models\HomeSlider;
use Illuminate\Http\Request;

class SlidesController extends BaseController
{
    public function index(){
        $slides = HomeSlider::get();
        // return $this->sendResponse($slides, 'Displaying all slides');
        // return response()->json( $slides );
        if($slides)
        {
            return $this->sendResponse($slides, 'Displaying all slides');
        }
        else {
            return $this->sendError('null.', ['error'=>'null']);
        }
    }

}
