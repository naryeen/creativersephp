<?php

namespace App\Http\Controllers\services\digitalmarketing;
use App\Http\Controllers\controller;

use Illuminate\Http\Request;

class digitalMarketingController extends Controller
{
    //
    public function index()
    {
        return view('services.digitalmarketing.digitalmarketing');
    }
}
