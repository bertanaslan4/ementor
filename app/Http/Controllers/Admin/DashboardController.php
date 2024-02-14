<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Relations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
}
