<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/* Need this 'Schema' class for creating
		the database columns during migrations. */
		Schema::create('albums', function(Blueprint $table)
		{
		    $table->increments('album_id');
			$table->string('album_name');
			$table->string('album_description')->nullable();
			$table->string('album_type');
			$table->string('album_origin');
			$table->string('album_pattern');
			$table->string('album_othername');
			$table->string('album_application_kitchen');
			$table->string('album_application_bathroom');
			$table->string('album_application_fireplace');
			$table->string('album_application_floor');
			$table->string('album_application_outdoor');
			$table->string('album_color_black');
			$table->string('album_color_blue');
			$table->string('album_color_brown');
			$table->string('album_color_gold');
			$table->string('album_color_gray');
			$table->string('album_color_green');
			$table->string('album_color_red');
			$table->string('album_color_white');
			$table->string('album_absorption');
			$table->string('album_density');
			$table->string('album_compression');
			$table->string('album_abrasion');
			$table->string('album_flex');
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
		/*If for whatever reason you need to do a 'rollback',
		This is essentially a reverse migration that drops the 'albums' table. */
		Schema::drop('albums');
	}

}
