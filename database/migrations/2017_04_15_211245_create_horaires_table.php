<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHorairesTable extends Migration {

	public function up()
	{
		Schema::create('horaires', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->datetime('Debut');
			$table->datetime('Fin');
			$table->integer('id_activite')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('horaires');
	}
}