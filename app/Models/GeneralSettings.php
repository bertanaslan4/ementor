<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSettings extends Model
{
    use HasFactory;
    protected $fillable = [
        'site_logo',
        'banner_title',
        'banner_subtitle',
        'section_title',
        'section_subtitle',
        'section1_title',
        'section1_subtitle',
        'section2_title',
        'section2_subtitle',
        'section3_title',
        'section3_subtitle',
        'section4_title',
        'section4_subtitle',
        'section5_title',
        'section5_subtitle',
        'section6_title',
        'section6_subtitle',
    ];
}
