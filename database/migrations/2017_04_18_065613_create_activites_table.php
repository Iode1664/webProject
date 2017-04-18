<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivitesTable extends Migration {

	public function up()
	{
		Schema::create('activites', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom');
			$table->text('description');
			$table->datetime('date_debut');
			$table->string('date_fin');
			$table->integer('id_statut')->unsigned();
			$table->string('lieu');
			$table->string('photo');
		});
	}

	public function down()
	{
		Schema::drop('activites');
	}
}