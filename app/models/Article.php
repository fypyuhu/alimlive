<?php

class Article extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		 'title' => 'required|unique:articles',
                 //'slag' => 'required|unique:articles',
                 'orderNo' => 'required|numeric',
                 'type_id' => 'required|numeric',
                 'content' => 'required',
                 'details' => 'required',
                 'keywords' => 'required'
            
                 
                 
                
	];
        public static $urules = [
		// 'title' => 'required|unique:articles',
                 //'slag' => 'required|unique:articles',
                 'orderNo' => 'required|numeric',
                 'type_id' => 'required|numeric',
                 'content' => 'required',
                 'details' => 'required',
                 'keywords' => 'required'
            
                 
                 
                
	];
        
        public static function hashOptions(){
            $optons = [];
            
            
            
            return $optons;
            
        }
        public static function guessOrderNo(){
          $orderNo  = 0;
          
          $article =  Article::select('orderNo')->orderBy('orderNo', 'ASC')->first();
          if($article !=null)
            $orderNo = $article->orderNo +1;
          return $orderNo;  
        }
        public static function ordered(){
            return Article::orderBy('orderNo', 'ASC')->get();
            
        }
 	// Don't forget to fill this array
	protected $fillable = ['title','slag','orderNo','keywords','details','content','type_id','user_id'];
        //Associations
        public function   type(){
            return $this->belongsTo('Type');
        }
         public function   user(){
            return $this->belongsTo('User');
        }
        public function keywords(){
            return $this->belongsToMany('Keyword')->withTimestamps();
        }
        
        
        
}