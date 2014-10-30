<?php

/* This migrations file was not edited in any way.
You shouldn't have to change anything in here. */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSoftOrderingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('albums', function(Blueprint $table)
		{
			$table->integer('order')->unsigned();
		});

		Schema::table('photos', function(Blueprint $table)
		{
			$table->integer('order')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('albums', function( Blueprint $table)
		{
    		$table->dropColumn('order');
		});

		Schema::table('photos', function( Blueprint $table)
		{
    		$table->dropColumn('order');
		});
	}

}
