<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogpostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blogpost', function(Blueprint $table)
		{
			$table->integer('idPost', true);
			$table->integer('idUser')->index('userid_idx');
			$table->time('Time');
			$table->string('content', 450);
			$table->string('img_link', 450)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('blogpost');
	}

}
