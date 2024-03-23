<?php

namespace App\Http\Controllers;

use App\Models\AnnoUser;
use App\Models\Faqs;
use App\Models\InfoBlogs;
use App\Models\Menu;
use App\Models\User;
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

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        switch ($request->input('category')) {
            case 'content':
                $blogs = InfoBlogs::where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('text', 'like', '%' . $searchTerm . '%')
                    ->orWhere('short_text', 'like', '%' . $searchTerm . '%')
                    ->with('user')->orderBy('id','desc')->paginate(6);
                return view('front.search.blog', compact('blogs'));
                break;
            case 'mentor':
                $mentors = User::where('name', 'like', '%' . $searchTerm . '%')
                    ->where('role', 1)
                    ->orWhere('surname', 'like', '%' . $searchTerm . '%')
                    ->with('userInfo','infoBlogs')->get();
                return view('front.search.mentors', compact('mentors'));
                break;
            case 'sss':
                $faqs = Faqs::where('question', 'like', '%' . $searchTerm . '%')
                    ->orWhere('answer', 'like', '%' . $searchTerm . '%')
                    ->get();
                return view('front.search.faqs', compact('faqs'));
                break;
            default:
                // Kategori belirtilmemişse, ana arama sayfasına yönlendirme yapılabilir
                return redirect()->route('search', ['search' => $searchTerm]);
                break;
        }
    }
}
