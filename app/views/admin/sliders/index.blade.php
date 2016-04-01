@extends('admin.template')

@section('title')
Sliders @include('partials.button.link',['title'=>'Add New','link'=>route('slider.create')])

@stop

@section('content')


@include('admin.sliders.slider',compact('sliders'))

@include('partials.error.list',compact('errors')) 

@include('admin.sliders._table',compact('sliders'))


@stop