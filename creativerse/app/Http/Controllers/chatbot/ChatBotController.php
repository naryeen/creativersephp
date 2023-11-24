<?php


namespace App\Http\Controllers\chatbot;

use App\Http\Controllers\controller;

use Illuminate\Http\Request;

class ChatBotController extends Controller
{
    //
    public function index()
    {
        return view('chatbot.index');
    }
}
