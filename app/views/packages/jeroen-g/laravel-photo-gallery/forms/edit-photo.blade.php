
<!-- Create a form for editing a photo in an album.  The 'method' must be 'PUT' 
The form is using 'EditPhotosController.php' and its function 'update()'. -->

{{ Form::model($photo, array('method' => 'PUT', 'route' => array('edit_photo', $photo->album_id, $photo->photo_id))) }}

    <!-- Textbox input. -->

    <div class="form-group">
        {{ Form::label('photo_name', Lang::get('gallery::gallery.name') . ':') }}
        {{ Form::text('photo_name', null, array('class' => 'form-control')) }}
    </div>
    
    <!-- Dropdown input.  Have it default to the album that the photo currently belongs to.
    '$dropdown' is a variable that is defined in 'PhotosController.php' that selects
    All the albums that are currently stored in the database. -->

    <div class="form-group">
        {{ Form::label('album_id', Lang::choice('gallery::gallery.album', 1) . ':') }}
        {{ Form::select('album_id', $dropdown, $photo->album_id) }}
    </div>

    <!-- Textbox input. -->

    <div class="form-group">
        {{ Form::label('photo_description', Lang::get('gallery::gallery.desc') . ':') }}
        {{ Form::textarea('photo_description', null, array('class' => 'form-control')) }}
    </div>

    <!-- Form Submit button. -->

    <div class="form-group">
        {{ Form::submit('Update' , array('class' => 'btn btn-primary')) }}
        {{ link_to_route("gallery.album.photo.show", Lang::get('gallery::gallery.cancel'), array($photo->album_id, $photo->photo_id), array('class' => 'btn btn-default')) }}
    </div>

    <!-- End the form. -->

{{ Form::close() }}




