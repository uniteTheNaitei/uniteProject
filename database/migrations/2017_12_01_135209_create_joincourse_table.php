<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJoincourseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('joincourse', function(Blueprint $table)
		{
			$table->integer('idjoinCourse', true);
			$table->integer('idCourse')->index('idCourse_idx');
			$table->integer('idUser')->index('idUser_idx');
			$table->dateTime('startTime');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('joincourse');
	}

}
