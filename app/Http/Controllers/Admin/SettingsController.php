<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSettings;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = GeneralSettings::where('id', 1)->first();
        return view('admin.pages.settings', compact('settings'));
    }
    public function logo(Request $request)
    {
        $settings = GeneralSettings::where('id', 1)->first();
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/settings', $filename);
            $settings->site_logo = $filename;
            $settings->save();
        }
        Alert::success('Success', 'Logo başarıyla güncellendi');
        return redirect()->back()->with('success', 'Settings updated successfully');
    }
    public function banner(Request $request)
    {
        $settings = GeneralSettings::where('id', 1)->first();
       $banner_title = $request->banner_title;
       $banner_subtitle= $request->banner_subtitle;
       $settings->banner_title = $banner_title;
         $settings->banner_subtitle = $banner_subtitle;
        $settings->save();
        Alert::success('Success', 'Banner başarıyla güncellendi');
        return redirect()->back()->with('success', 'Settings updated successfully');
    }
    public function section1(Request $request)
    {
        $settings = GeneralSettings::where('id', 1)->first();
        $section1_title = $request->section1_title;
        $section1_subtitle = $request->section1_subtitle;
        $section2_title = $request->section2_title;
        $section2_subtitle = $request->section2_subtitle;
        $section3_title = $request->section3_title;
        $section3_subtitle = $request->section3_subtitle;
        $settings->section1_title = $section1_title;
        $settings->section1_subtitle = $section1_subtitle;
        $settings->section2_title = $section2_title;
        $settings->section2_subtitle = $section2_subtitle;
        $settings->section3_title = $section3_title;
        $settings->section3_subtitle = $section3_subtitle;
        $settings->save();
        Alert::success('Success', 'Section 1 başarıyla güncellendi');
        return redirect()->back()->with('success', 'Settings updated successfully');
    }
    public function section4(Request $request)
    {
        $settings = GeneralSettings::where('id', 1)->first();
        $section4_title = $request->section4_title;
        $section4_subtitle = $request->section4_subtitle;
        $section5_title = $request->section5_title;
        $section5_subtitle = $request->section5_subtitle;
        $section6_title = $request->section6_title;
        $section6_subtitle = $request->section6_subtitle;
        $settings->section4_title = $section4_title;
        $settings->section4_subtitle = $section4_subtitle;
        $settings->section5_title = $section5_title;
        $settings->section5_subtitle = $section5_subtitle;
        $settings->section6_title = $section6_title;
        $settings->section6_subtitle = $section6_subtitle;
        $settings->save();
        Alert::success('Success', 'Section 2 başarıyla güncellendi');
        return redirect()->back()->with('success', 'Settings updated successfully');
    }
}
