<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;
use App\Models\User;
class CalendarController extends Controller
{
    public function index()
    {
        $deleteTitle = 'Randevu Sil!';
        $deleteText = "Randevuyu iptal etmek istediğinizden emin misiniz?";
        confirmDelete($deleteTitle, $deleteText);
        $meetings=Calendar::where('sender_id',auth()->user()->id)->orWhere('receiver_id',auth()->user()->id)->get();
        $meetingsTalep=Calendar::where('sender_id',auth()->user()->id)->get();
        $meetingsWait=Calendar::where('receiver_id',auth()->user()->id)->get();
        //dd($meetings);
        $user=User::where('id',auth()->user()->id)->with('mentor.mentee','mentee.mentor')->first();
        //dd($user);
        return view('front.pages.calendar',compact('meetings','meetingsTalep','meetingsWait','user'));
    }
    public function store(Request $request){
        $formData = $request->all();
        $meetingDate = $formData['selectedDate'];
        $meetingTime = $formData['saat'] . ':' . $formData['dakika'] . ':00';
        Calendar::create([
            'title' => $formData['title'],
            'meeting_date' => $meetingDate,
            'meeting_time' => $meetingTime,
            'sender_id' => auth()->user()->id,
            'receiver_id' => $formData['receiver_id'],
            'status' => 0
        ]);
        return redirect()->route('calendar');
    }
    public function delete($id)
    {
        $meeting = Calendar::find($id);
        $meeting->delete();
        return redirect()->route('calendar');

    }
}
