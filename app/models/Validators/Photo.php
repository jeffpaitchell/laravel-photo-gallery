<?php 

/* This controller was edited from the original third-party version of this controller
Originally when editing a photo, validation was failing every time. */

use Models\Validators;

class Photo extends Validator {

	/**
     * The rules for validating the input
     *
     * @var array
     **/

    /* Rules for validation when editing a photo. */

    public static $rules = array(
    		'album_id' => 'required',
            'photo_name' => 'required',
            'photo_description' => 'max:255',
    	);
}