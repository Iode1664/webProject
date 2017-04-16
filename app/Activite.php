<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model {

	protected $table = 'activites';
	public $timestamps = true;
	protected $fillable = array('nom', 'date_debut', 'lieu');

	public function Accueillir()
	{
		return $this->belongsToMany('App\User');
	}

	public function Appartenir()
	{
		return $this->belongsTo('App\Statut_activite');
	}

	public function Detenir()
	{
		return $this->hasMany('App\Photo');
	}

	public function Posseder()
	{
		return $this->hasMany('App\Horaire');
	}

}