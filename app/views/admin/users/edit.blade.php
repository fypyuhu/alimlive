@extends('admin.template')

@section('title')
User
@stop

@section('purpose')
Edit a User
@stop
@section('content')
{{Form::model($user, ['route' => ['user.update', $user->id]])}}
<input type="hidden" name="_method" value="PATCH">
 @include('partials.input.email',['errors'=>$errors,'name' =>'email','value'=>$user->email])
       
      
         @include('partials.input.text',['errors'=>$errors,'name' =>'name','example' => 'name','value'=>$user->name])
         @include('partials.input.text',['errors'=>$errors,'name' =>'username','example' => 'username','value'=>$user->username])
     
   @include('partials.button.submit')
{{Form::close()}}

@stop