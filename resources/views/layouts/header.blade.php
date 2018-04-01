<header id="header">
    @include("layouts.navbar")
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="pos_logo col-md-2 col-sm-12 col-xs-12">
                    <a href="http://demo.posthemes.com/pos_fobe/" title="Pos_fobe Responsive Prestashop Theme">
                        <img class="logo img-responsive" src="/img/logo.png" alt="Pos_fobe Responsive Prestashop Theme"
                             width="141" height="55">
                        {{--<img src="/img/logo.png" alt="">--}}
                    </a>
                </div>
                <div class="header-middle-right col-md-10 col-sm-12 col-xs-12">

                    <!-- Block search module TOP -->

                    <div id="search_block_top">
                        <div class=" icon-search">
                        </div>
                        <div class="toogle_content">
                            <form id="searchbox" method="get" action="http://demo.posthemes.com/pos_fobe/en/search">
                                <input type="hidden" name="controller" value="search">
                                <input type="hidden" name="orderby" value="position">
                                <input type="hidden" name="orderway" value="desc">
                                <input class="search_query form-control ac_input" type="text" id="search_query_top"
                                       name="search_query" placeholder="Search" value="" autocomplete="off">
                                <button type="submit" name="submit_search" class="btn btn-default button-search">
                                    <span>Search</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- /Block search module TOP -->
                    <script type="text/javascript">
                        $(document).ready(function ($) {
                            $(".icon-search").on("click", function () {
                                $(this).parent().find('.toogle_content').slideToggle('medium');
                            });
                        });

                    </script><!-- MODULE Block cart -->
                    <div class="block-cart">
                        <div class="shopping_cart" style="position: relative">
                            <a title="View my shopping cart" rel="nofollow" onclick="toggleHide()">
                                <b>shopping cart</b>
                                <span class="quantity-first"><span
                                            class="ajax_cart_quantity unvisible" id="totalItemsInCart"></span></span>
                            </a>

                            <div class="cart_overlay">
                             <div id="mainCart"></div>
                                <a href="/checkout" id="checkout_button" class="btn" >Checkout <i class="fa fa-caret-right"></i><i class="fa fa-caret-right"></i></a>
                            </div>

                        </div>
                    </div>

                    <div id="layer_cart">
                        <div class="clearfix">
                            <div class="layer_cart_product col-xs-12 col-md-6">
                                <span class="cross" title="Close window"></span>
                                <span class="title">
					<i class="icon-check"></i>Product successfully added to your shopping cart
				</span>
                                <div class="product-image-container layer_cart_img">
                                </div>
                                <div class="layer_cart_product_info">
                                    <span id="layer_cart_product_title" class="product-name"></span>
                                    <span id="layer_cart_product_attributes"></span>
                                    <div>
                                        <strong class="dark">Quantity</strong>
                                        <span id="layer_cart_product_quantity"></span>
                                    </div>
                                    <div>
                                        <strong class="dark">Total</strong>
                                        <span id="layer_cart_product_price"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="layer_cart_cart col-xs-12 col-md-6">
				<span class="title">
					<!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
					<span class="ajax_cart_product_txt_s  unvisible">
						There are <span class="ajax_cart_quantity">0</span> items in your cart.
					</span>
                    <!-- Singular Case [both cases are needed because page may be updated in Javascript] -->
					<span class="ajax_cart_product_txt ">
						There is 1 item in your cart.
					</span>
				</span>
                                <div class="layer_cart_row">
                                    <strong class="dark">
                                        Total products
                                    </strong>
                                    <span class="ajax_block_products_total">
											</span>
                                </div>

                                <div class="layer_cart_row">
                                    <strong class="dark unvisible">
                                        Total shipping&nbsp; </strong>
                                    <span class="ajax_cart_shipping_cost unvisible">
													 To be determined											</span>
                                </div>
                                <div class="layer_cart_row">
                                    <strong class="dark">
                                        Total
                                    </strong>
                                    <span class="ajax_block_cart_total">
											</span>
                                </div>
                                <div class="button-container">
					<span class="continue btn btn-default button exclusive-medium" title="Continue shopping">
						<span>
							<i class="icon-chevron-left left"></i>Continue shopping
						</span>
					</span>
                                    <a class="btn btn-default button button-medium" href="order.html"
                                       title="Proceed to checkout" rel="nofollow">
						<span>
							Proceed to checkout<i class="icon-chevron-right right"></i>
						</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="crossseling"></div>
                    </div> <!-- #layer_cart -->
                    <div class="layer_cart_overlay"></div>

                    <!-- /MODULE Block cart -->
                    <div class="pos-megamenu">


                        <div class="nav-container visible-lg visible-md scroll-menu">
                            <div id="pt_custommenu" class="pt_custommenu">
                                <div id="pt_menu_home"
                                     class="pt_menu {{ ((request()->path() == "products/home") ||(request()->path() == "/") ) ?"act":""  }}">
                                    <div class="parentMenu"><a href="/"><span>Home</span></a></div>
                                </div>
                                @foreach($categories as $category)
                                    <div id="pt_menu_home"
                                         class="pt_menu {{ (request()->path() == "products/$category->name")?"act":""  }} ">
                                        <div class="parentMenu"><a
                                                    href="/products/{{strtolower($category->type)}}"><span>{{$category->type}}</span></a>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="pt_menu_cms pt_menu">
                                    <div class="parentMenu"><a href="content/4-about-us.html"><span>Offer</span></a>
                                    </div>
                                </div>
                                <div class="pt_menu_cms pt_menu">
                                    <div class="parentMenu"><a href="content/4-about-us.html"><span>About us</span></a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <script type="text/javascript">
                            //<![CDATA[
                            var CUSTOMMENU_POPUP_EFFECT = 0;
                            var CUSTOMMENU_POPUP_TOP_OFFSET = 105;
                            //]]>
                        </script>
                        <script type="text/javascript">
                            $(document).ready(function () {

                                $(window).scroll(function () {
                                    var scroll = $(window).scrollTop();
                                    if (scroll < 245) {
                                        $(".nav-container").removeClass("scroll-menu");
                                    } else {
                                        $(".nav-container").addClass("scroll-menu");
                                    }
                                });

                                $(".toggle-menu").on("click", function () {
                                    $(this).toggleClass('show');
                                    if ($(this).hasClass('show')) {
                                        $(this).addClass('open');
                                        $(this).parent().find('.megamenu').stop().slideDown('slow');

                                    }
                                    else {
                                        $(this).removeClass('open').addClass('close');
                                        $(this).parent().find('.megamenu').stop().slideUp('slow');

                                    }

                                });

                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

