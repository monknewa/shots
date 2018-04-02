@extends("layouts.master")

@section("extra")

    <div class="pos_breadcrumb" style="background: #f3f3f3;margin-bottom:20px">
        <div class="container">

            <!-- Breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="/" title="Return to Home"><i
                            class="icon-home"></i></a>
                <span class="navigation-pipe">&gt;</span>

                <a href="/products">Products</a> <span class="navigation-pipe">&gt;</span>
                <a href="/product/{{$product->name}}">{{$product->name}}</a>
            </div>
            <!-- /Breadcrumb -->
        </div>
    </div>

    <div id="columns" class="container">

        <div id="slider_row" class="row">
        </div>
        <div class="row">
            <div id="center_column" class="center_column col-xs-12 col-sm-12">

                <div>

                    <div class="primary_block row">
                        <div class="container">
                            <div class="top-hr"></div>
                        </div>
                        <!-- left infos-->
                        <div class="pb-left-column  col-xs-12 col-sm-6 col-md-5">
                            <!-- product img-->
                            <div id="image-block" class="clearfix">

                                <span id="view_full_size">
															<a href=""><img id="bigpic" itemprop="image"
                                                                            src="{{$product->image}}"
                                                                            title="{{$product->name}}"
                                                                            alt="{{$product->name}}"
                                                                            width="458" height="500"></a>
																					</span>
                            </div> <!-- end image-block -->

                        </div> <!-- end pb-left-column -->
                        <!-- end left infos-->
                        <!-- center infos -->
                        <div class=" col-xs-12 col-sm-6 col-md-7 pb-center-column">
                            <h1 itemprop="name" class="page-header">{{$product->name}}</h1>

                            <div class="content_prices clearfix">
                                <!-- prices -->
                                <div>
                                    <p class="our_price_display">
                                        <span id="our_price_display" class="price" itemprop="price" content="32.399822"><i
                                                    class="fa fa-rupee"></i>{{$product->price}}</span>
                                        tax incl.
                                    </p>

                                </div> <!-- end prices -->

                                <div class="clear"></div>
                            </div> <!-- end content_prices -->
                            <div id="short_description_block">
                                <div id="short_description_content" class="rte align_justify"><p>
                                        {{nl2br(e($product->description))}}</p></div>

                                <p class="buttons_bottom_block">    </p>
                                <hr>
                                <!---->
                            </div> <!-- end short_description_block -->

                            <!-- add to cart form-->
                            <div class="box-info-product">

                                <div class="box-cart-bottom">
                                    <!-- quantity wanted -->

                                    <div class="cart-product">
                                        <div id="add_to_cart" class="buttons_bottom_block no-print">
                                            <button onclick="addToCart({{$product->toJson()}})" class="btn">
                                                <span>Add to cart</span>
                                            </button>
                                        </div>
                                    </div>

                                </div> <!-- end box-cart-bottom -->
                            </div>
                            <hr>
                            <!-- number of item in stock -->
                            <p id="pQuantityAvailable">
                                <span id="quantityAvailable">{{$product->quantity}}</span>
                                <span style="display: none;" id="quantityAvailableTxt">Item</span>
                                <span id="quantityAvailableTxtMultiple">Items</span>
                            </p>
                            <!-- availability or doesntExist -->
                            @if($product->quantity > 10)
                                <p id="availability_status">
                                    <span id="availability_value" class="label label-success">In stock</span>
                                </p>
                            @else
                                <p class="warning_inline" id="last_quantities"><span class="label label-danger">Warning: Last items in
                                stock!</span></p>
                        @endif
                        <!-- Out of stock hook -->
                        </div>

                    </div> <!-- end primary_block -->
                </div> <!-- itemscope product wrapper -->

            </div><!-- #center_column -->
        </div><!-- .row -->

    </div>

@endsection