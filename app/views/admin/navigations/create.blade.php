@extends('admin.template')
@section('title')
Navigation    @include('partials.button.link',['title'=>'View All','link'=>route('article.index')])

@stop
@section('purpose')

Create a Menu    
@stop
@section('content')

@include('partials.error.list',compact('errors')) 

  {{Form::open(array('route' => 'navigation.store'))}}
        
        @include('partials.input.text',['errors'=>$errors,'name' =>'title','example' => 'title','value'=>''])
     
        @include('partials.input.numeric',['errors'=>$errors,'name' =>'orderNo','example' => 'Order No','value'=>Navigation::guessOrderNo()])
        @include('partials.input.text',['errors'=>$errors,'name' =>'url','example' => 'url','value'=>''])
       
      
        @include('partials.button.submit')
             
  {{Form::close()}}
  

@stop