<form action="/dash/products" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" name="name"><br>
    <input type="number" name="price"><br>
    <input type="file" name="image"><br>
    <select name="category_id" id="">
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->type}}</option>
        @endforeach
    </select> <br>

    <textarea name="description" id="" cols="30" rows="10"></textarea>

    <button>Add Product</button>

</form>