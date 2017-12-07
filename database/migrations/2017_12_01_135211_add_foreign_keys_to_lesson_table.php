<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLessonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lesson', function(Blueprint $table)
		{
			$table->foreign('idCourse', 'idCourse')->references('idCourse')->on('course')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lesson', function(Blueprint $table)
		{
			$table->dropForeign('idCourse');
		});
	}

}
