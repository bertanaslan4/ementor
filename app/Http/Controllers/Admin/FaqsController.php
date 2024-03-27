<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faqs;
use DOMDocument;
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

        $answer = $request->answer;
        $dom = new DOMDocument();
        $content = '<?xml encoding="UTF-8">' . $answer;
        $dom->loadHTML($answer, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_use_internal_errors(true);

        libxml_clear_errors();
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $item=>$image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/images/faqs" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);
            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $answer = $dom->saveHTML();

        $faq->answer = $answer;

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

        // HTML içeriğindeki resimleri işleme
        $content = $request->input('answer');
        $dom = new DOMDocument();
        $content = '<?xml encoding="UTF-8">' . $content;
        $dom->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_use_internal_errors(true);

        libxml_clear_errors();
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $item => $image) {
            $data = $image->getAttribute('src');

            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);

            $imageData = base64_decode($data);

            $imageName = "/images/faqs" . time() . $item . '.png';
            $path = public_path() . $imageName;

            file_put_contents($path, $imageData);

            $image->removeAttribute('src');
            $image->setAttribute('src', $imageName);
        }
        $content = $dom->saveHTML();
        $faq->answer = $content;

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
