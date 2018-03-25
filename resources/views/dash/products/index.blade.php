@extends ('dash.partials.app')

@section('content')

    <div class="row">
        <div class="col-12 col-sm-12">
            <a href="/dash/products/add" class="btn btn-primary " >
                Add Item
            </a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <table class="table table-responsive" id="item">
                <thead>
                <tr>
                    <th>S no </th>
                    <th>Added on</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Category</th>
                    <th></th>
                </tr>
                </thead>
          <?php $count=1;?>

                @foreach($products as $product)
                    <tr>
                        <td>{{$count}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>
                            <span id="item-name{{$product->id}}">{{$product->name}}</span>
                        </td>
                        <td>
                            <span id="item-price">{{$product->price}}</span>
                        </td>
                        <td>
                            <span id="item-quantity">{{$product->quantity}}</span>
                        </td>
                        <td><span>{{$product->category->type}}</span></td>
                        <td>

                            <div class="btn-group">
                                <a class="btn btn-sm btn-info"  href="/dash/products/{{$product->id}}/edit">Edit
                                </a>

                                <form name="delete_item{{$product->id}}" method="post"
                                      action="/dash/products/{{$product->id}}">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                    <button type="button" class="btn btn-sm btn-danger"
                                            onclick="deleteconfirm({{$product->id}})">Delete
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

        function deleteconfirm(id) {
            var item_name = document.getElementById('item-name' + id).innerText;

            if (confirm('Do you want to delete ' + item_name + ', \n Proceed with care!!')) {
                document.forms['delete_item' + id].submit();
            }
        }

      $("#item").DataTable({info:false});


    </script>
@endsection