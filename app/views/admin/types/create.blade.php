@extends('admin.template')
@section('title')
Types    @include('partials.button.link',['title'=>'View All','link'=>route('type.index')])

@stop
@section('purpose')

Create a Type    
@stop
@section('content')
@include('partials.error.list',compact('errors')) 


  {{Form::open(array('route' => 'type.store'))}}
                
         @include('partials.input.text',['errors'=>$errors,'name' =>'title','example' => 'title','value'=>''])
     
           
        @include('partials.button.submit')
              
  {{Form::close()}}
  

@stop