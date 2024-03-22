<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Calendar;
class CalendarController extends Controller
{
    public function index()
    {
        $meetings=Calendar::all();
        $meetingsTalep=Calendar::where('status',1)->get();
        $meetingsWait=Calendar::where('status',0)->get();
        return view('admin.pages.calendar',compact('meetings','meetingsTalep','meetingsWait'));
    }
}
