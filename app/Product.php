<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
class Product extends Model {

	protected $table = 'products';
	public $timestamps = true;
	protected $fillable = array('title', 'imagePath', 'description', 'price');

}
=======
class Product extends Model
{
    protected $fillable = ['imagePath','title','description','price'];
}
>>>>>>> 53380f02e1f0b207ba271bc8c5ee7aa96a57c0e4
