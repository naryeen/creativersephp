<?php


namespace App\Http\Controllers\services\CreativeContentWritingController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreativeContentWritingController extends Controller
{
    //
    public function index()
    {
        return view('services.creativecontentwriting.creativecontentwriting');
    }
}
