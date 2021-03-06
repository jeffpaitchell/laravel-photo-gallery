<?php

/* This migrations file was not edited in any way.
You shouldn't have to change anything in here unless you want to add 
more database columns to the photos. */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photos', function(Blueprint $table)	
		{
			$table->increments('photo_id');
			$table->string('photo_name');
			$table->string('photo_description')->nullable();
			$table->string('photo_path');
			$table->integer('album_id')->unsigned();
			$table->foreign('album_id')->references('album_id')->on('albums');
			$table->timestamps();
		});
	}	

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('photos');
	}

}
