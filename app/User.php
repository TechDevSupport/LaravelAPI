<?php

namespace App;

use Laravel\Passport\HasApiTokens; //use HasApiTokens
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
  * Class User
  * @property int id  
*/

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function articles(){
        return $this->hasMany('App\Article', 'author_id','id');
       // return $this->hasMany(related Article::class, foreignKey:'author_id', localKey:'id');
    }
}
