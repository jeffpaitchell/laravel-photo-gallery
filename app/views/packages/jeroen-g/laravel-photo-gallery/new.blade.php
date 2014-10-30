@section('content')

<!-- Template for when creating a new album or photo.
You don't really need to edit much here unless its absolutely necessary. -->

<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <b>{{ Lang::get('gallery::gallery.create') . ' ' . Lang::choice("gallery::gallery.$type", 1) }}</b>
        </div>
        <div class="panel-body">

    <!-- Call up the appropriate form for either adding a new album or photo. --> 
           
    {{ $form }}

    <!-- Error message are displayed below.  This occurs when validation fails. -->

    @if ($errors->any())
            <ul>
                {{ implode('', $errors->all('<li class="error">:message</li>')) }}
            </ul>
    @endif
        </div>
    </div>
</div>

@stop


