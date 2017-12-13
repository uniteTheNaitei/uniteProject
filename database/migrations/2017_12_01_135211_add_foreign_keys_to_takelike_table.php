<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTakelikeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('takelike', function(Blueprint $table)
		{
			$table->foreign('idPost', 'idasasdsadPost')->references('idPost')->on('blogpost')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('idPost', 'idasdfsCmt')->references('idComment')->on('comment')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('idPost', 'idxasdfaPerson')->references('idPerson')->on('person')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('idPost', 'idxgsdfgfdCourse')->references('idCourse')->on('course')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('takelike', function(Blueprint $table)
		{
			$table->dropForeign('idasasdsadPost');
			$table->dropForeign('idasdfsCmt');
			$table->dropForeign('idxasdfaPerson');
			$table->dropForeign('idxgsdfgfdCourse');
		});
	}

}
