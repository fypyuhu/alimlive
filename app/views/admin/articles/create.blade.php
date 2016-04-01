@extends('admin.template')
@section('title')
Articles    @include('partials.button.link',['title'=>'View All','link'=>route('article.index')])

@stop
@section('purpose')

Create a Article    
@stop
@section('content')

@include('partials.error.list',compact('errors')) 

  {{Form::open(array('route' => 'article.store'))}}
        
        @include('partials.select.select',['name'=>'type_id','options' =>$types])    
        @include('partials.input.text',['errors'=>$errors,'name' =>'title','example' => 'title','value'=>''])
     
        @include('partials.input.numeric',['errors'=>$errors,'name' =>'orderNo','example' => 'Order No','value'=>$orderNo])
       
        @include('partials.editor.textarea',['name'=>'content','value'=>''])
        @include('partials.input.text',['errors'=>$errors,'name' =>'details','example' => 'detail','value'=>''])

        @include('partials.input.text',['errors'=>$errors,'name' =>'keywords','example' => 'keyword','value'=>''])
      
        @include('partials.button.submit')
             
  {{Form::close()}}
  

@stop