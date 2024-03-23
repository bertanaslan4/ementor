<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Calendar;
class CalendarController extends Controller
{
    public function index()
    {
        $meetings=Calendar::with('sender','receiver')->get();
        return view('admin.pages.calendar',compact('meetings'));
    }
}
