
<!-- Create a form for submitting a new album.  The 'method' must be 'POST' 
The form is using 'AlbumsController.php' and its function 'create()'. -->

{{ Form::open(array('route' => 'gallery.album.store', 'method' => 'POST')) }}

    <!-- Textbox input. -->

    <div class="form-group">
        {{ Form::label('album_name', 'Stone Name' . ':') }}
        {{ Form::text('album_name', null, array('class' => 'form-control')) }}
    </div>

    <!-- Textbox input. -->

    <div class="form-group">
        {{ Form::label('album_description', 'Stone Description' . ':') }}
        {{ Form::text('album_description', null, array('class' => 'form-control')) }}
    </div>

    <!-- Dropdown input. -->

    <div class="form-group">
        {{ Form::label('album_origin', 'Origin:') }}
        {{ Form::select('album_origin', array('Africa' => 'Africa', 'Angola' => 'Angola', 'Argentina' => 'Argentina', 'Australia' => 'Australia', 'Austria' => 'Austria', 'Belgium' => 'Belgium', 'Braislien' => 'Braislien', 'Brazil' => 'Brazil', 'Bulgaria' => 'Bulgaria', 'Canada' => 'Canada', 'China' => 'China', 'Croatia' => 'Croatia', 'Cuba' => 'Cuba', 'Czech Republic' => 'Czech Republic', 'Egypt' => 'Egypt', 'Engineered' => 'Engineered', 'Ethiopia' => 'Ethiopia', 'Finland' => 'Finland', 'France' => 'France', 'Georgia' => 'Georgia', 'Germany' => 'Germany', 'Great Britain' => 'Great Britain', 'Greece' => 'Greece', 'Guatemala' => 'Guatemala', 'India' => 'India', 'Iran' => 'Iran', 'Ireland' => 'Ireland', 'Israel' => 'Israel', 'Italy' => 'Italy', 'Japan' => 'Japan', 'Kasahstan' => 'Kasahstan', 'Macedonia' => 'Macedonia', 'Madagascar' => 'Madagascar', 'Malaysia' => 'Malayasia', 'Mexico' => 'Mexico', 'Mongolia' => "Mongolia", 'Morocco' => 'Morocco', 'Mozambique' => 'Mozambique', 'Nambia' => 'Namibia', 'Nigeria' => 'Nigeria', 'Norway' => 'Norway', 'Other' => 'Other', 'Pakistan' => 'Pakistan', 'Peru' => 'Peru', 'Poland' => 'Poland', 'Portugal' => 'Portugal', 'Russia' => 'Russia', 'Saudi Arabia' => 'Saudi Arabia', 'Sweden' => 'Sweden', 'Switzerland' => 'Switzerland', 'Tunisia' => 'Tunisia', 'Turkey' => 'Turkey', 'Ukraine' => 'Ukraine', 'Uruguay' => 'Uruguay', 'USA' => 'USA', 'Venezuela' => 'Venezuela', 'Vietnam' => 'Vietnam', 'Yugoslavia' => 'Yugoslavia', 'Zambia' => 'Zambia', 'Zimbabwe' => 'Zimbabwe') ,array('class' => 'form-control')) }}

        <!-- Dropdown input. -->

        {{ Form::label('album_pattern', 'Pattern:') }}
        {{ Form::select('album_pattern', array('Veins' => 'Veins', 'Speckles' => 'Speckles', 'Solid Color' => 'Solid Color', ) ,array('class' => 'form-control')) }}

        <!-- Dropdown input. -->

        {{ Form::label('album_type', 'Type:') }}
        {{ Form::select('album_type', array('Marble' => 'Marble', 'Granite' => 'Granite', 'Onyx' => 'Onyx', 'Limestone' => 'Limestone', 'Slate' => 'Slate', 'Quartzite' => 'Quartzite', 'Other' => 'Other', 'Soapstone' => 'Soapstone', 'Travertine' => 'Travertine', 'Caesar Stone' => 'Caesar Stone', 'Quartz Based Ceramic' => 'Quartz Based Ceramic', 'Gemstone' => 'Gemstone', 'Granite*' => 'Granite*', 'Marble*' => 'Marble*', 'Agglomerate' => 'Agglomerate', 'Glass' => 'Glass', 'Quantra' => 'Quantra', 'Santa Margherita' => 'Santa Margherita', 'Antolini Luigi' => 'Antolini Luigi', 'Marble.com' => 'Marble.com', 'Porcelain Tile' => 'Porcelain Tile', 'Onyx Tile' => 'Onyx Tile', 'Lava Stone Tile' => 'Lava Stone Tile') ,array('class' => 'form-control')) }}

    </div>

    <div class="form-group">
        <b>Application:</b><br />

        <div class ="form-group">

        <!-- Use code below for generating checkboxes -->

        <!-- Checkbox input. -->    

        {{ Form::checkbox('album_application_kitchen', 'Kitchen') }}
        {{ Form::label('album_application_kitchen', 'Kitchen') }}
        {{ Form::checkbox('album_application_bathroom', 'Bathroom') }}
        {{ Form::label('album_application_bathroom', 'Bathroom') }}<br />
        {{ Form::checkbox('album_application_fireplace', 'Fireplace') }}
        {{ Form::label('album_color_fireplace', 'Fireplace') }}
        {{ Form::checkbox('album_application_floor', 'Floor') }}
        {{ Form::label('album_application_floor', 'Floor') }}<br />
        {{ Form::checkbox('album_application_outdoor', 'Outdoor') }}
        {{ Form::label('album_application_outdoor', 'Outdoor') }}

        </div>

    </div>

    <div class="form-group">
        <b>Colors:</b><br />

        <div class ="form-group">

        <!-- Use code below for generating checkboxes -->

        <!-- Checkbox input. -->        

        {{ Form::checkbox('album_color_black', 'Black') }}
        {{ Form::label('album_color_black', 'Black') }}
        {{ Form::checkbox('album_color_blue', 'Blue') }}
        {{ Form::label('album_color_blue', 'Blue') }}<br />
        {{ Form::checkbox('album_color_brown', 'Brown') }}
        {{ Form::label('album_color_brown', 'Brown') }}
        {{ Form::checkbox('album_color_gold', 'Gold') }}
        {{ Form::label('album_color_gold', 'Gold') }}<br />
        {{ Form::checkbox('album_color_gray', 'Gray') }}
        {{ Form::label('album_color_gray', 'Gray') }}
        {{ Form::checkbox('album_color_green', 'Green') }}
        {{ Form::label('album_color_green', 'Green') }}<br />
        {{ Form::checkbox('album_color_red', 'Red') }}
        {{ Form::label('album_color_red', 'Red') }}
        {{ Form::checkbox('album_color_white', 'White') }}
        {{ Form::label('album_color_white', 'White') }}<br />        

        </div>

    </div>

    <!-- Textbox input. -->

    <div class="form-group">
        {{ Form::label('album_othername', 'Other Names' . ':') }}
        {{ Form::text('album_othername', null, array('class' => 'form-control')) }}
    </div> 

    <div class="form-group">
        <b>Technical Information:</b><br />

        <!-- Textbox input. -->

        <div class="col-md-2">
            {{ Form::label('album_absorption', 'Absorption (%)' . ':') }}
            {{ Form::text('album_absorption', null, array('class' => 'form-control')) }}                
        </div>

        <!-- Textbox input. -->

        <div class="col-md-2">
            {{ Form::label('album_density', 'Density (kg/m3)' . ':') }}
            {{ Form::text('album_density', null, array('class' => 'form-control')) }}                
        </div>

        <!-- Textbox input. -->

        <div class="col-md-2">
            {{ Form::label('album_compression', 'Compression(MPa)' . ':') }}
            {{ Form::text('album_compression', null, array('class' => 'form-control')) }}                
        </div>

        <!-- Textbox input. -->

        <div class="col-md-2">
            {{ Form::label('album_abrasion', 'Abrasion (g/m2)' . ':') }}
            {{ Form::text('album_abrasion', null, array('class' => 'form-control')) }}                
        </div>

        <!-- Textbox input. -->

        <div class="col-md-2">
            {{ Form::label('album_flex', 'Flex (MPa)' . ':') }}
            {{ Form::text('album_flex', null, array('class' => 'form-control')) }}                
        </div>    

    </div>   

    <!-- Form Submit button. -->

    <div class="form-group">
        {{ Form::submit(Lang::get('gallery::gallery.submit'), array('class' => 'btn btn-primary')) }}
    </div>

    <!-- End the form. -->

{{ Form::close() }}

