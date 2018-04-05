<?php

namespace App;

use Carbon\Carbon;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'articles';

    public function author(){
    	return $this->belongsTo('App\User', 'author_id','id');
    	
    	//return $this->belongsTo(related: User::class, foreignKey:'author_id', ownerKey:'id');
    }
}
