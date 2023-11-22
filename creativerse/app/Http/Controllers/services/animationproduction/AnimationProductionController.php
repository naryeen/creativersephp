<?php

namespace App\Http\Controllers\services\animationproduction;
use App\Http\Controllers\controller;

use Illuminate\Http\Request;

class AnimationProductionController extends Controller
{
    //
    public function index()
    {
        return view('services.animationproduction.animationproduction');
    }
}
