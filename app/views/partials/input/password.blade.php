<div class="form-group">
{{Form::label('email', 'Enter password', ['class' => 'awesome'])}}

                     @include('partials.error.input',['errors'=>$errors,'name' =>'password'])
                     <input class="form-control" name='password' type="password" required=""/>

</div>