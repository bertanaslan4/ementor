<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoBlogs extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'title',
        'text',
        'short_text',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
    public function infoDocs()
    {
        return $this->hasMany(InfoDocs::class);
    }
}
