<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoBlogs;

class InfoBlogsController extends Controller
{
    public function index()
    {
        $blogs = InfoBlogs::with('user')->orderBy('id','desc')->paginate(6);
        return view('front.pages.infoblogs',compact('blogs'));
    }
    public function detail($id)
    {
        $blog= InfoBlogs::where('id',$id)->with('user')->first();
        return view('front.pages.infoblogdetail',compact('blog'));
    }
}
