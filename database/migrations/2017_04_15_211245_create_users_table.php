<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom');
			$table->string('prenom');
			$table->string('email')->unique();
			$table->enum('promo', array('Exia', 'EI'));
			$table->string('password');
			$table->integer('id_statut')->unsigned();
			$table->string('avatar');
			$table->rememberToken('rememberToken');
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}