<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function mentors()
    {
        $mentors = User::where('role', 1)
            ->whereNotNull('email_verified_at')
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.pages.mentors', compact('mentors'));
    }
    public function mentees()
    {
        $mentees= User::where('role', 2)
            ->whereNotNull('email_verified_at')
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->get();
        return view('admin.pages.mentees', compact('mentees'));
    }
    public function waitingUsers()
    {
        $waitedUsers = User::where('status', 0)
            ->orderBy('id', 'asc')
            ->get();
        return view('admin.pages.waitinguser', compact('waitedUsers'));
    }
    public function detail($id)
    {
        $user = User::find($id)->with('mentor.mentee', 'mentee.mentor','userInfo')->first();
        //dd($user);
        return view('admin.pages.profile', compact('user'));
    }
    public function approve($id)
    {
        $user = User::find($id);
        $user->status = 1;
        $user->save();
        Alert::success('Başarılı', 'Kullanıcı Başarıyla Onaylandı');
        return redirect()->route('admin.home');
    }

    public function destroy($id)
    {
        User::destroy($id);
        Alert::success('Başarılı', 'Kullanıcı Başarıyla Silindi');
        return redirect()->route('admin.home');
    }

}
