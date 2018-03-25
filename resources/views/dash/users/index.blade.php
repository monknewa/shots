@extends ('dash.partials.app')

@section('content')


    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <table class="table table-responsive" id="user">
                <thead>
                <tr>
                    <th>S no</th>
                    <th>Added on</th>
                    <th> Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    {{--<th>Category</th>--}}
                    <th></th>
                </tr>
                </thead>
                <?php $count = 1;?>

                @foreach($users as $users)
                    <tr>
                        <td>{{$count}}</td>
                        <td>{{$users->created_at}}</td>
                        <td>
                            <span id="item-name{{$users->id}}">{{$users->name}}</span>
                        </td>
                        <td>
                            <span id="item-email">{{$users->email}}</span>
                        </td>
                        <td>
                            <span id="item-address">{{$users->address}}</span>
                        </td>
                        <td>
                            <span id="item-phoneNumber">{{$users->phoneNumber}}</span>
                        </td>
                        <td>
                            <div class="btn-group">
                                <form method="post"
                                      action="/dash/users/{{$users->id}}"
                                      onsubmit="return confirm('Do you want to delete user?')">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                    <button class="btn btn-sm btn-danger"
                                            onclick="deleteconfirm({{$users->id}})">Delete
                                    </button>
                                </form>
                            </div>

                        </td>

                    </tr>
                    <?php $count++ ?>
                @endforeach
            </table>
        </div>
    </div>



@endsection

@section('scripts')
    <script>
        $("#user").DataTable({
            info: false,
            columnDefs:[
                {orderable:false , targets: [0,4,5,6]}
            ]
        });


    </script>
@endsection