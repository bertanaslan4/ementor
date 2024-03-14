<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserInfoController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        $userInfo=UserInfo::where('user_id', $id)->first();
        return view('front.pages.profile',compact('user','userInfo'));
    }
    public function profile()
    {
        $user = User::find(auth()->user()->id);
        $userInfo=UserInfo::where('user_id', auth()->user()->id)->first();
        return view('front.pages.profileset',compact('user','userInfo'));
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
            $about = $request->about;
            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($about);
            libxml_clear_errors();
            $images = $dom->getElementsByTagName('img');

            foreach ($images as $item=>$image) {
                $data = $image->getAttribute('src');

                list($type, $data) = explode(';', $data);

                list(, $data)      = explode(',', $data);

                $imgeData = base64_decode($data);

                $image_name= "/images/docs" . time().$item.'.png';

                $path = public_path() . $image_name;

                file_put_contents($path, $imgeData);

                $image->removeAttribute('src');

                $image->setAttribute('src', $image_name);
            }
            $about = $dom->saveHTML();
            $userInfo->about=$about;
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
        return redirect('profile/'.auth()->user()->id);
    }
}
