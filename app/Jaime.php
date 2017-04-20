<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jaime extends Model {

	protected $table = 'jaimes';
	public $timestamps = true;
    protected $fillable = array('id_user', 'id_photo');

	public function Appartenir()
	{
		return $this->belongsTo('App\User');
	}

	public function Referer()
	{
		return $this->belongsTo('App\Photo');
	}

}