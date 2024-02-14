<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faqs;
use RealRashid\SweetAlert\Facades\Alert;

class FaqsController extends Controller
{
    public function list()
    {
        $faqs= Faqs::all();
        return view('admin.pages.faqs', compact('faqs'));
    }
    public function create()
    {
        return view('admin.pages.faqscreate');

    }
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
        $faq = new Faqs();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        Alert::success('Başarılı', 'Başarıyla eklendi.');
        return redirect()->route('admin.faqs');
    }
    public function edit($id)
    {
        $faq = Faqs::find($id);
        return view('admin.pages.faqsedit', compact('faq'));
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
        $faq = Faqs::find($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        Alert::success('Başarılı', 'Başarıyla güncellendi.');
        return redirect()->route('admin.faqs');
    }
    public function passive($id)
    {
        $faq = Faqs::find($id);
        $faq->status = 0;
        $faq->save();
        Alert::success('Başarılı', 'Pasif hale getirildi.');
        return redirect()->route('admin.faqs');
    }
    public function active($id)
    {
        $faq = Faqs::find($id);
        $faq->status = 1;
        $faq->save();
        Alert::success('Başarılı', 'Aktif hale getirildi.');
        return redirect()->route('admin.faqs');
    }

}
