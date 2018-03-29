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
                        <div class="shopping_cart">
                            <a href="order.html" title="View my shopping cart" rel="nofollow">
                                <b>shopping cart</b>
                                <span class="quantity-first"><span class="ajax_cart_quantity unvisible">0</span></span>
                                <span class="ajax_cart_product_txt unvisible">Product</span>
                                <span class="ajax_cart_product_txt_s unvisible">Products</span>
                                <span class="ajax_cart_total unvisible">
							</span>
                                <!-- 	<span class="ajax_cart_no_product">(0)</span> -->
                            </a>
                            <div class="cart_block block exclusive">
                                <div class="block_content">
                                    <!-- block list of products -->
                                    <div class="cart_block_list">
                                        <p class="cart_block_no_products">
                                            No products
                                        </p>
                                        <div class="cart-prices">
                                            <div class="cart-prices-line first-line">
								<span class="price cart_block_shipping_cost ajax_cart_shipping_cost unvisible">
																			 To be determined																	</span>
                                                <span class="unvisible">
									Shipping
								</span>
                                            </div>
                                            <div class="cart-prices-line last-line">
                                                <span class="price cart_block_total ajax_block_cart_total">£ 0.00</span>
                                                <span>Total</span>
                                            </div>
                                        </div>
                                        <p class="cart-buttons">
                                            <a id="button_order_cart" class="btn btn-default button button-small"
                                               href="order.html" title="Check out" rel="nofollow">
								<span>
									Check out<i class="icon-chevron-right right"></i>
								</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- .cart_block -->
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
                        <!-- Block categories module -->
                        <div class="ma-nav-mobile-container  visible-xs visible-sm ">
                            <div class="navbar">
                                <div id="navbar-inner" class="navbar-inner navbar-inactive">
                                    <a class="btn btn-navbar">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </a>
                                    <span class="brand">Category</span>
                                    <ul id="ma-mobilemenu" class="tree  mobilemenu nav-collapse collapse dynamized"
                                        style="display: none;">

                                        <li>
                                            <span class="grower CLOSE"> <span class="head"><a
                                                            href="javascript:void(0)"></a></span></span><a
                                                    href="12-wine-basics.html" title="Whiskey">

                                            </a>
                                            <ul style="display: none;">

                                                <li>
                                                    <span class="grower CLOSE"> <span class="head"><a
                                                                    href="javascript:void(0)"></a></span></span><a
                                                            href="13-dresses.html" title="">
                                                        Dresses
                                                    </a>
                                                    <ul style="display: none;">

                                                        <li>
                                                            <a href="17-cocktail.html" title="">
                                                                Cocktail
                                                            </a>
                                                        </li>


                                                        <li>
                                                            <a href="18-day.html" title="">
                                                                Day
                                                            </a>
                                                        </li>


                                                        <li>
                                                            <a href="19-evening.html" title="">
                                                                Evening
                                                            </a>
                                                        </li>


                                                        <li class="last">
                                                            <a href="20-sports.html" title="">
                                                                Sports
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>


                                                <li>
                                                    <span class="grower CLOSE"> <span class="head"><a
                                                                    href="javascript:void(0)"></a></span></span><a
                                                            href="14-shoes.html" title="">
                                                        shoes
                                                    </a>
                                                    <ul style="display: none;">

                                                        <li>
                                                            <a href="21-sports.html" title="">
                                                                Sports
                                                            </a>
                                                        </li>


                                                        <li>
                                                            <a href="22-run.html" title="">
                                                                run
                                                            </a>
                                                        </li>


                                                        <li>
                                                            <a href="23-sandals.html" title="">
                                                                sandals
                                                            </a>
                                                        </li>


                                                        <li class="last">
                                                            <a href="24-books.html" title="">
                                                                Books
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>


                                                <li>
                                                    <span class="grower CLOSE"> <span class="head"><a
                                                                    href="javascript:void(0)"></a></span></span><a
                                                            href="15-handbags.html" title="">
                                                        Handbags
                                                    </a>
                                                    <ul style="display: none;">

                                                        <li>
                                                            <a href="25-blazers.html" title="">
                                                                Blazers
                                                            </a>
                                                        </li>


                                                        <li>
                                                            <a href="26-table.html" title="">
                                                                table
                                                            </a>
                                                        </li>


                                                        <li>
                                                            <a href="27-coats.html" title="">
                                                                coats
                                                            </a>
                                                        </li>


                                                        <li class="last">
                                                            <a href="28-kids.html" title="">
                                                                kids
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>


                                                <li class="last">
                                                    <span class="grower CLOSE"> <span class="head"><a
                                                                    href="javascript:void(0)"></a></span></span><a
                                                            href="16-clothing.html" title="">
                                                        Clothing
                                                    </a>
                                                    <ul style="display: none;">

                                                        <li>
                                                            <a href="29-t-shirts.html" title="">
                                                                T-shirts
                                                            </a>
                                                        </li>


                                                        <li>
                                                            <a href="30-coats.html" title="">
                                                                coats
                                                            </a>
                                                        </li>


                                                        <li>
                                                            <a href="31-jackets.html" title="">
                                                                Jackets
                                                            </a>
                                                        </li>


                                                        <li class="last">
                                                            <a href="32-jeans.html" title="">
                                                                jeans
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>


                                        <li>
                                            <span class="grower CLOSE"> <span class="head"><a
                                                            href="javascript:void(0)"></a></span></span><a
                                                    href="33-tasting-wine.html" title="">
                                                RUM
                                            </a>
                                            <ul style="display: none;">

                                                <li>
                                                    <span class="grower CLOSE"> <span class="head"><a
                                                                    href="javascript:void(0)"></a></span></span><a
                                                            href="34-bags.html" title="">
                                                        Bags
                                                    </a>
                                                    <ul style="display: none;">

                                                        <li>
                                                            <a href="37-bootees-bags.html" title="">
                                                                Bootees Bags
                                                            </a>
                                                        </li>


                                                        <li>
                                                            <a href="38-blazers.html" title="">
                                                                Blazers
                                                            </a>
                                                        </li>


                                                        <li>
                                                            <a href="39-sweaters.html" title="">
                                                                Sweaters
                                                            </a>
                                                        </li>


                                                        <li class="last">
                                                            <a href="40-hoodies.html" title="">
                                                                Hoodies
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>


                                                <li>
                                                    <span class="grower CLOSE"> <span class="head"><a
                                                                    href="javascript:void(0)"></a></span></span><a
                                                            href="35-tops-tees.html" title="">
                                                        Tops &amp; Tees
                                                    </a>
                                                    <ul style="display: none;">

                                                        <li>
                                                            <a href="41-long-sleeve.html" title="">
                                                                Long Sleeve
                                                            </a>
                                                        </li>


                                                        <li>
                                                            <a href="42-short-sleeve.html" title="">
                                                                Short Sleeve
                                                            </a>
                                                        </li>


                                                        <li>
                                                            <a href="43-polo-short-sleeve.html" title="">
                                                                Polo Short Sleeve
                                                            </a>
                                                        </li>


                                                        <li class="last">
                                                            <a href="44-short-sleeve.html" title="">
                                                                Short Sleeve
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>


                                                <li class="last">
                                                    <span class="grower CLOSE"> <span class="head"><a
                                                                    href="javascript:void(0)"></a></span></span><a
                                                            href="36-lingerie.html" title="">
                                                        Lingerie
                                                    </a>
                                                    <ul style="display: none;">

                                                        <li>
                                                            <a href="45-bands.html" title="">
                                                                Bands
                                                            </a>
                                                        </li>


                                                        <li>
                                                            <a href="46-furniture.html" title="">
                                                                Furniture
                                                            </a>
                                                        </li>


                                                        <li>
                                                            <a href="47-wedges.html" title="">
                                                                Wedges
                                                            </a>
                                                        </li>


                                                        <li class="last">
                                                            <a href="48-vests.html" title="">
                                                                Vests
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>


                                        <li>
                                            <span class="grower CLOSE"> <span class="head"><a
                                                            href="javascript:void(0)"></a></span></span><a
                                                    href="49-wine-pairing.html" title="">
                                                Wine Pairing
                                            </a>
                                            <ul style="display: none;">

                                                <li>
                                                    <span class="grower CLOSE"> <span class="head"><a
                                                                    href="javascript:void(0)"></a></span></span><a
                                                            href="50-footwear-man.html" title="">
                                                        Footwear Man
                                                    </a>
                                                    <ul style="display: none;">

                                                        <li>
                                                            <a href="52-gold-ring.html" title="">
                                                                Gold Ring
                                                            </a>
                                                        </li>


                                                        <li>
                                                            <a href="53-platinum-rings.html" title="">
                                                                Platinum Rings
                                                            </a>
                                                        </li>


                                                        <li>
                                                            <a href="54-silver-ring.html" title="">
                                                                Silver Ring
                                                            </a>
                                                        </li>


                                                        <li class="last">
                                                            <a href="55-tungsten-ring.html" title="">
                                                                Tungsten Ring
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>


                                                <li class="last">
                                                    <span class="grower CLOSE"> <span class="head"><a
                                                                    href="javascript:void(0)"></a></span></span><a
                                                            href="51-footwear-womens.html" title="">
                                                        Footwear Womens
                                                    </a>
                                                    <ul style="display: none;">

                                                        <li>
                                                            <a href="56-bands-gold.html" title="">
                                                                Bands Gold
                                                            </a>
                                                        </li>


                                                        <li>
                                                            <a href="57-platinum-bands.html" title="">
                                                                Platinum Bands
                                                            </a>
                                                        </li>


                                                        <li>
                                                            <a href="58-silver-bands.html" title="">
                                                                Silver Bands
                                                            </a>
                                                        </li>


                                                        <li class="last">
                                                            <a href="59-tungsten-bands.html" title="">
                                                                Tungsten Bands
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>


                                        <li class="last">
                                            <a href="60-districts.html" title="">
                                                Districts
                                            </a>
                                        </li>

                                    </ul>
                                    <script type="text/javascript">
                                        // <![CDATA[
                                        // we hide the tree only if JavaScript is activated
                                        $('div#categories_block_left ul.dhtml').hide();
                                        // ]]>
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!-- /Block categories module -->

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

