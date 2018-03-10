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
	
	protected $table = 'users';
	
    protected $fillable = [
        'name', 'email', 'password', 'username', 'activated_at','image', 'description'
    ];

    /**
     * The attributes tha't should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [ 
        'password', 'remember_token',
    ];
	
	public function images()
	{
		return $this->hasMany('App\Image');
	}
	
    
}
