<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comment', function(Blueprint $table)
		{
			$table->integer('idComment', true);
			$table->integer('idPost')->index('idxCourse_idx');
			$table->integer('idMotherComment')->index('idMotherComment_idx');
			$table->integer('idUser')->index('idxxUser_idx');
			$table->string('content', 200);
			$table->integer('type');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comment');
	}

}
