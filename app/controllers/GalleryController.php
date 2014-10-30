<?php 

/* Must include the third-party files below in the 'use' statements */

use JeroenG\LaravelPhotoGallery\Controllers\AlbumsController;

use JeroenG\LaravelPhotoGallery\Models\Album;

use JeroenG\LaravelPhotoGallery\Validators as Validators;

class GalleryController extends BaseController {

	/**
	 * The album model
	 *
	 * @var \JeroenG\LaravelPhotoGallery\Models\Album
	 **/
	protected $album;

	/**
	 * The photo model
	 *
	 * @var \JeroenG\LaravelPhotoGallery\Models\Photo
	 **/
	protected $photo;

	/* Added this code to include the layout.  This is the local version of
	'master.blade.php' which is inside 'app\views\layouts'.  I had to makde a local
	version of 'master.blade.php' so that the 'index()' function below would work properly */

	protected $layout = 'layouts.master';

	/**
	 * Instantiate the controller
	 *
	 * @param \JeroenG\LaravelPhotoGallery\Models\Album $album
	 * @param \JeroenG\LaravelPhotoGallery\Models\Photo $photo
	 * @return void
	 **/

	public function __construct()
    {
        $this->album = \App::make('Repositories\AlbumRepository');
        $this->photo = \App::make('Repositories\PhotoRepository');
    }

    /**
	 * Methods for showing
     **/

	/**
	 * Listing all albums
	 *
	 * @return \Illuminate\View\View
	 **/

	/* Modified the 'index()' function so that album/stone results
	are now paginated instead of all the results being stacked on top of each other. */

	public function index()
	{

		/* Limit each page on 'index.blade.php' to 10 stones per page
		using the 'paginate()' function below. */

		$allAlbums = Album::paginate(10);

		/* Display the result above, which is essentially a query that
		the 'Album' class is accessing.  Show the result by using
		the line of code below that accesses 'master.blade.php'
		as a template and displays all the stones
		on the homepage in 'index.blade.php' */

		$this->layout->content = \View::make('gallery::index', array('allAlbums' => $allAlbums));
	}
}