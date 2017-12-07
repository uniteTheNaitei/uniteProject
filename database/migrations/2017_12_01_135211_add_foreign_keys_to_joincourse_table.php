<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToJoincourseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('joincourse', function(Blueprint $table)
		{
			$table->foreign('idUser', 'idUser')->references('idPerson')->on('person')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('idCourse', 'idxCourse')->references('idCourse')->on('course')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('joincourse', function(Blueprint $table)
		{
			$table->dropForeign('idUser');
			$table->dropForeign('idxCourse');
		});
	}

}
