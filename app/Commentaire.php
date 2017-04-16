<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model {

	protected $table = 'commentaires';
	public $timestamps = false;
	protected $fillable = array('texte');

	public function Commenter()
	{
		return $this->belongsTo('App\Photo');
	}

	public function Appartenir()
	{
		return $this->belongsTo('App\User');
	}

}