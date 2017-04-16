<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatutMembresTable extends Migration {

	public function up()
	{
		Schema::create('statut_membres', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nom');
		});
	}

	public function down()
	{
		Schema::drop('statut_membres');
	}
}