<?php

namespace App\Http\Controllers;

use App\Models\Anno;
use App\Models\AnnoUser;
use Illuminate\Http\Request;

class AnnoController extends Controller
{
    public function index()
    {
        $annos = AnnoUser::where('user_id',auth()->user()->id)->with('anno')->get();
        $annoUpdateStatus = AnnoUser::where('user_id',auth()->user()->id)->update(['status' => 1]);
        return view('front.pages.anno',compact('annos'));
    }
}
