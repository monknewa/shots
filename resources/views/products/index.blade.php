@extends("layouts.master")

@section("extra")
    <script>
        window.Laravel.path = "{{request()->path()}}";
        window.Laravel.basename = "{{basename(request()->path())}}";
    </script>

    <div class="pos_breadcrumb" style="background: #f3f3f3">
        <div class="container">

            <!-- Breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="http://demo.posthemes.com/pos_fobe/" title="Return to Home"><i
                            class="icon-home"></i></a>
                <span class="navigation-pipe">&gt;</span>
                @if(count($breadCrumbs) === 1)
                    <a href="/{{$breadCrumbs[0]}}">{{$breadCrumbs[0]}}</a>
                @else
                    <a href="/{{$breadCrumbs[0]}}">{{$breadCrumbs[0]}}</a> <span class="navigation-pipe">&gt;</span>
                    <a href="/{{$breadCrumbs[0]}}/{{$breadCrumbs[1]}}">{{$breadCrumbs[1]}}</a>
                @endif
            </div>
            <!-- /Breadcrumb -->
        </div>
    </div>

    <div class="container" id="columns">
        <div class="row">
            <div id="left_column" class="column col-xs-12 col-sm-3">
                <div id="layered_block_left" class="block">
                    <p class="title_block">Catalog</p>
                    <div class="block_content" style="">
                        <form action="#" id="layered_form">
                            <div>
                                <div class="layered_filter">
                                    <div class="layered_subtitle_heading" style="margin-bottom: 20px">
                                        <h3 class="layered_subtitle">Categories</h3>
                                    </div>

                                    @include("products.category")
                                </div>
                                <div class="layered_filter" style="">
                                    <div class="layered_subtitle_heading">
                                        <h3 class="layered_subtitle">Price</h3>
                                    </div>

                                </div>

                            </div>
                            <input type="hidden" name="id_category_layered" value="12">
                        </form>
                    </div>
                    <div id="layered_ajax_loader" style="display: none;">
                        <p>
                            <img src="http://demo.posthemes.com/pos_fobe/img/loader.gif" alt="">
                            <br>Loading...
                        </p>
                    </div>
                </div>

            </div>
            <div id="center_column" class="center_column col-xs-12 col-sm-9">
                <h1 class="page-heading product-listing"><span class="cat-name">{{basename(request()->path())}} ({{$totalProducts}})
                        &nbsp;</span>
                </h1>

                <!-- Products list -->
                <ul class="product_list grid row">

                    @foreach($products as $product)
                        <li class=" ajax_block_product  col-xs-12   col-sm-6    col-md-4">
                            <div class="product-container" style="height: ;">
                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="products-inner">
                                            <a class="product_img_link"
                                               href="{{$product->image}}"
                                               title="{{$product->name}}" itemprop="url">
                                                <img class="replace-2x img-responsive"
                                                     src="{{$product->image}}"
                                                     alt="{{$product->name}}"
                                                     style="height: 300px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="product-contents">
                                        <h5 itemprop="name" class="product-name">
                                            <a class="product-name"
                                               href="/product/{{$product->name}}">
                                                {{$product->name}}
                                            </a>
                                        </h5>

                                        <div class="price-box">
								<span class="price product-price">
									<i class="fa fa-rupee"></i> {{$product->price}}</span>
                                        </div>
                                        <div class="actions">
                                            <div class="actions-inner">

                                                <ul class="add-to-links">
                                                    <li class="cart1">

                                                        <a onclick="addToCart({{$product->toJson()}})"
                                                           class="button ajax_add_to_cart_button btn btn-default"
                                                           title="Add to cart" data-id-product="1">
                                                        </a>

                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div><!-- .product-container> -->
                        </li>

                    @endforeach
                </ul>

                <nav aria-label="Page navigation">
                    {{$products->render()}}
                </nav>


            </div>
        </div>
    </div>

@endsection


