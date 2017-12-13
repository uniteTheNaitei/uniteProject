<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTakelessonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('takelesson', function(Blueprint $table)
		{
			$table->integer('idJoinCourse');
			$table->integer('idLesson');
			$table->integer('stt');
			$table->boolean('complete')->default(0);
			$table->primary(['idJoinCourse','idLesson']);
			$table->index(['idLesson','stt'], 'idLesson_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('takelesson');
	}

}
