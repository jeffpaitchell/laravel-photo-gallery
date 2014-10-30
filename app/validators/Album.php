<?php 

/* This controller WAS NOT edited at all since it is a third-party controller
Therefore you do not need to change or modify anything in here. 
Unless you want some special type of validation when creating a new stone.*/

/* The 'namespace' line of code below is accessing the third-party 'version' of this file. */

namespace JeroenG\LaravelPhotoGallery\Validators;

class Album extends Validator {

	/**
     * The rules for validating the input
     *
     * @var array
     **/
    public static $rules = array(
    		'album_name' => 'required',
            'album_description' => 'max:255',
    	);
}