<?php

namespace App\Http\Controllers\services\graphicdesignandbranding;

use App\Http\Controllers\controller;

use Illuminate\Http\Request;

class GraphicDesignAndBrandingController extends Controller
{
    //
    public function index()
    {
        return view('services.graphicdesignandbranding.graphicdesignandbranding');
    }
}
