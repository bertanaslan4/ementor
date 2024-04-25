<?php

namespace App\Http\Controllers;

use App\Models\Faqs;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function index()
    {
        $faqs = Faqs::where('status',1)->orderBy('id','desc')->get();
        return view('front.pages.faqs',compact('faqs'));
    }
}
