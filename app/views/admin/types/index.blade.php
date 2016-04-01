@extends('admin.template')

@section('title')
Types @include('partials.button.link',['title'=>'Add New','link'=>route('type.create')])

@stop

@section('content')




@include('partials.error.list',compact('errors')) 

@include('admin.types._table',compact('types'))


@stop