<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Button extends Model
{
		protected $fillable = [
        'location',
		'client_id'
    ];

	public function client()
    {
        return $this->hasOne('App\Client' , 'id', 'client_id');
    }

}
