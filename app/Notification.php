<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
		protected $fillable = [
        'signed',
		'button_id'
    ];

	public function button()
    {
        return $this->hasOne('App\Button' , 'id', 'button_id');
    }

}
