@extends('admin.template')

@section('title')
Articles
@stop

@section('purpose')
Edit a Article
@stop
@section('content')

@include('partials.error.list',compact('errors')) 

{{Form::model($article, ['route' => ['article.update', $article->id]])}}
<input type="hidden" name="_method" value="PATCH">
 
        
        @include('partials.select.selected',['name'=>'type_id','options' =>$types,'selected' => $selected])    
        @include('partials.input.text',['errors'=>$errors,'name' =>'title','example' => 'title','value'=>$article->title])
     
        @include('partials.input.numeric',['errors'=>$errors,'name' =>'orderNo','example' => 'Order No','value'=>$article->orderNo])
       
        @include('partials.editor.textarea',['name'=>'content','value'=>$article->content])
        @include('partials.input.text',['errors'=>$errors,'name' =>'details','example' => 'detail','value'=>$article->details])

        @include('partials.input.text',['errors'=>$errors,'name' =>'keywords','example' => 'keyword','value'=>$article->keywords])
      
   @include('partials.button.submit')
{{Form::close()}}

@stop