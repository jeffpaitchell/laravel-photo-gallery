<?php 

/* This controller WAS NOT edited at all since it is a third-party controller
Therefore you do not need to change or modify anything in here. */

/* The 'namespace' line of code below is accessing the third-party 'version' of this file. */

namespace app\validators;

abstract class Validator {

	protected $input;

	public $errors;

	public function __construct($input = null)
	{
		$this->input = $input ?: \Input::all();
	}

	public function passes()
  	{
    	$validation = \Validator::make($this->input, static::$rules);
 
    	if($validation->passes()) return true;
     
    	$this->errors = $validation->messages();
 
    	return false;
  }
}