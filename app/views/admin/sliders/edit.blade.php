@extends('admin.template')

@section('title')
Sliders
@stop

@section('purpose')
Edit a Slide
@stop
@section('content')

@include('partials.error.list',compact('errors')) 

{{Form::model($slider, ['route' => ['slider.update', $slider->id ,'files'=>true]])}}
<input type="hidden" name="_method" value="PATCH">
 
          @include('partials.input.text',['errors'=>$errors,'name' =>'title','example' => 'title','value'=>$slider->title])
  
        @include('partials.input.numeric',['errors'=>$errors,'name' =>'orderNo','example' => 'Order No','value'=>$slider->orderNo])
        
   @include('partials.button.submit')
{{Form::close()}}

@stop