<?php

/* This migrations file was not edited in any way.
You shouldn't have to change anything in here. */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSoftDeletingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('albums', function(Blueprint $table)
		{
			$table->softDeletes();
		});

		Schema::table('photos', function(Blueprint $table)
		{
			$table->softDeletes();
		});
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('albums', function(Blueprint $table)
		{
			$table->dropColumn('deleted_at');
		});

		Schema::table('photos', function(Blueprint $table)
		{
			$table->dropColumn('deleted_at');
		});
		
	}

}
