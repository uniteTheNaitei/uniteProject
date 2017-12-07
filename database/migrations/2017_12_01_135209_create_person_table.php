<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('person', function(Blueprint $table)
		{
			$table->integer('idPerson', true);
			$table->string('email', 45);
			$table->string('password', 45);
			$table->string('name', 45);
			$table->float('weight', 10, 0)->nullable();
			$table->float('height', 10, 0)->nullable();
			$table->string('address', 45)->nullable();
			$table->integer('age')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('person');
	}

}
