<!doctype html>


<!--
This is the main layout that is used on all of the pages for the Photo Gallery.
The 'Bootstrap' CSS template is used and this layout is creating a header with
links for 1)Taking the user to the home page, 2)'Adding Stones', 3)'Adding Photos'

-->

<html>
	<head>
    	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href=" <?php echo asset('css/style.css')?>" type="text/css">
    	<style type="text/css">
    		form ul {list-style: none}
            .navbar {border-radius: 0px;}
    	</style>
    </head>

    <body>
    	<nav class="navbar navbar-inverse" role="navigation">
			<div class="container-fluid">
		    	<!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Photo Gallery</a>
                </div>
		    	<div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Here are the links in the header -->

                        <!--Link to the home page 'index.blade.php'  -->
    		      		<li {{ (Request::is('gallery') ? 'class="active"' : '') }}>{{ link_to_route('gallery', 'Home') }}</li>

                        <!--Link to creating albums using 'AlbumsController.php' 
                        and its 'create()' function -->
    		      		<li {{ (Request::is('gallery/album/create') ? 'class="active"' : '') }}>{{ link_to_route('gallery.album.create', 'New Stone') }}</li>

                        <!--Link to creating photos using 'PhotosController.php' 
                        and its 'create()' function -->

    		      		<li {{ (Request::is('gallery/album/*/photo/create') ? 'class="active"' : '') }}>{{ link_to_route('gallery.album.photo.create', 'Add photo') }}</li>
    		    	</ul>
    		  	</div>
            </div>
		</nav>

    	<div class="container">
    		@if (Session::has('message'))
            	<div class="flash alert">
            		<p>{{ Session::get('message') }}</p>
        		</div>
			@endif

            <!-- The @yield code below displays all the content from the currently
            selected view such as 'album.blade.php', 'photo.blade.php' etc
            This will be updated depending on which route the user selects.   -->

    		@yield('content')
        </div>

        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	</body>

</html>