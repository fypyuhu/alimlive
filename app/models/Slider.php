<?php

class Slider extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		 'title' => 'required',
                 
	];

	// Don't forget to fill this array
	protected $fillable = ['pic','title','orderNo'];
         public static function guessOrderNo(){
          $orderNo  = 0;
          
          $article =  Slider::select('orderNo')->orderBy('orderNo', 'ASC')->first();
          if($article !=null)
            $orderNo = $article->orderNo +1;
          return $orderNo;  
        }
        public static function ordered(){
            return Slider::orderBy('orderNo', 'ASC')->get();
            
        }
}