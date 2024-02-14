<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Relations;
use RealRashid\SweetAlert\Facades\Alert;


class RelationsController extends Controller
{
   public function index()
   {
       $mentors= User::where('role', 1)
       ->whereNotNull('email_verified_at')
       ->where('status', 1)
       ->orderBy('id', 'desc')
       ->get();
       $mentees= User::where('role', 2)
           ->whereNotNull('email_verified_at')
           ->where('status', 1)
           ->orderBy('id', 'desc')
           ->get();
       return view('admin.pages.relations', compact('mentors', 'mentees'));
   }
   public function create(Request $request){
         $mentorId = $request->input('mentor_id');
         $menteeId = $request->input('mentee_id');
         $relation = new Relations;
         $relation->mentor_id = $mentorId;
         $relation->mentee_id = $menteeId;
         $relation->save();
         Alert::success('Başarılı!', 'Mentor-Mentee ilişkisi başarıyla oluşturuldu.');
         return redirect()->back();

   }
}
