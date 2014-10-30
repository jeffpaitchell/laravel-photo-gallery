@section('content')

<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading clearfix">

            <!-- Display the photo's name. -->

            <b>{{ $photo->photo_name }}</b>
            <div class="pull-right">
                <a class="btn btn-default" href="{{ URL::route('gallery.album.show', array('id' => $photo->album_id)) }}">{{ Lang::get('gallery::gallery.return') }}</a>
            </div>
        </div>
        <div class="panel-body">

            <!-- Display an image of the photo. -->

            <img class="img" src='{{ asset("uploads/photos/" . $photo->photo_path ) }}' />
        </div>
        <div class="panel-footer clearfix">

            <!-- Display the photo's description. -->

    	    {{ $photo->photo_description }}
            {{ Form::open(array('route' => array("gallery.album.photo.destroy", $photo->album_id, $photo->photo_id))) }}

                <!-- Generate the link below for editing the photo's information.
                Accesses the view 'edit-form.blade.php'. -->

                    {{ link_to_route("gallery.album.photo.edit", Lang::get('gallery::gallery.edit'), array('albumId' => $photo->album_id, 'photoId' => $photo->photo_id), array('class' => 'btn btn-info')) }}

                    <!-- Second link for deleting the photo. -->

                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit(Lang::get('gallery::gallery.delete'), array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
        </div>
    </div>
</div>
	
@stop