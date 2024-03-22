<?php

namespace App\Http\Controllers;

use App\Models\AnnoUser;
use App\Models\User;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isNull;

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
                $annoCount=0;
                $annos = AnnoUser::where('user_id',auth()->user()->id)->get();
                foreach ($annos as $anno)
                {
                    if($anno->status == 0)
                    {
                        $annoCount++;
                    }
                }
                if($annoCount > 0)
                {
                    session(['anno' =>$annoCount]);
                }
                else
                {
                    session(['anno' => null]);
                }
                if(!is_null($mentor->mentee->first())){
                    session(['mentor' => $mentor->mentee->first()->mentor_id]);
                }
                else
                {
                    session(['mentor' => null]);
                }
            }
            else{
                $annoCount=0;
                $annos = AnnoUser::where('user_id',auth()->user()->id)->get();
                foreach ($annos as $anno)
                {
                    if($anno->status == 0)
                    {
                        $annoCount++;
                    }
                }
                if($annoCount > 0)
                {
                    session(['anno' =>$annoCount]);
                }
                else
                {
                    session(['anno' => null]);
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
