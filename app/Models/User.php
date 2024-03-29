<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'surname',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function userInfo()
    {
        return $this->hasMany(UserInfo::class);
    }
    public function infoBlogs()
    {
        return $this->hasMany(InfoBlogs::class);
    }
    public function senderMessage()
    {
        return $this->hasMany(Messages::class,'sender_id');
    }
    public function recieverMessage()
    {
        return $this->hasMany(Messages::class,'receiver_id');
    }
    public function mentor()
    {
        return $this->hasMany(Relations::class, 'mentor_id');
    }
    public function mentee()
    {
        return $this->hasMany(Relations::class, 'mentee_id');
    }

}
