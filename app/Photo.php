<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

	protected $table = 'photos';
	public $timestamps = true;

	public function Appartenir()
	{
		return $this->belongsTo('App\Activite');
	}

	public function Posseder()
	{
		return $this->hasMany('App\Commentaire');
	}

	public function Recevoir()
	{
		return $this->hasMany('App\Jaime');
	}

}