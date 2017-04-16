<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horaire extends Model {

	protected $table = 'horaires';
	public $timestamps = true;
	protected $fillable = array('Debut', 'Fin');

	public function Appartenir()
	{
		return $this->belongsTo('App\Activite');
	}

	public function Posseder()
	{
		return $this->hasMany('App\Vote');
	}

}