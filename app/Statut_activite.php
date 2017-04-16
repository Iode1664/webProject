<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statut_activite extends Model {

	protected $table = 'statut_activites';
	public $timestamps = false;

	public function Posseder()
	{
		return $this->hasMany('App\Activite');
	}

}