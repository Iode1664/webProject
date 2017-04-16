<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentairesTable extends Migration {

	public function up()
	{
		Schema::create('commentaires', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamp('timestamps');
			$table->string('texte');
			$table->integer('id_user')->unsigned();
			$table->integer('id_photo')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('commentaires');
	}
}