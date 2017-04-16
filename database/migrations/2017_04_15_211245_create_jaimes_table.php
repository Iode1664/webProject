<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJaimesTable extends Migration {

	public function up()
	{
		Schema::create('jaimes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_user')->unsigned();
			$table->integer('id_photo')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('jaimes');
	}
}