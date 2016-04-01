@extends('admin.template')

@section('title')
Users
@stop

@section('content')





@include('partials.error.list',compact('errors')) 

@include('admin.users._table',compact('users'))


@stop