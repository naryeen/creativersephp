<?php


namespace App\Http\Controllers\services\videoproduction;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ViveoProductionController extends Controller
{
    //
    public function index()
    {
        return view('services.videoproduction.videoproduction');
    }
}
   