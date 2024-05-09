<?php

namespace App\Http\Controllers;

use App\Models\Faqs;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class FaqsController extends Controller
{
    public function index()
    {
        $faqs = Faqs::where('status',1)->orderBy('id','desc')->get();
        return view('front.pages.faqs',compact('faqs'));
    }
    public function create()
    {
        return view('front.pages.create_faq');
    }
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
        ]);
        $faq = new Faqs();
        $faq->question = $request->question;
        $faq->user_id = auth()->user()->id;
        $faq->save();
        Alert::success('Başarılı', 'Sorunuz başarıyla eklendi.');
        return redirect()->route('faqs');
    }
}
