<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {


    use Notifiable;

	protected $table = 'users';
	public $timestamps = true;
	protected $fillable = array('nom', 'prenom', 'email', 'promo', 'password', 'id_statut','avatar');
	protected $hidden = array('password', 'rememberToken');

	public function Appartenir()
	{
		return $this->belongsTo('App\Statut_membre', 'id_statut');
	}

	public function Participer()
	{
		return $this->belongsToMany('App\Activite');
	}

	public function Ecrire()
	{
		return $this->hasMany('App\Commentaire');
	}

	public function Voter()
	{
		return $this->hasMany('App\Vote');
	}

	public function Laisser()
	{
		return $this->hasMany('App\Jaime');
	}

}