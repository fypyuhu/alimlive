@if($errors->count())
        <div class=" alert callout callout-danger alert-dismissable">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
           <h4><i class="icon fa fa-ban"></i> Error!</h4>
               <ul>
                    @foreach ($errors->all() as $message)
                  
                    <li> {{$message}}</li>
                  
                  @endforeach
               </ul>
       </div>
       @endif