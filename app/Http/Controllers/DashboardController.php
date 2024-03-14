<?php

namespace App\Http\Controllers;

use App\Http\Requests\InfoBlogRequest;
use App\Models\Comments;
use App\Models\InfoBlogs;
use App\Models\InfoDocs;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use function PHPUnit\Framework\isNull;

class DashboardController extends Controller
{
    public function index()
    {
        $blogCount = InfoBlogs::where('user_id', auth()->user()->id)->count();
        $blogs = InfoBlogs::where('user_id', auth()->user()->id)->get();
        $commentCount =0;
        foreach ($blogs as $blog) {
            $comments=Comments::where('info_blog_id', $blog->id)->get();
            $commentCount += count($comments);
        }
        $userCollection = User::where('id', auth()->user()->id)
            ->with('mentor', 'mentor.mentee')
            ->get();
        $mentor= $userCollection[0];
        $mentee= $this->findMentee();
        //dd($mentee);
        return view('front.dashboard.dashboard', compact('blogCount', 'mentor', 'mentee', 'commentCount'));
    }
    public function myBlogs()
    {

        $blogs= InfoBlogs::where('user_id', auth()->user()->id)->get();
        $deleteTitle = 'İçeriği Sil!';
        $deleteText = "İçeriği silmek istediğinize emin misiniz?";
        confirmDelete($deleteTitle, $deleteText);
        $mentee= $this->findMentee();
        return view('front.dashboard.myblogs', compact('blogs', 'mentee'));
    }
    public function addBlog()
    {
        $mentee= $this->findMentee();
        return view('front.dashboard.addblog', compact('mentee'));
    }
    public function profilesettings()
    {
        $user = User::find(auth()->user()->id);
        $userInfo=UserInfo::where('user_id', auth()->user()->id)->first();
        //dd($userInfo);
        $mentee= $this->findMentee();
        return view('front.dashboard.profilesettings', compact('user', 'userInfo', 'mentee'));
    }
    public function updateProfile(Request $request)
    {
        //dd($request->all());
        $user = User::find(auth()->user()->id);
        $userInfo=UserInfo::where('user_id', auth()->user()->id)->first();
        if(!$userInfo)
        {
            UserInfo::create([
                'user_id'=>auth()->user()->id,
            ]);
        }
        if($request->phone)
        {
            $userInfo->phone=$request->phone;
            $userInfo->save();
        }
        if($request->address)
        {
            $userInfo->address=$request->address;
            $userInfo->save();
        }
        if($request->birthday)
        {
            $userInfo->birthday=$request->birthday;
            $userInfo->save();
        }
        if($request->city)
        {
            $userInfo->city=$request->city;
            $userInfo->save();
        }
        if($request->state)
        {
            $userInfo->state=$request->state;
            $userInfo->save();
        }
        if($request->about)
        {
            $userInfo->about=$request->about;
            $userInfo->save();
        }
        if($request->mail)
        {
            $user->update([
                'email'=>$request->mail,
            ]);
        }
        if($request->name)
        {
            $user->update([
                'name'=>$request->name,
            ]);
        }
        if($request->surname)
        {
            $user->update([
                'surname'=>$request->surname,
            ]);
        }
        if($request->file('photo'))
        {
            try {
                $file = $request->file('photo');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images/profile'), $filename);
                $user->photo=$filename;
            }catch (\Exception $e)
            {
                dd($e->getMessage());
                Alert::error('Hata', 'Fotoğraf yüklenirken bir hata oluştu.');
                return redirect('profilesettings');
            }
        }
        $user->save();


        Alert::success('Başarılı', 'Profil başarıyla güncellendi.');
        return redirect('profilesettings');
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

        if (!isNull($request->file('images'))) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                InfoDocs::create([
                    'title' => $request->title,
                    'info_blog_id' => $infoblog->id,
                    'docs' => $imageName,
                ]);
            }
        }
        Alert::success('Success', 'Blog has been added successfully');
        return redirect('myblogs');
        }
        public function editBlog($id)
        {
            $mentee= $this->findMentee();
            $blog = InfoBlogs::find($id);
            $docs = InfoDocs::where('info_blogs_id', $id)->get();
            return view('front.dashboard.editblog', compact('blog', 'docs','mentee'));
        }
        public function updateBlog(Request $request)
        {
            $request->validate([
                'title' => 'required',
                'short_text' => 'required',
                'text' => 'required',
            ]);
            $blog = InfoBlogs::find($request->id);
            $blog->update([
                'title' => $request->title,
                'short_text' => $request->short_text,
                'text' => $request->text,
            ]);
            if ($request->file('photo')) {
                $file = $request->file('photo');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images'), $filename);
                $blog->photo=$filename;

            }
            $blog->save();
//            if (!isNull($request->file('docs'))) {
//                foreach ($request->file('docs') as $docs) {
//                    $docsName = time() . '_' . $image->getClientOriginalName();
//                    $docs->move(public_path('docs'), $docsName);
//                    InfoDocs::create([
//                        'title' => $request->title,
//                        'info_blogs_id' => $blog->id,
//                        'docs' => $docsName,
//                    ]);
//                }
//            }
            Alert::success('Success', 'Blog has been updated successfully');
            return redirect('myblogs');
        }

        public function deleteBlog($id)
        {
            $blog = InfoBlogs::find($id);
            $blog->delete();
            Alert::success('Success', 'Blog has been deleted successfully');
            return redirect('myblogs');
        }
        function findMentee()
        {
            $userCollection = User::where('id', auth()->user()->id)
                ->with('mentor', 'mentor.mentee')
                ->get();
            $mentor= $userCollection[0];
            //dd($mentor->mentor->first());
            if(!is_null($mentor->mentor->first())){
                //dd($mentor->mentor->first()->mentee);
                return $mentor->mentor->first()->mentee;
            }
            else
            {
                return null;
            }
        }
    }
