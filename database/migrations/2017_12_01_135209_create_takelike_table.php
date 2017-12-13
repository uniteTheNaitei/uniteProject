<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTakelikeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('takelike', function(Blueprint $table)
		{
			$table->integer('idPost');
			$table->integer('idPerson');
			$table->integer('likeType');
			$table->primary(['idPost','idPerson','likeType']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('takelike');
	}

}
