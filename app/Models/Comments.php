<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'text',
        'user_id',
        'info_blog_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function infoBlog()
    {
        return $this->belongsTo(InfoBlogs::class);
    }
}
