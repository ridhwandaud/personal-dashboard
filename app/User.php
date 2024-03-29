<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','img_path'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'updated_at',
    ];

    public function messages()
    {
      return $this->hasMany(Post::class);
    }

    public function chats(){
        return $this->hasMany(Message::class);
    }

    public function tasks(){
        return $this->hasMany(Task::class);
    }
}
