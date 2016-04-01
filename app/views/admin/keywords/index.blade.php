@extends('admin.template')

@section('title')
Types @include('partials.button.link',['title'=>'Add New','link'=>route('keyword.create')])

@stop

@section('content')




@include('partials.error.list',compact('errors')) 

@include('admin.keywords._table',compact('keywords'))


@stop