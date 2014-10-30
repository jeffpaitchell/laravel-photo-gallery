@section('content')

	<div class="row">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <b>{{ Lang::get('gallery::gallery.overview') . ' ' . Lang::choice('gallery::gallery.album', 2) }}</b>
            </div>
            <div class="panel-body">

                <!-- HTML code for displaying all of the stones albums
                in a table.  The first @if statement checks to see
                if albums actually exist or not.  -->

                @if ($allAlbums->count())
                    <dl class="dl-horizontal">
                        <!-- Add this div class to make the table responsive -->
                        <div class = "table-responsive">
                            <table class="table">

                            <!--The table headers for all the stones albums -->    

                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Colors</th>
                                    <th>Origin</th>
                                    <th>Pattern</th>
                                    <th>Application/Description</th>
                                    <th>Active</th>
                                </tr>
                        <!-- For each album, display its data in the table.
                        Since $allAlbums is defined in 'GalleryController.php'
                        now we are assigning all the albums into an array
                        and the @foreach statement handles that very well.
                        Have $album point to each database column. -->            

                		@foreach($allAlbums as $album)
                        <tr>
                			 <td>{{ $album->album_id }}</b></td>
                			 <td>{{ $album->album_name }}</td>
                             <td>{{ $album->album_type }}</td>
                             <td>
                                <li>{{ $album->album_color_black}}</li>
                                <li>{{ $album->album_color_blue }}</li> 
                                <li>{{ $album->album_color_brown }}</li>
                                <li>{{ $album->album_color_gold }}</li>
                                <li>{{ $album->album_color_gray }}</li>
                                <li>{{ $album->album_color_green }}</li> 
                                <li>{{ $album->album_color_red }}</li> 
                                <li>{{ $album->album_color_white }}</li>
                            </td>
                             <td>{{ $album->album_origin }}</td>
                             <td>{{ $album->album_pattern }}</td>
                             <td>
                                <li>{{ $album->album_application_kitchen}}</li>
                                <li>{{ $album->album_application_bathroom }}</li> 
                                <li>{{ $album->album_application_fireplace }}</li>
                                <li>{{ $album->album_application_floor }}</li>
                                <li>{{ $album->album_application_outdoor }}</li>
                            </td>

                            <!-- Create a link that takes the user to 'album.blade.php'
                            Which is an overview for that particular album.  -->

                             <td><b>{{ link_to_route("gallery.album.show", 'Edit', array($album->album_id)) }}</b></td>
                        </tr>     
                        @endforeach

                        <!-- Need this 'php' statement for displaying the pagination
            of the albums. -->

                        {{ $allAlbums-> links()}}
                            </table>
                        </div>    


                    </dl>
            	@else
                	<b>{{ Lang::get('gallery::gallery.none') . Lang::choice('gallery::gallery.album', 2) }}</b>
            	@endif
            </div>
        </div>
    </div>
    
@stop