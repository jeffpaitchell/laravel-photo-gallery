<?php

/* Must include the third-party files below in the 'use' statements */

use JeroenG\LaravelPhotoGallery\Controllers\AlbumsController;

use JeroenG\LaravelPhotoGallery\Controllers\PhotosController;

use JeroenG\LaravelPhotoGallery\Models\Album;

use JeroenG\LaravelPhotoGallery\Models\Photo;

/* Must include the local validators class below in order for photos
to pass validation when editing them */

use app\validators as Validators;

class EditPhotosController extends PhotosController {

	/* Need this '__construct()' function since you are calling the 'AlbumsController' which is the Parent */

	public function __construct()
	{
		parent::__construct();
	}

	/* A custom 'update' function I created for editing photos
	since there was a validation bug in the third-party version
	of this controller   */

	public function update($albumId, $photoId)
	{
			$input = \Input::except('_method');

		/* The line below calls the 'Validator' class for validating the album
		I'm using a local validator class instead of the third-party version
		so that editing photos will now pass validation when a form is submitted properly.  */

			$validation = new Validators\Photo($input);

			if ($validation->passes())
			{	

			/* Retrieve the photo id by using the 'Photo' class from the 'Photo' model 
        and assign the particular Photo object to the variable '$photo' */

			$photo = Photo::find($photoId);

			/* These 3 lines of code are standard for collecting the input 
        of both textboxes and dropdown boxes.  */

			$photo->photo_name = $input['photo_name'];
		    $photo->photo_description = $input['photo_description'];
		    $photo->album_id = $input['album_id'];

		    /* Code for saving the edits that a user makes. */

		    $photo->touch();
		    $photo->save();

		    /* Redirect the user back to that particular photo's overview
		which uses 'photo.blade.php' */

		    return \Redirect::route("gallery.album.photo.show", array('albumid' => $albumId, 'photoid' => $photoId));				
			}

			else
			{

				/*When validation fails, the following lines of code are executed
        	and the browser stays on the Edit page for that photo.
        	Error messages are also displayed. */

				return \Redirect::route("gallery.album.photo.edit", array('albumid' => $albumId, 'photoid' => $photoId))
            	->withInput()
            	->withErrors($validation->errors)
            	->with('message', \Lang::get('gallery::gallery.errors'));
			}

	}

	/*This function was an experiment that is no longer used.
	Decided to keep it in the code since it is not being called anywhere,
	So no harm done! */

	public function destroy($albumId, $photoId)
	{
        $this->photo->delete($photoId);
        return \Redirect::route("gallery.album.show", array('id' => $albumId));
	}

}





