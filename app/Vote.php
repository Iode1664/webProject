<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model {

	protected $table = 'votes';
	public $timestamps = true;

	public function Appartenir()
	{
		return $this->belongsTo('App\User');
	}

	public function Referer()
	{
		return $this->belongsTo('App\Horaire');
	}

}