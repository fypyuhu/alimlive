<?php

class Keyword extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['title'];
        
        public function articles(){
            return $this->belongsToMany('Article')->withTimestamps();
        }
         
}