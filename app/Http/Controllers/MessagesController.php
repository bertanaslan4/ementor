<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        $userCollection = User::where('id', auth()->user()->id)
            ->with('mentor', 'mentor.mentee')
            ->get();
        $mentor= $userCollection[0];
        $mentee= $mentor->mentor->first()->mentee;
        //dd($mentee);
        return view('front.dashboard.messages');
    }
    public function chat()
    {
        return view('front.pages.chat');

    }
}
