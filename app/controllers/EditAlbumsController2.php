<?php 

/* Must include the third-party files below in the 'use' statements */

use JeroenG\LaravelPhotoGallery\Controllers\AlbumsController; // The controller 'AlbumsController'

use JeroenG\LaravelPhotoGallery\Models\Album; // The model 'Album'

use JeroenG\LaravelPhotoGallery\Validators as Validators; // The model 'Validators'

class EditAlbumsController2 extends AlbumsController {

	/* Need this '__construct()' function since you are calling the 'AlbumsController' which is the Parent */

	public function __construct() 
	{
		parent::__construct();
	}

	/* A custom 'update' function I created for editing albums
	since new database columns were created.  */

	public function update($id)
	{
		$input = \Input::all();

		/*The line below calls the 'Validator' class for validating the album
		I didn't edit the validation for the albums since each stone
		varies in terms of containing information.  */

        $validation = new Validators\Album($input);

        if ($validation->passes())
        {

        /* Retrieve the album id by using the 'Album' class from the 'Album' model 
        and assign the particular Album object to the variable '$album' */	
        $album = Album::find($id);

        /*These 6 lines of code are standard for collecting the input 
        of both textboxes and dropdown boxes.  */

		$album->album_name = $input['album_name'];
		$album->album_description = $input['album_description'];
		$album->album_type = $input['album_type'];
		$album->album_origin = $input['album_origin'];
		$album->album_pattern = $input['album_pattern'];
		$album->album_othername = $input['album_othername'];
		
		/* Use the lines of code below for checkboxes to be left unchecked and 
		not generate any errors.  */	

		$album->album_application_kitchen = Input::get('album_application_kitchen');	
		$album->album_application_bathroom = Input::get('album_application_bathroom');
		$album->album_application_fireplace = Input::get('album_application_fireplace');
		$album->album_application_floor = Input::get('album_application_floor');
		$album->album_application_outdoor = Input::get('album_application_outdoor');
		$album->album_color_black = Input::get('album_color_black');
		$album->album_color_blue = Input::get('album_color_blue');
		$album->album_color_brown = Input::get('album_color_brown');
		$album->album_color_gold = Input::get('album_color_gold');
		$album->album_color_gray = Input::get('album_color_gray');
		$album->album_color_green = Input::get('album_color_green');
		$album->album_color_red = Input::get('album_color_red');
		$album->album_color_white = Input::get('album_color_white');;

		/* More standard lines of code for collecting input from textboxes */

		$album->album_absorption = $input['album_absorption'];
		$album->album_density = $input['album_density'];
		$album->album_compression = $input['album_compression'];
		$album->album_abrasion = $input['album_abrasion'];
		$album->album_flex = $input['album_flex'];

		/* Code for saving the edits that a user makes. */

		$album->touch();
		$album->save();

		/*Redirect the user back to that particular album's overview
		which uses 'album.blade.php' */

		return \Redirect::route('gallery.album.show', array('id' => $id));
        }
        else
        {
        	/*When validation fails, the following lines of code are executed
        	and the browser stays on the Edit page for that album.
        	Error messages are also displayed. */

        	return \Redirect::route('gallery.album.edit', array('id' => $id))
            ->withInput()
            ->withErrors($validation->errors)
            ->with('message', \Lang::get('gallery::gallery.errors'));
        }
	}


}





