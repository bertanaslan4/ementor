<?php

namespace App\Http\Controllers;

use App\Models\AnnoUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
                $mentee  = User::where('id',auth()->user()->id)->with('mentor')->first();
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
                }if(!is_null($mentee->mentor->first())){
                    session(['mentee' => $mentee->mentor->first()->mentee_id]);
                }
                else
                {
                    session(['mentee' => null]);
                }
            }


            return redirect()->route('home');
        }
        else if($user && $user->email_verified_at == null)
        {
            return redirect()->back()->with('error', 'Lütfen emailinizi onaylayınız.');
        }
        else if($user && $user->status == 0)
        {
            return back()->with('error', 'Hesabınız henüz onaylanmamıştır. Lütfen yönetici ile iletişime geçiniz.');
        }
        return redirect()->route('login')->with('error', 'Yanlış email veya şifre girdiniz.');
    }
    public function showRegister()
    {
        return view('front.auth.register');
    }
    public function register(Request $request)
    {
        $hash = Str::random(32);
        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role
        ]);
        $user->sendEmailVerificationNotification();
        return redirect()->route('login')->with('success', 'Please check your email to verify your account');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');

    }
    public function verify()
    {
        $id=$_GET["id"];
        $hash=$_GET["hash"];
        $user = User::where('id', $id)->first();
        if($user->email_verified_at == null)
        {
            $user->email_verified_at = now();
            $user->save();
            return  view('auth.verify-email')->with('success', 'Your account has been verified');
        }
        else
        {
            return redirect()->route('login')->with('error', 'Your account has already been verified');
        }
    }
}
