<?php

class Navigation extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'title' => 'required',
                'url' => 'required',
                'orderNo'=>'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['title','url','orderNo'];

        
         public static function guessOrderNo(){
          $orderNo  = 0;
          
          $article =  Slider::select('orderNo')->orderBy('orderNo', 'DESC')->first();
          if($article !=null)
            $orderNo = $article->orderNo +1;
          return $orderNo;  
        }
        public static function ordered(){
            return Slider::orderBy('orderNo', 'DESC')->get();
            
        }
        
        
        
        public function navigations(){
            return $this->hasMany('Navigation');
            
        }
        public function getParent(){
            
            $id =  Navigation::where('id',$this->id)->navigation_id;
            if($id  == 0)
                return null;
            
            return Navigation::where('id',$id)->first();
        }
}