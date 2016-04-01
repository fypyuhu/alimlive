<div class="form-group">
{{Form::label($name, "Enter the $name", ['class' => 'awesome'])}}
                     @include('partials.error.input',['errors'=>$errors,'name' =>$name])

{{Form::text($name,$value,['class' => 'form-control', 'placeholder' =>  $example])}}
</div>