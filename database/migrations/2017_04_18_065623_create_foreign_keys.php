<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('id_statut')->references('id')->on('statut_membres')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('activites', function(Blueprint $table) {
			$table->foreign('id_statut')->references('id')->on('statut_activites')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('photos', function(Blueprint $table) {
			$table->foreign('id_activite')->references('id')->on('activites')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('commentaires', function(Blueprint $table) {
			$table->foreign('id_user')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('commentaires', function(Blueprint $table) {
			$table->foreign('id_photo')->references('id')->on('photos')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('votes', function(Blueprint $table) {
			$table->foreign('id_horaire')->references('id')->on('horaires')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('votes', function(Blueprint $table) {
			$table->foreign('id_user')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_activites', function(Blueprint $table) {
			$table->foreign('id_user')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_activites', function(Blueprint $table) {
			$table->foreign('id_activite')->references('id')->on('activites')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('horaires', function(Blueprint $table) {
			$table->foreign('id_activite')->references('id')->on('activites')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('jaimes', function(Blueprint $table) {
			$table->foreign('id_user')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('jaimes', function(Blueprint $table) {
			$table->foreign('id_photo')->references('id')->on('photos')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_id_statut_foreign');
		});
		Schema::table('activites', function(Blueprint $table) {
			$table->dropForeign('activites_id_statut_foreign');
		});
		Schema::table('photos', function(Blueprint $table) {
			$table->dropForeign('photos_id_activite_foreign');
		});
		Schema::table('commentaires', function(Blueprint $table) {
			$table->dropForeign('commentaires_id_user_foreign');
		});
		Schema::table('commentaires', function(Blueprint $table) {
			$table->dropForeign('commentaires_id_photo_foreign');
		});
		Schema::table('votes', function(Blueprint $table) {
			$table->dropForeign('votes_id_horaire_foreign');
		});
		Schema::table('votes', function(Blueprint $table) {
			$table->dropForeign('votes_id_user_foreign');
		});
		Schema::table('user_activites', function(Blueprint $table) {
			$table->dropForeign('user_activites_id_user_foreign');
		});
		Schema::table('user_activites', function(Blueprint $table) {
			$table->dropForeign('user_activites_id_activite_foreign');
		});
		Schema::table('horaires', function(Blueprint $table) {
			$table->dropForeign('horaires_id_activite_foreign');
		});
		Schema::table('jaimes', function(Blueprint $table) {
			$table->dropForeign('jaimes_id_user_foreign');
		});
		Schema::table('jaimes', function(Blueprint $table) {
			$table->dropForeign('jaimes_id_photo_foreign');
		});
	}
}