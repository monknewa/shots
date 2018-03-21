@extends('dash.partials.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <a class="btn btn-primary " href="/dash/category/add">
                Add Category
            </a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class=" col-xs-12 col-md-8  col-lg-8 col-sm-12">
            <table class="table  table-responsive" id="category">
                <thead>
                <tr>
                    <th>S no</th>
                    <th>Id</th>
                    <th>Category title</th>
                    <th>Order</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $counter = 1?>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$counter}}</td>
                        <td>{{$category->id}}</td>
                        <td><span id="category-name{{$category->id}}">{{$category->alias}}</span></td>
                        <td>
                            <select name="categoryorder_{{$category->name}}" id="categoryorder_{{$category->name}}">
                                @for($count = 1;$count <= count($categories) ; $count++)
                                    <option value="{{$count}}"
                                            @if($category->order == $count)
                                            selected
                                            @endif
                                    >{{$count}}</option>
                                @endfor
                            </select>

                            <script>
                                $("#categoryorder_{{$category->name}}").change(function () {
                                    $.get('/dash/ajax/',
                                        {
                                            order: $(this).val(), id: "{{$category->id}}"
                                        },
                                        function (success) {
                                            console.log(success);
                                        }
                                    );
                                });
                            </script>

                        </td>
                        <td>
                            <div class="btn-group" role="group">

                                <a class="btn btn-info btn-sm"
                                   href="/dash/category/{{$category->id}}/edit">Edit </a>

                                <form name="delete_category{{$category->id}}" method="post"
                                      action="/dash/category/{{$category->id}}">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                    <button type="button" class="btn   btn-sm btn-danger"
                                            onclick="deleteconfirm({{$category->id}})">Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                        <!-- Modal -->
                    </tr>
                    <?php $counter++?>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <script>
        $("#sortable").sortable()

    </script>

@endsection

@section('scripts')

    <script>
        function deleteconfirm(id) {
            var category_name = document.getElementById('category-name' + id).innerText;

            if (confirm('Do you want to delete ' + category_name + ', \nAll items under it will be deleted,\n Proceed with care!!')) {
                document.forms['delete_category' + id].submit();
            }
        }

        $("#category").DataTable({info: false});


    </script>
@endsection