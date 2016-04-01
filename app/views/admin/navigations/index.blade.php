@extends('admin.template')

@section('title')
Navigation  @include('partials.button.link',['title'=>'Add New','link'=>route('navigation.create')])

@stop

@section('content')
   
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown1" href="#">Page 1
            <span class="caret"></span></a>
            <ul class="dropdown1-menu">
              <li><a href="#">Page 1-1</a></li>
              <li><a href="#">Page 1-2</a></li>
              <li><a href="#">Page 1-3</a></li>
               <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown1" href="#">Page 1
            <span class="caret"></span></a>
           
            <ul class="dropdown1-menu">
              <li><a href="#">Page 1-1</a></li>
           @foreach($navigations as $n)
              <li><a href="#">Page 1ssssssssssssssssssssssssss-2     @include('partials.button.edit',['table'=>$n,'route'=>'navigation'])</a></li>
            @endforeach
              <li><a href="#">Page 1-3</a></li>
            </ul>
          </li>
            </ul>
          </li>
        
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
@stop