@extends('admin.template')
@section('title')
Keywords    @include('partials.button.link',['title'=>'View All','link'=>route('keyword.index')])

@stop
@section('purpose')

Create a Keyword    
@stop
@section('content')

@include('partials.error.list',compact('errors')) 

  {{Form::open(array('route' => 'keyword.store'))}}
                
         @include('partials.input.text',['errors'=>$errors,'name' =>'title','example' => 'title','value'=>''])
     
           
        @include('partials.button.submit')
              
  {{Form::close()}}
  

@stop