<?php

namespace newsletter\newslettersystem\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{

     
    protected $fillable = [
        'name', 'lang', 'email','user_id'
    ];


	public function user(){
		    return $this->belongsTo('App\Models\User');
	}

}
