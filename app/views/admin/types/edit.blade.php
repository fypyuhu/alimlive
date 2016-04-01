@extends('admin.template')

@section('title')
Types
@stop

@section('purpose')
Edit a Type
@stop
@section('content')
{{Form::model($type, ['route' => ['type.update', $type->id]])}}
<input type="hidden" name="_method" value="PATCH">
 
@include('partials.input.text',['errors'=>$errors,'name' =>'title','example' => 'title','value'=>$type->title])
     
   @include('partials.button.submit')
{{Form::close()}}

@stop