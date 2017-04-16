<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserActivitesTable extends Migration {

	public function up()
	{
		Schema::create('user_activites', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_user')->unsigned();
			$table->integer('id_activite')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('user_activites');
	}
}