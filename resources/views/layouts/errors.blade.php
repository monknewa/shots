@if(count($errors))
    <ul style="list-style-type: none;color: #FF0000;">
        @foreach($errors->all() as $error)
            <li>
                  <sup>*</sup> {{$error}}
               </li>
        @endforeach
    </ul>

@endif