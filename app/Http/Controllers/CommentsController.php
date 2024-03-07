<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CommentsController extends Controller
{
    public function create(Request $request)
    {
        $comment = new Comments();
        $comment->user_id = $request->user_id;
        $comment->info_blog_id = $request->blog_id;
        $comment->title = $request->title;
        $comment->text = $request->text;
        $comment->save();
        Alert::success('Başarılı', 'Yorumunuz başarıyla eklendi.');
        return redirect()->back();
    }
}
