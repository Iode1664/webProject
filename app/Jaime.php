<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jaime extends Model {

	protected $table = 'jaimes';
	public $timestamps = true;

	public function Appartenir()
	{
		return $this->belongsTo('App\User');
	}

	public function Referer()
	{
		return $this->belongsTo('App\Photo');
	}

}