<?php

namespace App\Http\Controllers\contactus;

use App\Http\Controllers\controller;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    public function index()
    {
        return view('contactus.contactus');
    }
}
