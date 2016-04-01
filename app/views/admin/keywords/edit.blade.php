@extends('admin.template')

@section('title')
Keywords
@stop

@section('purpose')
Edit a Keyword
@stop
@section('content')
{{Form::model($keyword, ['route' => ['keyword.update', $keyword->id]])}}
<input type="hidden" name="_method" value="PATCH">
 
@include('partials.input.text',['errors'=>$errors,'name' =>'title','example' => 'title','value'=>$keyword->title])
     
   @include('partials.button.submit')
{{Form::close()}}

@stop