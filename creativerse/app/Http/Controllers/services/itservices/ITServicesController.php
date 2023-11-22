<?php

namespace App\Http\Controllers\services\itservices;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ITServicesController extends Controller
{
    //
    public function index()
    {
        return view('services.itservices.itservices');
    }
}
