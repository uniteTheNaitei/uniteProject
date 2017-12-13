<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTakelessonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('takelesson', function(Blueprint $table)
		{
			$table->foreign('idJoinCourse', 'idJoinCourse')->references('idjoinCourse')->on('joincourse')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('idLesson', 'idLesson')->references('idCourse')->on('lesson')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('takelesson', function(Blueprint $table)
		{
			$table->dropForeign('idJoinCourse');
			$table->dropForeign('idLesson');
		});
	}

}
