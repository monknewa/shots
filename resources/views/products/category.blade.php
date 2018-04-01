<ul id="ul_layered_category_0" class="col-lg-12 layered_filter_ul">

    <li  class="nomargin hiddable col-lg-12">
        <div class="checker" id="uniform-layered_category_13"><span><input
                        type="checkbox" class="checkbox" name="layered_category_13"
                        id="layered_category_13" value="13"></span></div>
        <label for="layered_category_13">
            <a href="/products"
               data-rel="nofollow">All</a>
        </label>
    </li>

    @foreach($categories as $category)
        <li  class="nomargin hiddable col-lg-12">
            <div class="checker" id="uniform-layered_category_13"><span><input
                            type="checkbox" class="checkbox" name="layered_category_13"
                            id="layered_category_13" value="13"></span></div>
            <label for="layered_category_13">
                <a href="/products/{{strtolower($category->type)}}"
                   data-rel="nofollow">{{$category->type}}</a>
            </label>
        </li>
    @endforeach
</ul>