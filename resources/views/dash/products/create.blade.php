@extends('dash.partials.app')

@section('content')

    <div class="container">
        <header>
            <h3 class="display"><strong> {{isset($product)?"Edit":"Add "}} Items</strong></h3>
            <div>
                <a href="/dash/item"><h4 class="text-primary"><i class="fa fa-backward"></i> Back</h4></a>
            </div>
        </header>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6">
                <?php clearstatcache(); ?>
                <form action="{{isset($product)? "/dash/products/$product->id":"/dash/products" }}" method="post"
                      enctype="multipart/form-data">
                    {{csrf_field()}}
                    @if(isset($product))
                        {{method_field("put")}}
                    @endif
                    <div class="form-group">
                        <label for="">Product Name</label>
                        <input type="text" value="{{isset($product)?$product->name:old('name') }}" name="name"
                               required class="form-control" maxlength="255">
                    </div>
                    <div class="form-group">
                        <label for="">Product Price</label>
                        <input type="number" value="{{isset($product)?$product->price:old('price') }}" name="price"
                               required class="form-control"  min="0">
                    </div>
                    <div class="form-group">
                        <label for="">Product Quantity</label>
                        <input type="number" value="{{isset($product)?$product->quantity:old('quantity') }}" name="quantity"
                               required class="form-control" min="0">
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <select value="{{isset($product)?$product->category_id:old('cateogry_id') }}" name="category_id"
                                id=""
                                required class="form-control">
                            @if(!isset($product))
                                <option value="" selected hidden disabled>Choose one</option>
                            @endif
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                        @if(isset($product))
                                        @if($category->id == $product->category->id)
                                        selected
                                        @endif
                                        @endif >{{$category->type}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" {{ isset($product)?"":"required" }} class="form-control">
                        <div id="preview_item_image">
                            @if(isset($product))
                                <img src="/img/products/{{$image}}"
                                     alt="No image" height="100" width="100">
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="10"
                                  required
                                  class="form-control">{{isset($product)?$product->description :old('description') }}</textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">{{ isset($product)?"Edit":"Add" }} Product</button>
                    </div>

                    <div class="form-group">
                        @include('dash.partials.errors')
                    </div>

                </form>

            </div>

        </div>
    </div>


@endsection

@section('scripts')

    <script>
        var file1 = /*$("input[name='item_image']");*/ document.getElementsByName('image')[0];
        var pre1 = /*$('#preview_item_image')*/ document.getElementById('preview_item_image');


        file1.onchange = function (e) {
            // pre1.html('');
            pre1.innerHTML = "";
            pre1.innerHTML = ("<img src='" + URL.createObjectURL(e.target.files[0]) +
                "' style='margin-right: 10px' height ='100' width='100'>");
        }

    </script>

@endsection