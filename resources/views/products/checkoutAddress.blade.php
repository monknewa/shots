@extends("layouts.master")

@section("content")
    <div class="pos_breadcrumb" style="background: #f3f3f3">

        <div class="container">
            <!-- Breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="/" title="Return to Home"><i
                            class="icon-home"></i></a>
                <span class="navigation-pipe">&gt;</span>
                <a href="/checkout">Checkout</a>
            </div>
            <!-- /Breadcrumb -->
        </div>
    </div>

    <div id="columns" class="container">

        <div id="slider_row" class="row">
        </div>
        <div class="row">
            <div id="center_column" class="center_column col-xs-12 col-sm-12">

                <h1 id="cart_title" class="page-heading">Shopping-cart summary
                    <span class="heading-counter">Your shopping cart contains:
			<span id="summary_products_quantity">8 products</span>
		</span>
                </h1>
                <!-- Steps -->
                <ul class="step clearfix" id="order_step">
                    <li class="step_todo  first">
                        <span><em>01.</em> Summary</span>
                    </li>
                    <li class="step_current third">
                        <span><em>02.</em> Address</span>
                    </li>

                </ul>
                <!-- /Steps -->
                <div class="row" style="margin:100px 0px">
                    <div class="col-xs-12 col-sm-6">

                        <h3 class="page-subheading">Delivery Address</h3>
                        <div class="form_content clearfix">
                            <div class="form-group">
                                <label for="email">Delivery Address</label>
                                <input class="form-control"
                                       type="text" id="checkout_address" value="">
                            </div>
                        </div>
                    </div>
                </div><!-- end order-detail-content -->

                <div id="HOOK_SHOPPING_CART"></div>
                <p class="cart_navigation clearfix">
                    <a {{--href="/checkout/shipping"--}}
                       id="purchase"
                       onclick="addAddress()"
                       class="button btn btn-default standard-checkout button-medium" title="Proceed to checkout"
                       style="display: none">
                        <span>Proceed to checkout<i class="icon-chevron-right right"></i></span>
                    </a>
                    <a href="/products"
                       class="button-exclusive btn btn-default" title="Continue shopping">
                        <i class="icon-chevron-left"></i>Continue shopping
                    </a>
                </p>
                <div class="clear"></div>
                <div class="cart_navigation_extra">
                    <div id="HOOK_SHOPPING_CART_EXTRA"></div>
                </div>

            </div><!-- #center_column -->
        </div><!-- .row -->
    </div>
@endsection

@section("script")
    <script>

        if (localStorage.getItem('cart') === null) {
            document.getElementById("purchase").style.display = "none";
        } else {
            document.getElementById("purchase").style.display = "block";
        }
        var localS = JSON.parse(localStorage.getItem("cart"));
        if (localS.length === 0) {
            document.getElementById("purchase").style.display = "none";
        } else {
            document.getElementById("purchase").style.display = "block";
        }

    </script>
@endsection