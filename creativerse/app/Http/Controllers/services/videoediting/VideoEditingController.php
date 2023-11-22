<?php

namespace App\Http\Controllers\services\videoediting;

use App\Http\Controllers\controller;

use Illuminate\Http\Request;

class VideoEditingController extends Controller
{
    //
    public function index()
    {
        return view('services.videoediting.videoediting');
    }
}
