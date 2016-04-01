<div class="form-group">
{{Form::label('email', 'Enter Email')}}

          @include('partials.error.input',['errors'=>$errors,'name' =>'email'])

{{Form::email('email', $value,['class' => 'form-control', 'placeholder' => 'mail@example.com','required'=>""])}}
</div>