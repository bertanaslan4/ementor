<?php

namespace App\Http\Controllers;

use App\Models\Faqs;
use App\Models\InfoBlogs;
use App\Models\Menu;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        $blogs = InfoBlogs::with('user')->orderBy('id','desc')->limit(3)->get();
        $faqs = Faqs::all()->take(6);
        //dd($blogs);
        return view('front.pages.home',compact('blogs','faqs'));
    }
    public function menu($id)
    {
        $section = Menu::where('id',$id)->with('children')->first();
        return view('front.pages.menu',compact('section'));
    }
}
