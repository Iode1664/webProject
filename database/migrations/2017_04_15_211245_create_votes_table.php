<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVotesTable extends Migration {

	public function up()
	{
		Schema::create('votes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_horaire')->unsigned();
			$table->integer('id_user')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('votes');
	}
}