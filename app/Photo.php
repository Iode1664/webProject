<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

	protected $table = 'photos';
	public $timestamps = true;
    protected $fillable = array('pathPhoto', 'id_activite');

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