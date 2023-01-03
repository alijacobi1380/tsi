<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function producergetchat()
    {
        // $users = DB::table('users')->get();
        return view('producer.chats');
    }
}
