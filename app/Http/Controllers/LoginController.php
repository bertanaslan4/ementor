<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('front.auth.login');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user && $user->email_verified_at && $user->status == 1 && auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            if(auth()->user()->role == 2){
                $mentor  = User::where('id',auth()->user()->id)->with('mentee')->first();
                //dd($mentor);
                if(!is_null($mentor->mentee->first())){
                    session(['mentor' => $mentor->mentee->first()->mentor_id]);
                }
                else
                {
                    session(['mentor' => null]);
                }
            }


            return redirect()->route('home');
        }
        return back()->with('error', 'Invalid email or password');
    }
    public function showRegister()
    {
        return view('front.auth.register');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');

    }
}
