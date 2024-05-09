<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenteeBlog extends Model
{
    use HasFactory;
    protected $table = 'mentee_blog';
    protected $fillable = [
        'mentee_id',
        'blog_id',
    ];
    public function mentee()
    {
        return $this->belongsTo(User::class);
    }
    public function blog()
    {
        return $this->belongsTo(InfoBlogs::class);
    }
}
