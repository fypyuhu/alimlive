<div class="form-group">

                     @include('partials.error.input',['errors'=>$errors,'name' =>$name])

{{Form::hidden($name,$value,['class' => 'form-control', 'placeholder' =>  $example])}}
</div>