<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCommentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comment', function(Blueprint $table)
		{
			$table->foreign('idPost', 'idxCosdfdsfurse')->references('idCourse')->on('course')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('idMotherComment', 'idxMothedsfdsfsrComment')->references('idComment')->on('comment')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('idUser', 'idxdsfdsfsdUser')->references('idPerson')->on('person')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('idPost', 'idxsdfdsBlog')->references('idPost')->on('blogpost')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comment', function(Blueprint $table)
		{
			$table->dropForeign('idxCosdfdsfurse');
			$table->dropForeign('idxMothedsfdsfsrComment');
			$table->dropForeign('idxdsfdsfsdUser');
			$table->dropForeign('idxsdfdsBlog');
		});
	}

}
