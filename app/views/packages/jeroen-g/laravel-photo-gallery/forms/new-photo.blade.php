
<!-- Create a form for submitting a new photo.  The 'method' must be 'POST' 
The form is using 'PhotosController.php' and its function 'create()'. -->

{{ Form::open(array('route' => 'gallery.album.photo.store', 'method' => 'POST', 'files' => true)) }}

    <!-- Textbox input. -->
        
    <div class="form-group">
        {{ Form::label('photo_name', Lang::get('gallery::gallery.name') . ':') }}
        {{ Form::text('photo_name', null, array('class' => 'form-control')) }}
    </div>

    <!-- Upload input or allowing for a file path to be submitted. -->

    <div class="form-group">
        {{ Form::label('photo_path', Lang::get('gallery::gallery.path') . ':') }}
        {{ Form::file('photo_path', array('class' => 'form-control')) }}
    </div>

    <!-- Dropdown input from stored albums. -->

    <div class="form-group">
        {{ Form::label('album_id', Lang::choice('gallery::gallery.album', 1) . ':') }}
        {{ Form::select('album_id', $dropdown, array('class' => 'form-control')) }}
    </div>

    <!-- Textbox input. -->

    <div class="form-group">
        {{ Form::label('photo_description', Lang::get('gallery::gallery.desc') . ':') }}
        {{ Form::textarea('photo_description', null, array('class' => 'form-control')) }}
    </div>

    <!-- Form Submit button. -->

    <div class="form-group">
        {{ Form::submit(Lang::get('gallery::gallery.submit'), array('class' => 'btn btn-primary')) }}
    </div>

    <!-- End the form. -->

{{ Form::close() }}