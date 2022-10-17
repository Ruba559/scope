<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use TCG\Voyager\Traits\Translatable;

class User extends \TCG\Voyager\Models\User
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
        'password',
        'long' ,
        'lat',
        'status',
        'fcm_token',
        'slug',
        'mobile_number',
        'social_id',
        'social_type',
        'email_verified_at',
        'avatar'
    ];


    public function offices()
    {
        return $this->hasMany(Office::class , 'user_id' , 'id');
    }

    public function articles()
    {
        return $this->hasMany(Article::class , 'author_id' , 'id');

    }

    
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }


    public function BackNotificationsFrom()
    {
        return $this->hasMany(BackNotification::class , 'from_id' , 'id');
    }


    public function BackNotificationsTo()
    {
        return $this->hasMany(BackNotification::class , 'to_id' , 'id');
    }
   

    public function comments()
    {
        return $this->hasMany(Comment::class , 'comment_id' , 'id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class , 'rating_id' , 'id');
    }
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
    ];
}
