<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of Uploader
 *
 * @author MUsama
 */

class UploaderController {
    
    public  $pathToFile;
    private  $isSucessfull;
    
    public function upload($name,$type,$directory) {
      // getting all of the post data
      $file = array($name => Input::file($name));
      // setting up rules
      
      $rules = array($name => 'required',
          
          );
      if($type=='image'){
          array_push($rules, "$name => 'mimes:jpeg,bmp,png'") ;
      }
    //mimes:jpeg,bmp,png and for max size max:10000
      // doing the validation, passing post data, rules and the messages
      $validator = Validator::make($file, $rules);
      if ($validator->fails()) {
        // send back to the page with the input data and errors
          $this->isSucessfull=false;
          return ;
      }
      else {
        // checking file is valid.
        if (Input::file($name)->isValid()) {
         
        $file            = Input::file($name);
        $destinationPath = public_path()."/$directory/";
        $filename        = $file->getClientOriginalName();
        $filename = rand(10,1002222)."_".$name."_".$filename;
        $uploadSuccess   = $file->move($destinationPath, $filename);
          
        Session::flash('success', 'Upload successfully'); 
           
          $this->isSucessfull=true;
          $this->pathToFile ="$directory/$filename";
          return ;
          
        }
        else {
          // sending back with error message.
          Session::flash('error', 'uploaded file is not valid');
          $this->isSucessfull=false;
          return ;
          
        }
      }
    }    
    
    public function isFail(){
        return !$this->isSucessfull;
    }
    public function isSucessfull(){
        return $this->isSucessfull;
    }
    
}
