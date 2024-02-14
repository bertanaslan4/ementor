<?php

namespace App\Http\Controllers;

use App\Http\Requests\InfoBlogRequest;
use App\Models\InfoBlogs;
use App\Models\InfoDocs;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use function PHPUnit\Framework\isNull;

class DashboardController extends Controller
{
    public function index()
    {
        return view('front.dashboard.dashboard');
    }
    public function myBlogs()
    {
        $blogs= InfoBlogs::where('user_id', auth()->user()->id)->get();
        return view('front.dashboard.myblogs', compact('blogs'));
    }
    public function addBlog()
    {
        return view('front.dashboard.addblog');
    }
    public function messages()
    {
        return view('front.dashboard.messages');
    }
    public function mentees()
    {
        return view('front.dashboard.mentees');
    }
    public function profilesettings()
    {
        return view('front.dashboard.profilesettings');
    }
    public function storeBlog(Request $request)
    {
        $file = $request->file('photo');
        if ($file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $infoblog = InfoBlogs::create([
                'photo' => $filename,
                'title' => $request->title,
                'short_text' => $request->short_text,
                'text' => $request->text,
                'user_id' => auth()->user()->id,
            ]);

        } else {
            $infoblog = InfoBlogs::create([
                'photo' => 'default.jpg',
                'title' => $request->title,
                'short_text' => $request->short_text,
                'text' => $request->text,
                'user_id' => auth()->user()->id,
            ]);
        }

        if(!isNull($request->file('images'))){
            foreach ($request->file('images') as $image){
                $imageName = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                InfoDocs::create([
                    'title'=>$request->title,
                    'info_blog_id' => $infoblog->id,
                    'docs' => $imageName,
                ]);
            }
        }
        Alert::success('Success', 'Blog has been added successfully');
        return redirect('myblogs');
    }
}
