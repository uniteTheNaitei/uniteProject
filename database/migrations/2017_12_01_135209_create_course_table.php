<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course', function(Blueprint $table)
		{
			$table->integer('idCourse', true);
			$table->string('name', 100);
			$table->integer('idCoach')->index('idCoach_idx');
			$table->float('Money', 10, 0)->nullable()->default(0);
			$table->string('info', 450)->nullable();
			$table->integer('level');
			$table->string('img_1', 300)->nullable();
			$table->string('img_2', 300)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('course');
	}

}
