<?php

/*
|--------------------------------------------------------------------------
| Package Routes
|--------------------------------------------------------------------------
|
| Here is where all of the routes for the Photo Gallery package are registered.
|
*/

/*
Creating routes is absoutely necessary in Laravel PHP since this is how you link your 
controllers to your views.  
*/


/* Main route to your home page.  Accesses the local controller 'GalleryController.php'
and uses its 'index()' function on the Photo Gallery's main homepage.
This is how all the stones are displayed. */

Route::get('gallery', array('as' => 'gallery', 'uses' => 'GalleryController@index'));

/* The 2 routes below are using the third-party controllers 'AlbumsController.php'
and 'PhotosController.php' so that whenever the prefixes 'Album' and 'Photo'
are used in any 'link_to_route()' statements, they will use these controllers'
functions respectively (e.g. -> 'show()', 'create()')  */

Route::group(array('prefix' => 'gallery'), function()
{
	Route::resource('album', 'JeroenG\LaravelPhotoGallery\Controllers\AlbumsController', array('except' => array('index')));
	Route::resource('album.photo', 'JeroenG\LaravelPhotoGallery\Controllers\PhotosController', array('except' => array('index')));
});


/*Custom route I created that uses the controller 'EditAlbumsController2.php' and 
its function 'update()'.  This is used so that Stones are properly edited
with the additional database columns I created. */

Route::put('gallery/album/{id}/edit', array('as'=>'edit_album2', 'uses'=>'EditAlbumsController2@update'));

/*Custom route I created that uses the controller 'EditPhotosController.php' and 
its function 'update()'.  This is used so that Photos are properly edited
and now pass validation. */

Route::put('gallery/album/{albumid}/photo/{photoid}/edit', array('as'=>'edit_photo', 'uses'=>'EditPhotosController@update'));

/*Old route that is no longer used. */

Route::delete('gallery/album/{albumid}/photo/{photoid}/edit', array('as'=>'delete_photo', 'uses'=>'EditPhotosController@destroy'));

