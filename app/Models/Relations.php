<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Relations extends Pivot
{
    protected $table = 'relations';
    protected $fillable = [
        'mentor_id',
        'mentee_id',
    ];
    public function mentor()
    {
        return $this->belongsTo(User::class,'mentor_id');
    }
    public function userMentor()
    {
        return $this->belongsTo(User::class,'mentor_id');
    }
    public function mentee()
    {
        return $this->belongsTo(User::class,'mentee_id');
    }
    public function userMentee()
    {
        return $this->belongsTo(User::class,'mentee_id');
    }

}
