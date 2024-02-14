<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuContent extends Model
{
    use HasFactory;
    protected $table = 'menu_content';
    protected $fillable = ['menu_id','name','content'];

    public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_id');
    }
}
