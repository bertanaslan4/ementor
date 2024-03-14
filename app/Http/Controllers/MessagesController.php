<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index($id)
    {
        $messengerColor="#2180f3";
        $dark_mode="light";
        $userCollection = User::where('id', auth()->user()->id)
            ->with('mentor', 'mentor.mentee')
            ->get();
        $mentor= $userCollection[0];
        $mentee= $mentor->mentor->first()->mentee;
        $mentor = null;
        //dd($mentee);
        return view('front.dashboard.messages', compact('id','messengerColor','dark_mode','mentee','mentor'));
    }
    public function chat($id)
    {
        $messengerColor="#2180f3";
        $dark_mode="light";
        $mentor = User::where('id', $id)->get()->first();
        return view('front.pages.chat',compact('id','messengerColor','dark_mode','mentor'));

    }

}
