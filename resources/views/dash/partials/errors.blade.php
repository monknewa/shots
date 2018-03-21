<?php $count = 1;?>
@if(count($errors))

    <h3 class="text-danger">Errors in submitting the form</h3>
    <ul style="list-style-type: none">
        @foreach($errors->all() as $error)
            <li>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                   {{$count}}. {{$error}}
                </div>
               </li>
        <?php $count++;?>
        @endforeach
    </ul>

@endif