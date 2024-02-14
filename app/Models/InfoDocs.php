<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoDocs extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'docs',
        'info_blogs_id',
    ];
    public function infoBlog()
    {
        return $this->belongsTo(InfoBlogs::class);
    }
}
