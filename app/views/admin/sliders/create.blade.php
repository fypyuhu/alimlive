@extends('admin.template')
@section('title')
Slider    @include('partials.button.link',['title'=>'View All','link'=>route('slider.index')])

@stop
@section('purpose')

Create a Slide  
@stop
@section('content')

@include('partials.error.list',compact('errors')) 

  {{Form::open(array('route' => 'slider.store', 'files'=>true))}}
        
        @include('partials.input.text',['errors'=>$errors,'name' =>'title','example' => 'title','value'=>''])
  
        @include('partials.input.numeric',['errors'=>$errors,'name' =>'orderNo','example' => 'Order No','value'=>$orderNo])
        @include('partials.input.file',['name'=>'pic'])
        @include('partials.button.submit')
             
  {{Form::close()}}
  

@stop