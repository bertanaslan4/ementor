<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use App\Models\InfoBlogs;
use App\Models\InfoDocs;

class InfoBlogsController extends Controller
{
    public function index()
    {
        $blogs = InfoBlogs::with('user')->where('status',1)->orderBy('id','desc')->paginate(6);
        $blogsmentee = InfoBlogs::with('user')->where('status',2)
            ->join('mentee_blog','info_blogs.id','=','mentee_blog.blog_id')->where('mentee_blog.mentee_id',auth()->user()->id)->get();
        return view('front.pages.infoblogs',compact('blogs','blogsmentee'));
    }
    public function detail($id)
    {
        $blog= InfoBlogs::where('id',$id)->with('user','user.userInfo')->first();
        $comments=Comments::where('info_blog_id',$id)->with('user')->get();
        $infoDocs=InfoDocs::where('info_blogs_id',$id)->get();
        //dd($comments);
        return view('front.pages.infoblogdetail',compact('blog','comments','infoDocs'  ));
    }
}
