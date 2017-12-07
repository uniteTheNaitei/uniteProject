<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCourseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('course', function(Blueprint $table)
		{
			$table->foreign('idCoach', 'idCoach')->references('idPerson')->on('person')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('course', function(Blueprint $table)
		{
			$table->dropForeign('idCoach');
		});
	}

}
