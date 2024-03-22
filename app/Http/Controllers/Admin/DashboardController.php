<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anno;
use App\Models\AnnoUser;
use App\Models\Relations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function home()
    {
        $lastMentors = User::where('role', 1)
            ->whereNotNull('email_verified_at')
            ->with('mentor', 'mentor.mentee')
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();



        $lastMentees= User::where('role', 2)
            ->whereNotNull('email_verified_at')
            ->where('status', 1)
            ->with('mentee','mentee.mentor')
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();

        $waitedUsers = User::where('status', 0)
            ->orderBy('id', 'asc')
            ->take(5)
            ->get();
        //dd($lastMentors, $lastMentees);
        $deleteTitle = 'Kullanıcı Sil!';
        $deleteText = "Kullanıcıyı silmek istediğinizden emin misiniz?";
        confirmDelete($deleteTitle, $deleteText);
        return view('admin.pages.home', compact('lastMentors', 'lastMentees', 'waitedUsers'));
    }
    public function showLoginForm()
    {
        return view('admin.pages.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.home');
        }

        return redirect()->route('admin.login')->with('error', 'Giriş bilgileri hatalı.');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
    public function anno(){
        $annos = Anno::all();
        return view('admin.pages.anno',compact('annos'));
    }
    public function annoCreate(){
        return view('admin.pages.annoCreate');
    }
    public function annoStore(Request $request)
    {
       $title = $request->input('title');
       $short_desc = $request->input('short_desc');
         $content = $request->input('desc');
            $anno = Anno::create([
                'title' => $title,
                'short_description' => $short_desc,
                'description' => $content,
            ]);

        if($request->mentee == 'on' ){
            $mentees = User::where('role', 2)->get();
            foreach ($mentees as $mentee){
                AnnoUser::create([
                    'user_id' => $mentee->id,
                    'anno_id' => $anno->id,
                ]);
            }

        }
        if($request->mentor == 'on' ){
            $mentors = User::where('role', 1)->get();
            foreach ($mentors as $mentor){
                AnnoUser::create([
                    'user_id' => $mentor->id,
                    'anno_id' => $anno->id,
                ]);
            }
        }
        Alert::success('Başarılı', 'Duyuru başarıyla eklendi');
        return redirect()->route('admin.anno.list');

    }
}
