<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MentorsController extends Controller
{
    public function index()
    {
        $mentors = User::where('role', 1)->with('userInfo','infoBlogs')->get();

        //dd($mentors);
        return view('front.pages.mentors', compact('mentors'));
    }
}
