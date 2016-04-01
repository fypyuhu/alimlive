<?php

class Type extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
	 'title' => 'required|unique:types',
                
	];
        
        public static function hashForOption(){
            $options = [];
            
            $ops = Type::select('id','title')->get();
            foreach($ops as $o){
                $options[$o->id] = $o->title;
                
            }
            
            
            return $options;
            
        }
	// Don't forget to fill this array
	protected $fillable = ['title'];

}