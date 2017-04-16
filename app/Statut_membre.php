<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statut_membre extends Model {

	protected $table = 'statut_membres';
	public $timestamps = false;

	public function Posseder()
	{
		return $this->hasMany('App\User');
	}

}