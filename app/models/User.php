<?php

class User extends Eloquent {

	public $timestamps = false;
	protected $fillable = ['username','password'];

}
