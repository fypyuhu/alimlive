@include('partials.label.label',['value'=>"Select "."$name"])
        

<select name='{{$name}}'>
    @foreach($options as  $key => $value)
    <option value="{{$key}}"
            
            @if($key  == $selected)
             selected
             @endif
             >{{$value}}</option>
    @endforeach
    
</select>