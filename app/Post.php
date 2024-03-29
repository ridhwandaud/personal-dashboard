<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['content'];

	protected $dates = [
        'created_at',
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }

}
