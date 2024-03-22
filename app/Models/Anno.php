<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anno extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'short_description', 'description'];
    public function annoUser()
    {
        return $this->hasMany(AnnoUser::class);
    }
}
