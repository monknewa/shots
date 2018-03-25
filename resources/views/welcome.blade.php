@extends ("layouts.master")

@section("content")
    <div class=" pos_bannerslide">

        <div class="pos-slideshow">
            <div class="flexslider ma-nivoslider">
                <div class="pos-loading" style="display: none;"></div>

                <div id="pos-slideshow-home" class="slides nivoSlider">

                    <img src="/img/blockslideshow/1.jpg" data-thumb="/img/blockslideshow/1.jpg" alt=""/>
                    <img src="/img/blockslideshow/2.jpg" data-thumb="/img/blockslideshow/2.jpg" alt=""/>

                </div>
            </div>
        </div>

        <script >


            $(window).load(function () {
                $(document).off('mouseenter').on('mouseenter', '.pos-slideshow', function (e) {
                    $('.pos-slideshow .timethai').addClass('pos_hover');
                });

                $(document).off('mouseleave').on('mouseleave', '.pos-slideshow', function (e) {
                    $('.pos-slideshow .timethai').removeClass('pos_hover');
                });
                $('#pos-slideshow-home').nivoSlider({
                    effect: 'random',
                    slices: 15,
                    boxCols: 8,
                    boxRows: 4,
                    animSpeed: 600,
                    pauseTime: 1000,
                    startSlide: 1,
                    directionNav: 1,
                    controlNav: false,
                    controlNavThumbs: false,
                    pauseOnHover: true,
                    manualAdvance: false,
                    prevText: '<i class="icon-angle-left"></i>',
                    nextText: '<i class="icon-angle-right"></i>',
                    afterLoad: function () {
                        $('.pos-loading').css("display", "none");
                    },
                    beforeChange: function () {
                        $('.bannerSlideshow1').removeClass("pos_in");
                        $('.bannerSlideshow2').removeClass("pos_in");
                        $('.bannerSlideshow3').removeClass("pos_in");
                    },
                    afterChange: function () {
                        $('.bannerSlideshow1').addClass("pos_in");
                        $('.bannerSlideshow2').addClass("pos_in");
                        $('.bannerSlideshow3').addClass("pos_in");
                    }
                });
            });
        </script>
        <div class="banner-home">
            <div class="container">
                <div class="row">
                    <div class=" col-md-8 col-sm-8 col-xs-12">
                        <div class="banner-box"><a href="#"><img src="/img/cms/1_1.jpg" alt=""></a></div>
                    </div>
                    <div class=" col-md-4 col-sm-4 col-xs-12">
                        <div class="banner-box"><a href="#"><img src="/img/cms/2_1.jpg" alt=""></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position1 container">
        <div class="row">

            <div id="special_products_home" class="products_block col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="pos-title">
                    <h2>
                        <span class="first-title">Hot deal</span><br><span class="last-title">To Day</span>
                    </h2>
                </div>
                <div class="block_content">

                    <div class="row pos-content">
                        <div id="pos-special-products" class="owl-carousel owl-theme"
                             style="display: block; opacity: 1;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 2400px; left: 0px; display: block;">
                                    <div class="owl-item" style="width: 300px;">
                                        <div class="item-special">
                                            <div class="item-product">

                                                <div class="products-inner">
                                                    <a href="wine-basics/5-printed-summer-dress.html" title=""
                                                       class="content_img clearfix">
                                                        <img src="../40-home_default/printed-summer-dress.jpg"
                                                             class="img-responsive" alt="">

                                                    </a>
                                                    <!-- 								<a class="new-box" href="http://demo.posthemes.com/pos_fobe/en/wine-basics/5-printed-summer-dress.html">
                                                            <span class="new-label">New</span>
                                                        </a>
                                                                                 -->

                                                </div>
                                                <div class="product-contents">
                                                    <div class="countdown">

                                                        <script >
                                                            $(document).ready(function () {
                                                                $('#future_date_12_5').countdown({
                                                                    until: new Date(2036, 03 - 1, 11, 00, 00, 00),
                                                                    labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Mins', 'Secs'],
                                                                    labels1: ['Year', 'Month', 'Week', 'Day', 'Hour', 'Minute', 'Second'],

                                                                });
                                                            });
                                                        </script>

                                                        <span id="future_date_12_5" data-time="
								   2036 ,03-1 ,11,00, 00, 00" class="id_countdown is-countdown"><span
                                                                    class="countdown-row countdown-show4"><span
                                                                        class="countdown-section"><span
                                                                            class="countdown-amount">6565</span><span
                                                                            class="countdown-period">Days</span></span><span
                                                                        class="countdown-section"><span
                                                                            class="countdown-amount">0</span><span
                                                                            class="countdown-period">Hrs</span></span><span
                                                                        class="countdown-section"><span
                                                                            class="countdown-amount">12</span><span
                                                                            class="countdown-period">Mins</span></span><span
                                                                        class="countdown-section"><span
                                                                            class="countdown-amount">32</span><span
                                                                            class="countdown-period">Secs</span></span></span></span>

                                                    </div>
                                                    <h5 class="product-name">
                                                        <a href="wine-basics/5-printed-summer-dress.html" title="">
                                                            Printed Summer Dress<br>
                                                        </a>
                                                    </h5>


                                                    <div class="price-box">

									<span class="price product-price">
										£ 34.78									</span>

                                                        <span class="old-price product-price">
											£ 36.61
										</span>

                                                        <span class="price-percent-reduction">-5%</span>


                                                    </div>
                                                    <div class="hook-reviews">
                                                        <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                             itemprop="aggregateRating" class="comments_note">
                                                            <div class="star_content clearfix">
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star"></div>
                                                                <div class="star "></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <p class="product-desc" itemprop="description">
                                                        Long printed dress with thin adjustable straps. V-neckline and
                                                        wiring under the bust with ruffles at the...
                                                    </p>
                                                    <div class="cart">
                                                        <a class="button ajax_add_to_cart_button btn btn-default"
                                                           href="order62d3.html?add=1&amp;id_product=5&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                           rel="nofollow" title="Add to cart" data-id-product="5">
                                                            <span>Add to cart</span>

                                                        </a>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 300px;">
                                        <div class="item-special">
                                            <div class="item-product">

                                                <div class="products-inner">
                                                    <a href="wine-basics/10-printed-summer-dress.html" title=""
                                                       class="content_img clearfix">
                                                        <img src="../65-home_default/printed-summer-dress.jpg"
                                                             class="img-responsive" alt="">

                                                    </a>
                                                    <!-- 								<a class="new-box" href="http://demo.posthemes.com/pos_fobe/en/wine-basics/10-printed-summer-dress.html">
                                                            <span class="new-label">New</span>
                                                        </a>
                                                                                 -->

                                                </div>
                                                <div class="product-contents">
                                                    <div class="countdown">

                                                        <script >
                                                            $(document).ready(function () {
                                                                $('#future_date_12_10').countdown({
                                                                    until: new Date(2036, 03 - 1, 11, 00, 00, 00),
                                                                    labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Mins', 'Secs'],
                                                                    labels1: ['Year', 'Month', 'Week', 'Day', 'Hour', 'Minute', 'Second'],

                                                                });
                                                            });
                                                        </script>

                                                        <span id="future_date_12_10" data-time="
								   2036 ,03-1 ,11,00, 00, 00" class="id_countdown is-countdown"><span
                                                                    class="countdown-row countdown-show4"><span
                                                                        class="countdown-section"><span
                                                                            class="countdown-amount">6565</span><span
                                                                            class="countdown-period">Days</span></span><span
                                                                        class="countdown-section"><span
                                                                            class="countdown-amount">0</span><span
                                                                            class="countdown-period">Hrs</span></span><span
                                                                        class="countdown-section"><span
                                                                            class="countdown-amount">12</span><span
                                                                            class="countdown-period">Mins</span></span><span
                                                                        class="countdown-section"><span
                                                                            class="countdown-amount">32</span><span
                                                                            class="countdown-period">Secs</span></span></span></span>

                                                    </div>
                                                    <h5 class="product-name">
                                                        <a href="wine-basics/10-printed-summer-dress.html" title="">
                                                            Printed Summer Dress<br>
                                                        </a>
                                                    </h5>


                                                    <div class="price-box">

									<span class="price product-price">
										£ 34.78									</span>

                                                        <span class="old-price product-price">
											£ 36.61
										</span>

                                                        <span class="price-percent-reduction">-5%</span>


                                                    </div>
                                                    <div class="hook-reviews">
                                                        <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                             itemprop="aggregateRating" class="comments_note">
                                                            <div class="star_content clearfix">
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star"></div>
                                                                <div class="star "></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <p class="product-desc" itemprop="description">
                                                        Long printed dress with thin adjustable straps. V-neckline and
                                                        wiring under the bust with ruffles at the...
                                                    </p>
                                                    <div class="cart">
                                                        <a class="button ajax_add_to_cart_button btn btn-default"
                                                           href="ordera5cc.html?add=1&amp;id_product=10&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                           rel="nofollow" title="Add to cart" data-id-product="10">
                                                            <span>Add to cart</span>

                                                        </a>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 300px;">
                                        <div class="item-special">
                                            <div class="item-product">

                                                <div class="products-inner">
                                                    <a href="wine-basics/12-printed-chiffon-dress.html" title=""
                                                       class="content_img clearfix">
                                                        <img src="../64-home_default/printed-chiffon-dress.jpg"
                                                             class="img-responsive" alt="">

                                                    </a>
                                                    <!-- 								<a class="new-box" href="http://demo.posthemes.com/pos_fobe/en/wine-basics/12-printed-chiffon-dress.html">
                                                            <span class="new-label">New</span>
                                                        </a>
                                                                                 -->

                                                </div>
                                                <div class="product-contents">
                                                    <div class="countdown">

                                                        <script >
                                                            $(document).ready(function () {
                                                                $('#future_date_12_12').countdown({
                                                                    until: new Date(2036, 03 - 1, 11, 00, 00, 00),
                                                                    labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Mins', 'Secs'],
                                                                    labels1: ['Year', 'Month', 'Week', 'Day', 'Hour', 'Minute', 'Second'],

                                                                });
                                                            });
                                                        </script>

                                                        <span id="future_date_12_12" data-time="
								   2036 ,03-1 ,11,00, 00, 00" class="id_countdown is-countdown"><span
                                                                    class="countdown-row countdown-show4"><span
                                                                        class="countdown-section"><span
                                                                            class="countdown-amount">6565</span><span
                                                                            class="countdown-period">Days</span></span><span
                                                                        class="countdown-section"><span
                                                                            class="countdown-amount">0</span><span
                                                                            class="countdown-period">Hrs</span></span><span
                                                                        class="countdown-section"><span
                                                                            class="countdown-amount">12</span><span
                                                                            class="countdown-period">Mins</span></span><span
                                                                        class="countdown-section"><span
                                                                            class="countdown-amount">32</span><span
                                                                            class="countdown-period">Secs</span></span></span></span>

                                                    </div>
                                                    <h5 class="product-name">
                                                        <a href="wine-basics/12-printed-chiffon-dress.html" title="">
                                                            Printed Chiffon Dress<br>
                                                        </a>
                                                    </h5>


                                                    <div class="price-box">

									<span class="price product-price">
										£ 19.68									</span>

                                                        <span class="old-price product-price">
											£ 24.60
										</span>

                                                        <span class="price-percent-reduction">-20%</span>


                                                    </div>
                                                    <div class="hook-reviews">
                                                        <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                             itemprop="aggregateRating" class="comments_note">
                                                            <div class="star_content clearfix">
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star"></div>
                                                                <div class="star "></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <p class="product-desc" itemprop="description">
                                                        Printed chiffon knee length dress with tank straps. Deep
                                                        v-neckline.
                                                    </p>
                                                    <div class="cart">
                                                        <a class="button ajax_add_to_cart_button btn btn-default"
                                                           href="order9543.html?add=1&amp;id_product=12&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                           rel="nofollow" title="Add to cart" data-id-product="12">
                                                            <span>Add to cart</span>

                                                        </a>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 300px;">
                                        <div class="item-special">
                                            <div class="item-product">

                                                <div class="products-inner">
                                                    <a href="wine-basics/7-printed-chiffon-dress.html" title=""
                                                       class="content_img clearfix">
                                                        <img src="../48-home_default/printed-chiffon-dress.jpg"
                                                             class="img-responsive" alt="">

                                                    </a>
                                                    <!-- 								<a class="new-box" href="http://demo.posthemes.com/pos_fobe/en/wine-basics/7-printed-chiffon-dress.html">
                                                            <span class="new-label">New</span>
                                                        </a>
                                                                                 -->

                                                </div>
                                                <div class="product-contents">
                                                    <div class="countdown">

                                                        <script >
                                                            $(document).ready(function () {
                                                                $('#future_date_12_7').countdown({
                                                                    until: new Date(2036, 03 - 1, 11, 00, 00, 00),
                                                                    labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Mins', 'Secs'],
                                                                    labels1: ['Year', 'Month', 'Week', 'Day', 'Hour', 'Minute', 'Second'],

                                                                });
                                                            });
                                                        </script>

                                                        <span id="future_date_12_7" data-time="
								   2036 ,03-1 ,11,00, 00, 00" class="id_countdown is-countdown"><span
                                                                    class="countdown-row countdown-show4"><span
                                                                        class="countdown-section"><span
                                                                            class="countdown-amount">6565</span><span
                                                                            class="countdown-period">Days</span></span><span
                                                                        class="countdown-section"><span
                                                                            class="countdown-amount">0</span><span
                                                                            class="countdown-period">Hrs</span></span><span
                                                                        class="countdown-section"><span
                                                                            class="countdown-amount">12</span><span
                                                                            class="countdown-period">Mins</span></span><span
                                                                        class="countdown-section"><span
                                                                            class="countdown-amount">32</span><span
                                                                            class="countdown-period">Secs</span></span></span></span>

                                                    </div>
                                                    <h5 class="product-name">
                                                        <a href="wine-basics/7-printed-chiffon-dress.html" title="">
                                                            Printed Chiffon Dress<br>
                                                        </a>
                                                    </h5>


                                                    <div class="price-box">

									<span class="price product-price">
										£ 19.68									</span>

                                                        <span class="old-price product-price">
											£ 24.60
										</span>

                                                        <span class="price-percent-reduction">-20%</span>


                                                    </div>
                                                    <div class="hook-reviews">
                                                        <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                             itemprop="aggregateRating" class="comments_note">
                                                            <div class="star_content clearfix">
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star"></div>
                                                                <div class="star "></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <p class="product-desc" itemprop="description">
                                                        Printed chiffon knee length dress with tank straps. Deep
                                                        v-neckline.
                                                    </p>
                                                    <div class="cart">
                                                        <a class="button ajax_add_to_cart_button btn btn-default"
                                                           href="order0f19.html?add=1&amp;id_product=7&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                           rel="nofollow" title="Add to cart" data-id-product="7">
                                                            <span>Add to cart</span>

                                                        </a>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="boxprevnext">
                            <a class="prev prevspecial"><i class="icon-long-arrow-left"></i></a>
                            <a class="next nextspecial"><i class="icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function () {

                    var owl = $("#pos-special-products");

                    owl.owlCarousel({
                        autoPlay: false,
                        pagination: false,
                        items: 1,
                        slideSpeed: 1000,
                        itemsDesktop: [1199, 1],
                        itemsDesktopSmall: [991, 1],
                        itemsTablet: [767, 1],
                        itemsMobile: [480, 1]
                    });
                    // Custom Navigation Events
                    $(".nextspecial").click(function () {
                        owl.trigger('owl.next');
                    })
                    $(".prevspecial").click(function () {
                        owl.trigger('owl.prev');
                    })
                });
            </script>
            <div class="col-lg-5  col-md-4 col-sm-6 col-xs-12">
                <div class="banner-home"><a href="#"><img src="/img/cms/3_1.jpg" alt=""></a></div>
            </div>
            <!-- MODULE Block best sellers -->
            <div class=" col-xs-12 col-md-4 col-sm-12">
                <div class="pos-bestsellers ">
                    <div class="pos-title">
                        <h2>
                            <a href="best-sales.html" title="View a top sellers products">
                                Top sellers
                            </a>
                        </h2>
                    </div>
                    <div class="row pos-content">
                        <div class="pos-topsellers owl-carousel owl-theme" style="display: block; opacity: 1;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 2960px; left: 0px; display: block;">
                                    <div class="owl-item" style="width: 370px;">
                                        <div class="first_item clearfix">
                                            <div class="item-product">
                                                <div class="products-inner">
                                                    <a href="wine-basics/2-blouse.html" title="">
                                                        <img src="../28-home_default/blouse.jpg" alt="">

                                                    </a>
                                                    <!-- 											<a class="new-box" href="http://demo.posthemes.com/pos_fobe/en/wine-basics/2-blouse.html">
                                                                    <span class="new-label">New</span>
                                                                </a>
                                                                                             -->


                                                </div>
                                                <div class="product-contents">

                                                    <h5 class="product-name">
                                                        <a href="wine-basics/2-blouse.html" title="">
                                                            Blouse<br>
                                                        </a>
                                                    </h5>

                                                    <div class="hook-reviews">
                                                        <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                             itemprop="aggregateRating" class="comments_note">
                                                            <div class="star_content clearfix">
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star"></div>
                                                                <div class="star "></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="price-box">

										<span class="price product-price">
											£ 32.40										</span>


                                                    </div>
                                                    <p class="product-desc" itemprop="description">
                                                        Short-sleeved blouse with feminine draped sleeve detail.
                                                    </p>
                                                    <div class="actions">

                                                        <div class="actions-inner">

                                                            <ul class="add-to-links">
                                                                <li class="cart">
                                                                    <a class="button ajax_add_to_cart_button btn btn-default"
                                                                       href="ordera9c3.html?add=1&amp;id_product=2&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                       rel="nofollow" title="Add to cart"
                                                                       data-id-product="2">
                                                                        <span>Add to cart</span>

                                                                    </a>

                                                                </li>
                                                                <li>
                                                                    <a class="addToWishlist wishlistProd_2" href="#"
                                                                       data-wishlist="2" title="Add to Wishlist"
                                                                       onclick="WishlistCart('wishlist_block_list', 'add', '2', false, 1); return false;">
                                                                        <span>Wishlist</span>

                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="add_to_compare"
                                                                       href="wine-basics/2-blouse.html"
                                                                       data-id-product="2" title="Add to Compare">Compare

                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="quick-view" title="Quick view"
                                                                       href="wine-basics/2-blouse.html">

                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="products-inner">
                                                    <a href="wine-basics/3-printed-dress.html" title="">
                                                        <img src="../32-home_default/printed-dress.jpg" alt="">

                                                    </a>
                                                    <!-- 											<a class="new-box" href="http://demo.posthemes.com/pos_fobe/en/wine-basics/3-printed-dress.html">
                                                                    <span class="new-label">New</span>
                                                                </a>
                                                                                             -->


                                                </div>
                                                <div class="product-contents">

                                                    <h5 class="product-name">
                                                        <a href="wine-basics/3-printed-dress.html" title="">
                                                            Printed Dress<br>
                                                        </a>
                                                    </h5>

                                                    <div class="hook-reviews">
                                                        <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                             itemprop="aggregateRating" class="comments_note">
                                                            <div class="star_content clearfix">
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star"></div>
                                                                <div class="star "></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="price-box">

										<span class="price product-price">
											£ 31.20										</span>


                                                    </div>
                                                    <p class="product-desc" itemprop="description">
                                                        100% cotton double printed dress. Black and white striped top
                                                        and orange high...
                                                    </p>
                                                    <div class="actions">

                                                        <div class="actions-inner">

                                                            <ul class="add-to-links">
                                                                <li class="cart">
                                                                    <a class="button ajax_add_to_cart_button btn btn-default"
                                                                       href="order8aa3.html?add=1&amp;id_product=3&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                       rel="nofollow" title="Add to cart"
                                                                       data-id-product="3">
                                                                        <span>Add to cart</span>

                                                                    </a>

                                                                </li>
                                                                <li>
                                                                    <a class="addToWishlist wishlistProd_3" href="#"
                                                                       data-wishlist="3" title="Add to Wishlist"
                                                                       onclick="WishlistCart('wishlist_block_list', 'add', '3', false, 1); return false;">
                                                                        <span>Wishlist</span>

                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="add_to_compare"
                                                                       href="wine-basics/3-printed-dress.html"
                                                                       data-id-product="3" title="Add to Compare">Compare

                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="quick-view" title="Quick view"
                                                                       href="wine-basics/3-printed-dress.html">

                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 370px;">
                                        <div class="item clearfix">
                                            <div class="item-product">
                                                <div class="products-inner">
                                                    <a href="wine-basics/1-faded-short-sleeves-tshirt.html" title="">
                                                        <img src="../24-home_default/faded-short-sleeves-tshirt.jpg"
                                                             alt="">

                                                    </a>
                                                    <!-- 											<a class="new-box" href="http://demo.posthemes.com/pos_fobe/en/wine-basics/1-faded-short-sleeves-tshirt.html">
                                                                    <span class="new-label">New</span>
                                                                </a>
                                                                                             -->


                                                </div>
                                                <div class="product-contents">

                                                    <h5 class="product-name">
                                                        <a href="wine-basics/1-faded-short-sleeves-tshirt.html"
                                                           title="">
                                                            Faded Short Sleeves T-shirt<br>
                                                        </a>
                                                    </h5>

                                                    <div class="hook-reviews">
                                                        <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                             itemprop="aggregateRating" class="comments_note">
                                                            <div class="star_content clearfix">
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star"></div>
                                                                <div class="star "></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="price-box">

										<span class="price product-price">
											£ 19.81										</span>


                                                    </div>
                                                    <p class="product-desc" itemprop="description">
                                                        Faded short sleeves t-shirt with high neckline. Soft and
                                                        stretchy material...
                                                    </p>
                                                    <div class="actions">

                                                        <div class="actions-inner">

                                                            <ul class="add-to-links">
                                                                <li class="cart">
                                                                    <a class="button ajax_add_to_cart_button btn btn-default"
                                                                       href="order7a0f.html?add=1&amp;id_product=1&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                       rel="nofollow" title="Add to cart"
                                                                       data-id-product="1">
                                                                        <span>Add to cart</span>

                                                                    </a>

                                                                </li>
                                                                <li>
                                                                    <a class="addToWishlist wishlistProd_1" href="#"
                                                                       data-wishlist="1" title="Add to Wishlist"
                                                                       onclick="WishlistCart('wishlist_block_list', 'add', '1', false, 1); return false;">
                                                                        <span>Wishlist</span>

                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="add_to_compare"
                                                                       href="wine-basics/1-faded-short-sleeves-tshirt.html"
                                                                       data-id-product="1" title="Add to Compare">Compare

                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="quick-view" title="Quick view"
                                                                       href="wine-basics/1-faded-short-sleeves-tshirt.html">

                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="products-inner">
                                                    <a href="wine-basics/8-printed-dress.html" title="">
                                                        <img src="../52-home_default/printed-dress.jpg" alt="">

                                                    </a>
                                                    <!-- 											<a class="new-box" href="http://demo.posthemes.com/pos_fobe/en/wine-basics/8-printed-dress.html">
                                                                    <span class="new-label">New</span>
                                                                </a>
                                                                                             -->


                                                </div>
                                                <div class="product-contents">

                                                    <h5 class="product-name">
                                                        <a href="wine-basics/8-printed-dress.html" title="">
                                                            Printed Dress<br>
                                                        </a>
                                                    </h5>

                                                    <div class="hook-reviews">
                                                        <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                             itemprop="aggregateRating" class="comments_note">
                                                            <div class="star_content clearfix">
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star"></div>
                                                                <div class="star "></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="price-box">

										<span class="price product-price">
											£ 31.20										</span>


                                                    </div>
                                                    <p class="product-desc" itemprop="description">
                                                        100% cotton double printed dress. Black and white striped top
                                                        and orange high...
                                                    </p>
                                                    <div class="actions">

                                                        <div class="actions-inner">

                                                            <ul class="add-to-links">
                                                                <li class="cart">
                                                                    <a class="button ajax_add_to_cart_button btn btn-default"
                                                                       href="orderc4c4.html?add=1&amp;id_product=8&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                       rel="nofollow" title="Add to cart"
                                                                       data-id-product="8">
                                                                        <span>Add to cart</span>

                                                                    </a>

                                                                </li>
                                                                <li>
                                                                    <a class="addToWishlist wishlistProd_8" href="#"
                                                                       data-wishlist="8" title="Add to Wishlist"
                                                                       onclick="WishlistCart('wishlist_block_list', 'add', '8', false, 1); return false;">
                                                                        <span>Wishlist</span>

                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="add_to_compare"
                                                                       href="wine-basics/8-printed-dress.html"
                                                                       data-id-product="8" title="Add to Compare">Compare

                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="quick-view" title="Quick view"
                                                                       href="wine-basics/8-printed-dress.html">

                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 370px;">
                                        <div class="item clearfix">
                                            <div class="item-product">
                                                <div class="products-inner">
                                                    <a href="wine-basics/7-printed-chiffon-dress.html" title="">
                                                        <img src="../48-home_default/printed-chiffon-dress.jpg" alt="">

                                                    </a>
                                                    <!-- 											<a class="new-box" href="http://demo.posthemes.com/pos_fobe/en/wine-basics/7-printed-chiffon-dress.html">
                                                                    <span class="new-label">New</span>
                                                                </a>
                                                                                             -->


                                                </div>
                                                <div class="product-contents">

                                                    <h5 class="product-name">
                                                        <a href="wine-basics/7-printed-chiffon-dress.html" title="">
                                                            Printed Chiffon Dress<br>
                                                        </a>
                                                    </h5>

                                                    <div class="hook-reviews">
                                                        <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                             itemprop="aggregateRating" class="comments_note">
                                                            <div class="star_content clearfix">
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star"></div>
                                                                <div class="star "></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="price-box">

										<span class="price product-price">
											£ 19.68										</span>

                                                        <span class="old-price product-price">
												£ 24.60
											</span>

                                                        <span class="price-percent-reduction"><span>-20%</span></span>


                                                    </div>
                                                    <p class="product-desc" itemprop="description">
                                                        Printed chiffon knee length dress with tank straps. Deep
                                                        v-neckline.
                                                    </p>
                                                    <div class="actions">

                                                        <div class="actions-inner">

                                                            <ul class="add-to-links">
                                                                <li class="cart">
                                                                    <a class="button ajax_add_to_cart_button btn btn-default"
                                                                       href="order0f19.html?add=1&amp;id_product=7&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                       rel="nofollow" title="Add to cart"
                                                                       data-id-product="7">
                                                                        <span>Add to cart</span>

                                                                    </a>

                                                                </li>
                                                                <li>
                                                                    <a class="addToWishlist wishlistProd_7" href="#"
                                                                       data-wishlist="7" title="Add to Wishlist"
                                                                       onclick="WishlistCart('wishlist_block_list', 'add', '7', false, 1); return false;">
                                                                        <span>Wishlist</span>

                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="add_to_compare"
                                                                       href="wine-basics/7-printed-chiffon-dress.html"
                                                                       data-id-product="7" title="Add to Compare">Compare

                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="quick-view" title="Quick view"
                                                                       href="wine-basics/7-printed-chiffon-dress.html">

                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item-product">
                                                <div class="products-inner">
                                                    <a href="wine-basics/6-printed-summer-dress.html" title="">
                                                        <img src="../44-home_default/printed-summer-dress.jpg" alt="">

                                                    </a>
                                                    <!-- 											<a class="new-box" href="http://demo.posthemes.com/pos_fobe/en/wine-basics/6-printed-summer-dress.html">
                                                                    <span class="new-label">New</span>
                                                                </a>
                                                                                             -->


                                                </div>
                                                <div class="product-contents">

                                                    <h5 class="product-name">
                                                        <a href="wine-basics/6-printed-summer-dress.html" title="">
                                                            Printed Summer Dress<br>
                                                        </a>
                                                    </h5>

                                                    <div class="hook-reviews">
                                                        <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                             itemprop="aggregateRating" class="comments_note">
                                                            <div class="star_content clearfix">
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star"></div>
                                                                <div class="star "></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="price-box">

										<span class="price product-price">
											£ 36.60										</span>


                                                    </div>
                                                    <p class="product-desc" itemprop="description">
                                                        Sleeveless knee-length chiffon dress. V-neckline with elastic
                                                        under the bust...
                                                    </p>
                                                    <div class="actions">

                                                        <div class="actions-inner">

                                                            <ul class="add-to-links">
                                                                <li class="cart">
                                                                    <a class="button ajax_add_to_cart_button btn btn-default"
                                                                       href="ordere327.html?add=1&amp;id_product=6&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                       rel="nofollow" title="Add to cart"
                                                                       data-id-product="6">
                                                                        <span>Add to cart</span>

                                                                    </a>

                                                                </li>
                                                                <li>
                                                                    <a class="addToWishlist wishlistProd_6" href="#"
                                                                       data-wishlist="6" title="Add to Wishlist"
                                                                       onclick="WishlistCart('wishlist_block_list', 'add', '6', false, 1); return false;">
                                                                        <span>Wishlist</span>

                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="add_to_compare"
                                                                       href="wine-basics/6-printed-summer-dress.html"
                                                                       data-id-product="6" title="Add to Compare">Compare

                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="quick-view" title="Quick view"
                                                                       href="wine-basics/6-printed-summer-dress.html">

                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 370px;">
                                        <div class="last_item clearfix">
                                            <div class="item-product">
                                                <div class="products-inner">
                                                    <a href="wine-basics/5-printed-summer-dress.html" title="">
                                                        <img src="../40-home_default/printed-summer-dress.jpg" alt="">

                                                    </a>
                                                    <!-- 											<a class="new-box" href="http://demo.posthemes.com/pos_fobe/en/wine-basics/5-printed-summer-dress.html">
                                                                    <span class="new-label">New</span>
                                                                </a>
                                                                                             -->


                                                </div>
                                                <div class="product-contents">

                                                    <h5 class="product-name">
                                                        <a href="wine-basics/5-printed-summer-dress.html" title="">
                                                            Printed Summer Dress<br>
                                                        </a>
                                                    </h5>

                                                    <div class="hook-reviews">
                                                        <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                             itemprop="aggregateRating" class="comments_note">
                                                            <div class="star_content clearfix">
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star "></div>
                                                                <div class="star"></div>
                                                                <div class="star "></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="price-box">

										<span class="price product-price">
											£ 34.78										</span>

                                                        <span class="old-price product-price">
												£ 36.61
											</span>

                                                        <span class="price-percent-reduction"><span>-5%</span></span>


                                                    </div>
                                                    <p class="product-desc" itemprop="description">
                                                        Long printed dress with thin adjustable straps. V-neckline and
                                                        wiring under...
                                                    </p>
                                                    <div class="actions">

                                                        <div class="actions-inner">

                                                            <ul class="add-to-links">
                                                                <li class="cart">
                                                                    <a class="button ajax_add_to_cart_button btn btn-default"
                                                                       href="order62d3.html?add=1&amp;id_product=5&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                       rel="nofollow" title="Add to cart"
                                                                       data-id-product="5">
                                                                        <span>Add to cart</span>

                                                                    </a>

                                                                </li>
                                                                <li>
                                                                    <a class="addToWishlist wishlistProd_5" href="#"
                                                                       data-wishlist="5" title="Add to Wishlist"
                                                                       onclick="WishlistCart('wishlist_block_list', 'add', '5', false, 1); return false;">
                                                                        <span>Wishlist</span>

                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="add_to_compare"
                                                                       href="wine-basics/5-printed-summer-dress.html"
                                                                       data-id-product="5" title="Add to Compare">Compare

                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="quick-view" title="Quick view"
                                                                       href="wine-basics/5-printed-summer-dress.html">

                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="boxprevnext">
                            <a class="prev prevsellers"><i class="icon-long-arrow-left"></i></a>
                            <a class="next nextsellers"><i class="icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <script >
                $(document).ready(function () {
                    var owl = $(".pos-topsellers");
                    owl.owlCarousel({
                        items: 1,
                        slideSpeed: 1000,
                        pagination: false,
                        itemsDesktop: [1199, 1],
                        itemsDesktopSmall: [991, 2],
                        itemsTablet: [767, 1],
                        itemsMobile: [480, 1]
                    });
                    $(".nextsellers").click(function () {
                        owl.trigger('owl.next');
                    })
                    $(".prevsellers").click(function () {
                        owl.trigger('owl.prev');
                    })
                });
            </script>
            <!-- /MODULE Block best sellers -->
        </div>

    </div>
    <div class="pos-new-product">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="pos-title"><h2><span class="first-title">New Collection</span><br><span
                                    class="last-title">Special Collection</span></h2></div>
                    <p class="desc-title">Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum
                        claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
                    <div class="boxprevnext">
                        <a class="prev prevnewproduct"><i class="icon-long-arrow-left"></i></a>
                        <a class="next nextnewproduct"><i class="icon-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class=" row pos-content">
                        <div class="pos_newproducts  owl-carousel owl-theme" style="display: block; opacity: 1;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 7200px; left: 0px; display: block;">
                                    @foreach($specialCollections as $specialCollection)
                                        <div class="owl-item" style="width: 300px;">
                                            <div class="item-feature">
                                                <div class="item-product">

                                                    <div class="products-inner">
                                                        <a class="product_img_link"

                                                           title="Faded Short Sleeves T-shirt" itemprop="url">
                                                            <img class=" img-responsive"
                                                                 src="{{$specialCollection->image}}" style="height:300px"
                                                                 title="Faded Short Sleeves T-shirt" itemprop="image">
                                                        </a>
                                                        <a class="new-box">
                                                            <span class="new-label">New</span>
                                                        </a>
                                                    </div>
                                                    <div class="product-contents">
                                                        <h5 class="product-name"><a
                                                                    href="wine-basics/1-faded-short-sleeves-tshirt.html"
                                                                    title="{{$specialCollection->name}}">{{$specialCollection->name}}</a></h5>
                                                        <div class="price-box">
									<span class="price product-price">
										<i class="fa fa-rupee"></i> {{$specialCollection->price}}</span>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="actions-inner">
                                                                <ul class="add-to-links">
                                                                    <li class="cart">
                                                                        <a class="button ajax_add_to_cart_button btn btn-default"
                                                                           href="order7a0f.html?add=1&amp;id_product=1&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                           rel="nofollow" title="Add to cart"
                                                                           data-id-product="1">
                                                                            <span>Add to cart</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="addToWishlist wishlistProd_1" href="#"
                                                                           data-wishlist="1" title="Add to Wishlist"
                                                                           onclick="WishlistCart('wishlist_block_list', 'add', '1', false, 1); return false;">
                                                                            <span>Wishlist</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="add_to_compare"
                                                                           href="wine-basics/1-faded-short-sleeves-tshirt.html"
                                                                           data-id-product="1" title="Add to Compare">Compare
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="quick-view" title="Quick view"
                                                                           href="wine-basics/1-faded-short-sleeves-tshirt.html">
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{-- <div class="owl-item" style="width: 300px;">
                                         <div class="item-feature">
                                             <div class="item-product">

                                                 <div class="products-inner">
                                                     <a class="product_img_link" href="wine-basics/2-blouse.html" title="Blouse"
                                                        itemprop="url">
                                                         <img class="replace-2x img-responsive"
                                                              src="../28-home_default/blouse.jpg" alt="Blouse" title="Blouse"
                                                              itemprop="image">
                                                     </a>
                                                     <a class="new-box" href="wine-basics/2-blouse.html">
                                                         <span class="new-label">New</span>
                                                     </a>
                                                     <div class="hook-reviews">
                                                         <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                              itemprop="aggregateRating" class="comments_note">
                                                             <div class="star_content clearfix">
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star"></div>
                                                                 <div class="star "></div>
                                                             </div>
                                                         </div>

                                                     </div>


                                                 </div>

                                                 <div class="product-contents">
                                                     <h5 class="product-name"><a href="wine-basics/2-blouse.html" title="Blouse">Blouse</a>
                                                     </h5>

                                                     <div class="price-box">

                                             <span class="price product-price">
                                                 £ 32.40									</span>


                                                     </div>
                                                     <div class="actions">

                                                         <div class="actions-inner">

                                                             <ul class="add-to-links">
                                                                 <li class="cart">
                                                                     <a class="button ajax_add_to_cart_button btn btn-default"
                                                                        href="ordera9c3.html?add=1&amp;id_product=2&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                        rel="nofollow" title="Add to cart" data-id-product="2">
                                                                         <span>Add to cart</span>

                                                                     </a>

                                                                 </li>
                                                                 <li>
                                                                     <a class="addToWishlist wishlistProd_2" href="#"
                                                                        data-wishlist="2" title="Add to Wishlist"
                                                                        onclick="WishlistCart('wishlist_block_list', 'add', '2', false, 1); return false;">
                                                                         <span>Wishlist</span>

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="add_to_compare" href="wine-basics/2-blouse.html"
                                                                        data-id-product="2" title="Add to Compare">Compare

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="quick-view" title="Quick view"
                                                                        href="wine-basics/2-blouse.html">

                                                                     </a>
                                                                 </li>
                                                             </ul>
                                                         </div>
                                                     </div>


                                                 </div>
                                             </div>

                                         </div>
                                     </div>
                                     <div class="owl-item" style="width: 300px;">
                                         <div class="item-feature">
                                             <div class="item-product">

                                                 <div class="products-inner">
                                                     <a class="product_img_link" href="wine-basics/3-printed-dress.html"
                                                        title="Printed Dress" itemprop="url">
                                                         <img class="replace-2x img-responsive"
                                                              src="../32-home_default/printed-dress.jpg" alt="Printed Dress"
                                                              title="Printed Dress" itemprop="image">
                                                     </a>
                                                     <a class="new-box" href="wine-basics/3-printed-dress.html">
                                                         <span class="new-label">New</span>
                                                     </a>
                                                     <div class="hook-reviews">
                                                         <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                              itemprop="aggregateRating" class="comments_note">
                                                             <div class="star_content clearfix">
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star"></div>
                                                                 <div class="star "></div>
                                                             </div>
                                                         </div>

                                                     </div>


                                                 </div>

                                                 <div class="product-contents">
                                                     <h5 class="product-name"><a href="wine-basics/3-printed-dress.html"
                                                                                 title="Printed Dress">Printed Dress</a></h5>

                                                     <div class="price-box">

                                             <span class="price product-price">
                                                 £ 31.20									</span>


                                                     </div>
                                                     <div class="actions">

                                                         <div class="actions-inner">

                                                             <ul class="add-to-links">
                                                                 <li class="cart">
                                                                     <a class="button ajax_add_to_cart_button btn btn-default"
                                                                        href="order8aa3.html?add=1&amp;id_product=3&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                        rel="nofollow" title="Add to cart" data-id-product="3">
                                                                         <span>Add to cart</span>

                                                                     </a>

                                                                 </li>
                                                                 <li>
                                                                     <a class="addToWishlist wishlistProd_3" href="#"
                                                                        data-wishlist="3" title="Add to Wishlist"
                                                                        onclick="WishlistCart('wishlist_block_list', 'add', '3', false, 1); return false;">
                                                                         <span>Wishlist</span>

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="add_to_compare"
                                                                        href="wine-basics/3-printed-dress.html"
                                                                        data-id-product="3" title="Add to Compare">Compare

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="quick-view" title="Quick view"
                                                                        href="wine-basics/3-printed-dress.html">

                                                                     </a>
                                                                 </li>
                                                             </ul>
                                                         </div>
                                                     </div>


                                                 </div>
                                             </div>

                                         </div>
                                     </div>
                                     <div class="owl-item" style="width: 300px;">
                                         <div class="item-feature">
                                             <div class="item-product">

                                                 <div class="products-inner">
                                                     <a class="product_img_link" href="wine-basics/4-printed-dress.html"
                                                        title="Printed Dress" itemprop="url">
                                                         <img class="replace-2x img-responsive"
                                                              src="../36-home_default/printed-dress.jpg" alt="Printed Dress"
                                                              title="Printed Dress" itemprop="image">
                                                     </a>
                                                     <a class="new-box" href="wine-basics/4-printed-dress.html">
                                                         <span class="new-label">New</span>
                                                     </a>
                                                     <div class="hook-reviews">
                                                         <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                              itemprop="aggregateRating" class="comments_note">
                                                             <div class="star_content clearfix">
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star"></div>
                                                                 <div class="star "></div>
                                                             </div>
                                                         </div>

                                                     </div>


                                                 </div>

                                                 <div class="product-contents">
                                                     <h5 class="product-name"><a href="wine-basics/4-printed-dress.html"
                                                                                 title="Printed Dress">Printed Dress</a></h5>

                                                     <div class="price-box">

                                             <span class="price product-price">
                                                 £ 61.19									</span>


                                                     </div>
                                                     <div class="actions">

                                                         <div class="actions-inner">

                                                             <ul class="add-to-links">
                                                                 <li class="cart">
                                                                     <a class="button ajax_add_to_cart_button btn btn-default"
                                                                        href="orderc2ff.html?add=1&amp;id_product=4&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                        rel="nofollow" title="Add to cart" data-id-product="4">
                                                                         <span>Add to cart</span>

                                                                     </a>

                                                                 </li>
                                                                 <li>
                                                                     <a class="addToWishlist wishlistProd_4" href="#"
                                                                        data-wishlist="4" title="Add to Wishlist"
                                                                        onclick="WishlistCart('wishlist_block_list', 'add', '4', false, 1); return false;">
                                                                         <span>Wishlist</span>

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="add_to_compare"
                                                                        href="wine-basics/4-printed-dress.html"
                                                                        data-id-product="4" title="Add to Compare">Compare

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="quick-view" title="Quick view"
                                                                        href="wine-basics/4-printed-dress.html">

                                                                     </a>
                                                                 </li>
                                                             </ul>
                                                         </div>
                                                     </div>


                                                 </div>
                                             </div>

                                         </div>
                                     </div>
                                     <div class="owl-item" style="width: 300px;">
                                         <div class="item-feature">
                                             <div class="item-product">

                                                 <div class="products-inner">
                                                     <a class="product_img_link" href="wine-basics/5-printed-summer-dress.html"
                                                        title="Printed Summer Dress" itemprop="url">
                                                         <img class="replace-2x img-responsive"
                                                              src="../40-home_default/printed-summer-dress.jpg"
                                                              alt="Printed Summer Dress" title="Printed Summer Dress"
                                                              itemprop="image">
                                                     </a>
                                                     <a class="new-box" href="wine-basics/5-printed-summer-dress.html">
                                                         <span class="new-label">New</span>
                                                     </a>
                                                     <div class="hook-reviews">
                                                         <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                              itemprop="aggregateRating" class="comments_note">
                                                             <div class="star_content clearfix">
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star"></div>
                                                                 <div class="star "></div>
                                                             </div>
                                                         </div>

                                                     </div>


                                                 </div>

                                                 <div class="product-contents">
                                                     <h5 class="product-name"><a href="wine-basics/5-printed-summer-dress.html"
                                                                                 title="Printed Summer Dress">Printed Summer
                                                             Dress</a></h5>

                                                     <div class="price-box">

                                             <span class="price product-price">
                                                 £ 34.78									</span>

                                                         <span class="old-price product-price">
                                                     £ 36.61
                                                 </span>

                                                         <span class="price-percent-reduction">-5%</span>


                                                     </div>
                                                     <div class="actions">

                                                         <div class="actions-inner">

                                                             <ul class="add-to-links">
                                                                 <li class="cart">
                                                                     <a class="button ajax_add_to_cart_button btn btn-default"
                                                                        href="order62d3.html?add=1&amp;id_product=5&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                        rel="nofollow" title="Add to cart" data-id-product="5">
                                                                         <span>Add to cart</span>

                                                                     </a>

                                                                 </li>
                                                                 <li>
                                                                     <a class="addToWishlist wishlistProd_5" href="#"
                                                                        data-wishlist="5" title="Add to Wishlist"
                                                                        onclick="WishlistCart('wishlist_block_list', 'add', '5', false, 1); return false;">
                                                                         <span>Wishlist</span>

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="add_to_compare"
                                                                        href="wine-basics/5-printed-summer-dress.html"
                                                                        data-id-product="5" title="Add to Compare">Compare

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="quick-view" title="Quick view"
                                                                        href="wine-basics/5-printed-summer-dress.html">

                                                                     </a>
                                                                 </li>
                                                             </ul>
                                                         </div>
                                                     </div>


                                                 </div>
                                             </div>

                                         </div>
                                     </div>
                                     <div class="owl-item" style="width: 300px;">
                                         <div class="item-feature">
                                             <div class="item-product">

                                                 <div class="products-inner">
                                                     <a class="product_img_link" href="wine-basics/6-printed-summer-dress.html"
                                                        title="Printed Summer Dress" itemprop="url">
                                                         <img class="replace-2x img-responsive"
                                                              src="../44-home_default/printed-summer-dress.jpg"
                                                              alt="Printed Summer Dress" title="Printed Summer Dress"
                                                              itemprop="image">
                                                     </a>
                                                     <a class="new-box" href="wine-basics/6-printed-summer-dress.html">
                                                         <span class="new-label">New</span>
                                                     </a>
                                                     <div class="hook-reviews">
                                                         <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                              itemprop="aggregateRating" class="comments_note">
                                                             <div class="star_content clearfix">
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star"></div>
                                                                 <div class="star "></div>
                                                             </div>
                                                         </div>

                                                     </div>


                                                 </div>

                                                 <div class="product-contents">
                                                     <h5 class="product-name"><a href="wine-basics/6-printed-summer-dress.html"
                                                                                 title="Printed Summer Dress">Printed Summer
                                                             Dress</a></h5>

                                                     <div class="price-box">

                                             <span class="price product-price">
                                                 £ 36.60									</span>


                                                     </div>
                                                     <div class="actions">

                                                         <div class="actions-inner">

                                                             <ul class="add-to-links">
                                                                 <li class="cart">
                                                                     <a class="button ajax_add_to_cart_button btn btn-default"
                                                                        href="ordere327.html?add=1&amp;id_product=6&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                        rel="nofollow" title="Add to cart" data-id-product="6">
                                                                         <span>Add to cart</span>

                                                                     </a>

                                                                 </li>
                                                                 <li>
                                                                     <a class="addToWishlist wishlistProd_6" href="#"
                                                                        data-wishlist="6" title="Add to Wishlist"
                                                                        onclick="WishlistCart('wishlist_block_list', 'add', '6', false, 1); return false;">
                                                                         <span>Wishlist</span>

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="add_to_compare"
                                                                        href="wine-basics/6-printed-summer-dress.html"
                                                                        data-id-product="6" title="Add to Compare">Compare

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="quick-view" title="Quick view"
                                                                        href="wine-basics/6-printed-summer-dress.html">

                                                                     </a>
                                                                 </li>
                                                             </ul>
                                                         </div>
                                                     </div>


                                                 </div>
                                             </div>

                                         </div>
                                     </div>
                                     <div class="owl-item" style="width: 300px;">
                                         <div class="item-feature">
                                             <div class="item-product">

                                                 <div class="products-inner">
                                                     <a class="product_img_link" href="wine-basics/7-printed-chiffon-dress.html"
                                                        title="Printed Chiffon Dress" itemprop="url">
                                                         <img class="replace-2x img-responsive"
                                                              src="../48-home_default/printed-chiffon-dress.jpg"
                                                              alt="Printed Chiffon Dress" title="Printed Chiffon Dress"
                                                              itemprop="image">
                                                     </a>
                                                     <a class="new-box" href="wine-basics/7-printed-chiffon-dress.html">
                                                         <span class="new-label">New</span>
                                                     </a>
                                                     <div class="hook-reviews">
                                                         <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                              itemprop="aggregateRating" class="comments_note">
                                                             <div class="star_content clearfix">
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star"></div>
                                                                 <div class="star "></div>
                                                             </div>
                                                         </div>

                                                     </div>


                                                 </div>

                                                 <div class="product-contents">
                                                     <h5 class="product-name"><a href="wine-basics/7-printed-chiffon-dress.html"
                                                                                 title="Printed Chiffon Dress">Printed Chiffon
                                                             Dress</a></h5>

                                                     <div class="price-box">

                                             <span class="price product-price">
                                                 £ 19.68									</span>

                                                         <span class="old-price product-price">
                                                     £ 24.60
                                                 </span>

                                                         <span class="price-percent-reduction">-20%</span>


                                                     </div>
                                                     <div class="actions">

                                                         <div class="actions-inner">

                                                             <ul class="add-to-links">
                                                                 <li class="cart">
                                                                     <a class="button ajax_add_to_cart_button btn btn-default"
                                                                        href="order0f19.html?add=1&amp;id_product=7&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                        rel="nofollow" title="Add to cart" data-id-product="7">
                                                                         <span>Add to cart</span>

                                                                     </a>

                                                                 </li>
                                                                 <li>
                                                                     <a class="addToWishlist wishlistProd_7" href="#"
                                                                        data-wishlist="7" title="Add to Wishlist"
                                                                        onclick="WishlistCart('wishlist_block_list', 'add', '7', false, 1); return false;">
                                                                         <span>Wishlist</span>

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="add_to_compare"
                                                                        href="wine-basics/7-printed-chiffon-dress.html"
                                                                        data-id-product="7" title="Add to Compare">Compare

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="quick-view" title="Quick view"
                                                                        href="wine-basics/7-printed-chiffon-dress.html">

                                                                     </a>
                                                                 </li>
                                                             </ul>
                                                         </div>
                                                     </div>


                                                 </div>
                                             </div>

                                         </div>
                                     </div>
                                     <div class="owl-item" style="width: 300px;">
                                         <div class="item-feature">
                                             <div class="item-product">

                                                 <div class="products-inner">
                                                     <a class="product_img_link" href="wine-basics/8-printed-dress.html"
                                                        title="Printed Dress" itemprop="url">
                                                         <img class="replace-2x img-responsive"
                                                              src="../52-home_default/printed-dress.jpg" alt="Printed Dress"
                                                              title="Printed Dress" itemprop="image">
                                                     </a>
                                                     <a class="new-box" href="wine-basics/8-printed-dress.html">
                                                         <span class="new-label">New</span>
                                                     </a>
                                                     <div class="hook-reviews">
                                                         <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                              itemprop="aggregateRating" class="comments_note">
                                                             <div class="star_content clearfix">
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star"></div>
                                                                 <div class="star "></div>
                                                             </div>
                                                         </div>

                                                     </div>


                                                 </div>

                                                 <div class="product-contents">
                                                     <h5 class="product-name"><a href="wine-basics/8-printed-dress.html"
                                                                                 title="Printed Dress">Printed Dress</a></h5>

                                                     <div class="price-box">

                                             <span class="price product-price">
                                                 £ 31.20									</span>


                                                     </div>
                                                     <div class="actions">

                                                         <div class="actions-inner">

                                                             <ul class="add-to-links">
                                                                 <li class="cart">
                                                                     <a class="button ajax_add_to_cart_button btn btn-default"
                                                                        href="orderc4c4.html?add=1&amp;id_product=8&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                        rel="nofollow" title="Add to cart" data-id-product="8">
                                                                         <span>Add to cart</span>

                                                                     </a>

                                                                 </li>
                                                                 <li>
                                                                     <a class="addToWishlist wishlistProd_8" href="#"
                                                                        data-wishlist="8" title="Add to Wishlist"
                                                                        onclick="WishlistCart('wishlist_block_list', 'add', '8', false, 1); return false;">
                                                                         <span>Wishlist</span>

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="add_to_compare"
                                                                        href="wine-basics/8-printed-dress.html"
                                                                        data-id-product="8" title="Add to Compare">Compare

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="quick-view" title="Quick view"
                                                                        href="wine-basics/8-printed-dress.html">

                                                                     </a>
                                                                 </li>
                                                             </ul>
                                                         </div>
                                                     </div>


                                                 </div>
                                             </div>

                                         </div>
                                     </div>
                                     <div class="owl-item" style="width: 300px;">
                                         <div class="item-feature">
                                             <div class="item-product">

                                                 <div class="products-inner">
                                                     <a class="product_img_link" href="wine-basics/9-printed-dress.html"
                                                        title="Printed Dress" itemprop="url">
                                                         <img class="replace-2x img-responsive"
                                                              src="../56-home_default/printed-dress.jpg" alt="Printed Dress"
                                                              title="Printed Dress" itemprop="image">
                                                     </a>
                                                     <a class="new-box" href="wine-basics/9-printed-dress.html">
                                                         <span class="new-label">New</span>
                                                     </a>
                                                     <div class="hook-reviews">
                                                         <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                              itemprop="aggregateRating" class="comments_note">
                                                             <div class="star_content clearfix">
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star"></div>
                                                                 <div class="star "></div>
                                                             </div>
                                                         </div>

                                                     </div>


                                                 </div>

                                                 <div class="product-contents">
                                                     <h5 class="product-name"><a href="wine-basics/9-printed-dress.html"
                                                                                 title="Printed Dress">Printed Dress</a></h5>

                                                     <div class="price-box">

                                             <span class="price product-price">
                                                 £ 61.19									</span>


                                                     </div>
                                                     <div class="actions">

                                                         <div class="actions-inner">

                                                             <ul class="add-to-links">
                                                                 <li class="cart">
                                                                     <a class="button ajax_add_to_cart_button btn btn-default"
                                                                        href="ordere04f.html?add=1&amp;id_product=9&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                        rel="nofollow" title="Add to cart" data-id-product="9">
                                                                         <span>Add to cart</span>

                                                                     </a>

                                                                 </li>
                                                                 <li>
                                                                     <a class="addToWishlist wishlistProd_9" href="#"
                                                                        data-wishlist="9" title="Add to Wishlist"
                                                                        onclick="WishlistCart('wishlist_block_list', 'add', '9', false, 1); return false;">
                                                                         <span>Wishlist</span>

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="add_to_compare"
                                                                        href="wine-basics/9-printed-dress.html"
                                                                        data-id-product="9" title="Add to Compare">Compare

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="quick-view" title="Quick view"
                                                                        href="wine-basics/9-printed-dress.html">

                                                                     </a>
                                                                 </li>
                                                             </ul>
                                                         </div>
                                                     </div>


                                                 </div>
                                             </div>

                                         </div>
                                     </div>
                                     <div class="owl-item" style="width: 300px;">
                                         <div class="item-feature">
                                             <div class="item-product">

                                                 <div class="products-inner">
                                                     <a class="product_img_link" href="wine-basics/10-printed-summer-dress.html"
                                                        title="Printed Summer Dress" itemprop="url">
                                                         <img class="replace-2x img-responsive"
                                                              src="../65-home_default/printed-summer-dress.jpg"
                                                              alt="Printed Summer Dress" title="Printed Summer Dress"
                                                              itemprop="image">
                                                     </a>
                                                     <a class="new-box" href="wine-basics/10-printed-summer-dress.html">
                                                         <span class="new-label">New</span>
                                                     </a>
                                                     <div class="hook-reviews">
                                                         <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                              itemprop="aggregateRating" class="comments_note">
                                                             <div class="star_content clearfix">
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star"></div>
                                                                 <div class="star "></div>
                                                             </div>
                                                         </div>

                                                     </div>


                                                 </div>

                                                 <div class="product-contents">
                                                     <h5 class="product-name"><a href="wine-basics/10-printed-summer-dress.html"
                                                                                 title="Printed Summer Dress">Printed Summer
                                                             Dress</a></h5>

                                                     <div class="price-box">

                                             <span class="price product-price">
                                                 £ 34.78									</span>

                                                         <span class="old-price product-price">
                                                     £ 36.61
                                                 </span>

                                                         <span class="price-percent-reduction">-5%</span>


                                                     </div>
                                                     <div class="actions">

                                                         <div class="actions-inner">

                                                             <ul class="add-to-links">
                                                                 <li class="cart">
                                                                     <a class="button ajax_add_to_cart_button btn btn-default"
                                                                        href="ordera5cc.html?add=1&amp;id_product=10&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                        rel="nofollow" title="Add to cart" data-id-product="10">
                                                                         <span>Add to cart</span>

                                                                     </a>

                                                                 </li>
                                                                 <li>
                                                                     <a class="addToWishlist wishlistProd_10" href="#"
                                                                        data-wishlist="10" title="Add to Wishlist"
                                                                        onclick="WishlistCart('wishlist_block_list', 'add', '10', false, 1); return false;">
                                                                         <span>Wishlist</span>

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="add_to_compare"
                                                                        href="wine-basics/10-printed-summer-dress.html"
                                                                        data-id-product="10" title="Add to Compare">Compare

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="quick-view" title="Quick view"
                                                                        href="wine-basics/10-printed-summer-dress.html">

                                                                     </a>
                                                                 </li>
                                                             </ul>
                                                         </div>
                                                     </div>


                                                 </div>
                                             </div>

                                         </div>
                                     </div>
                                     <div class="owl-item" style="width: 300px;">
                                         <div class="item-feature">
                                             <div class="item-product">

                                                 <div class="products-inner">
                                                     <a class="product_img_link" href="wine-basics/11-printed-summer-dress.html"
                                                        title="Printed Summer Dress" itemprop="url">
                                                         <img class="replace-2x img-responsive"
                                                              src="../60-home_default/printed-summer-dress.jpg"
                                                              alt="Printed Summer Dress" title="Printed Summer Dress"
                                                              itemprop="image">
                                                     </a>
                                                     <a class="new-box" href="wine-basics/11-printed-summer-dress.html">
                                                         <span class="new-label">New</span>
                                                     </a>
                                                     <div class="hook-reviews">
                                                         <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                              itemprop="aggregateRating" class="comments_note">
                                                             <div class="star_content clearfix">
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star"></div>
                                                                 <div class="star "></div>
                                                             </div>
                                                         </div>

                                                     </div>


                                                 </div>

                                                 <div class="product-contents">
                                                     <h5 class="product-name"><a href="wine-basics/11-printed-summer-dress.html"
                                                                                 title="Printed Summer Dress">Printed Summer
                                                             Dress</a></h5>

                                                     <div class="price-box">

                                             <span class="price product-price">
                                                 £ 36.60									</span>


                                                     </div>
                                                     <div class="actions">

                                                         <div class="actions-inner">

                                                             <ul class="add-to-links">
                                                                 <li class="cart">
                                                                     <a class="button ajax_add_to_cart_button btn btn-default"
                                                                        href="order37e9.html?add=1&amp;id_product=11&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                        rel="nofollow" title="Add to cart" data-id-product="11">
                                                                         <span>Add to cart</span>

                                                                     </a>

                                                                 </li>
                                                                 <li>
                                                                     <a class="addToWishlist wishlistProd_11" href="#"
                                                                        data-wishlist="11" title="Add to Wishlist"
                                                                        onclick="WishlistCart('wishlist_block_list', 'add', '11', false, 1); return false;">
                                                                         <span>Wishlist</span>

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="add_to_compare"
                                                                        href="wine-basics/11-printed-summer-dress.html"
                                                                        data-id-product="11" title="Add to Compare">Compare

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="quick-view" title="Quick view"
                                                                        href="wine-basics/11-printed-summer-dress.html">

                                                                     </a>
                                                                 </li>
                                                             </ul>
                                                         </div>
                                                     </div>


                                                 </div>
                                             </div>

                                         </div>
                                     </div>
                                     <div class="owl-item" style="width: 300px;">
                                         <div class="item-feature">
                                             <div class="item-product">

                                                 <div class="products-inner">
                                                     <a class="product_img_link" href="wine-basics/12-printed-chiffon-dress.html"
                                                        title="Printed Chiffon Dress" itemprop="url">
                                                         <img class="replace-2x img-responsive"
                                                              src="../64-home_default/printed-chiffon-dress.jpg"
                                                              alt="Printed Chiffon Dress" title="Printed Chiffon Dress"
                                                              itemprop="image">
                                                     </a>
                                                     <a class="new-box" href="wine-basics/12-printed-chiffon-dress.html">
                                                         <span class="new-label">New</span>
                                                     </a>
                                                     <div class="hook-reviews">
                                                         <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                              itemprop="aggregateRating" class="comments_note">
                                                             <div class="star_content clearfix">
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star "></div>
                                                                 <div class="star"></div>
                                                                 <div class="star "></div>
                                                             </div>
                                                         </div>

                                                     </div>


                                                 </div>

                                                 <div class="product-contents">
                                                     <h5 class="product-name"><a href="wine-basics/12-printed-chiffon-dress.html"
                                                                                 title="Printed Chiffon Dress">Printed Chiffon
                                                             Dress</a></h5>

                                                     <div class="price-box">

                                             <span class="price product-price">
                                                 £ 19.68									</span>

                                                         <span class="old-price product-price">
                                                     £ 24.60
                                                 </span>

                                                         <span class="price-percent-reduction">-20%</span>


                                                     </div>
                                                     <div class="actions">

                                                         <div class="actions-inner">

                                                             <ul class="add-to-links">
                                                                 <li class="cart">
                                                                     <a class="button ajax_add_to_cart_button btn btn-default"
                                                                        href="order9543.html?add=1&amp;id_product=12&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                        rel="nofollow" title="Add to cart" data-id-product="12">
                                                                         <span>Add to cart</span>

                                                                     </a>

                                                                 </li>
                                                                 <li>
                                                                     <a class="addToWishlist wishlistProd_12" href="#"
                                                                        data-wishlist="12" title="Add to Wishlist"
                                                                        onclick="WishlistCart('wishlist_block_list', 'add', '12', false, 1); return false;">
                                                                         <span>Wishlist</span>

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="add_to_compare"
                                                                        href="wine-basics/12-printed-chiffon-dress.html"
                                                                        data-id-product="12" title="Add to Compare">Compare

                                                                     </a>
                                                                 </li>
                                                                 <li>
                                                                     <a class="quick-view" title="Quick view"
                                                                        href="wine-basics/12-printed-chiffon-dress.html">

                                                                     </a>
                                                                 </li>
                                                             </ul>
                                                         </div>
                                                     </div>


                                                 </div>
                                             </div>

                                         </div>
                                     </div>--}}
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        $(document).ready(function() {

            var owl = $(".pos_newproducts");

            owl.owlCarousel({
                autoPlay : false,
                pagination :false,
                items : 3,
                slideSpeed: 1000,
                itemsDesktop : [1199,3],
                itemsDesktopSmall : [991,2],
                itemsTablet: [767,2],
                itemsMobile : [480,1]
            });
            // Custom Navigation Events
            $(".nextnewproduct").click(function(){
                owl.trigger('owl.next');
            })
            $(".prevnewproduct").click(function(){
                owl.trigger('owl.prev');
            })
        });
    </script>
    <div class="container">
        <div class="pos-feature-product">
            <div class="pos-title">
                <h2><span class="first-title">Featured</span><br><span class="last-title">Products</span></h2>
            </div>
            <div class="row pos-content">

                <div class="featureSlide owl-carousel owl-theme" style="display: block; opacity: 1;">
                    <div class="owl-wrapper-outer">
                        <div class="owl-wrapper" style="width: 7200px; left: 0px; display: block;">
                            @foreach($products as $product)
                                <div class="owl-item" style="width: 300px;">
                                    <div class="item-feature">
                                        <div class="item-product">

                                            <div class="products-inner">
                                                <a class="product_img_link"
                                                   href="wine-basics/1-faded-short-sleeves-tshirt.html"
                                                   title="Faded Short Sleeves T-shirt" itemprop="url">
                                                    <img class=" img-responsive"
                                                         src="{{$product->image}}" style="height:300px"
                                                         title="Faded Short Sleeves T-shirt" itemprop="image">
                                                </a>
                                                <a class="new-box">
                                                    <span class="new-label">New</span>
                                                </a>
                                            </div>
                                            <div class="product-contents">
                                                <h5 class="product-name"><a
                                                            href="wine-basics/1-faded-short-sleeves-tshirt.html"
                                                            title="{{$product->name}}">{{$product->name}}</a></h5>
                                                <div class="price-box">
									<span class="price product-price">
										<i class="fa fa-rupee"></i> {{$product->price}}</span>
                                                </div>
                                                <div class="actions">
                                                    <div class="actions-inner">
                                                        <ul class="add-to-links">
                                                            <li class="cart">
                                                                <a class="button ajax_add_to_cart_button btn btn-default"
                                                                   href="order7a0f.html?add=1&amp;id_product=1&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                   rel="nofollow" title="Add to cart"
                                                                   data-id-product="1">
                                                                    <span>Add to cart</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="addToWishlist wishlistProd_1" href="#"
                                                                   data-wishlist="1" title="Add to Wishlist"
                                                                   onclick="WishlistCart('wishlist_block_list', 'add', '1', false, 1); return false;">
                                                                    <span>Wishlist</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="add_to_compare"
                                                                   href="wine-basics/1-faded-short-sleeves-tshirt.html"
                                                                   data-id-product="1" title="Add to Compare">Compare
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="quick-view" title="Quick view"
                                                                   href="wine-basics/1-faded-short-sleeves-tshirt.html">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="owl-item" style="width: 300px;">
                                 <div class="item-feature">
                                     <div class="item-product">

                                         <div class="products-inner">
                                             <a class="product_img_link" href="wine-basics/2-blouse.html" title="Blouse"
                                                itemprop="url">
                                                 <img class="replace-2x img-responsive"
                                                      src="../28-home_default/blouse.jpg" alt="Blouse" title="Blouse"
                                                      itemprop="image">
                                             </a>
                                             <a class="new-box" href="wine-basics/2-blouse.html">
                                                 <span class="new-label">New</span>
                                             </a>
                                             <div class="hook-reviews">
                                                 <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                      itemprop="aggregateRating" class="comments_note">
                                                     <div class="star_content clearfix">
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star"></div>
                                                         <div class="star "></div>
                                                     </div>
                                                 </div>

                                             </div>


                                         </div>

                                         <div class="product-contents">
                                             <h5 class="product-name"><a href="wine-basics/2-blouse.html" title="Blouse">Blouse</a>
                                             </h5>

                                             <div class="price-box">

                                     <span class="price product-price">
                                         £ 32.40									</span>


                                             </div>
                                             <div class="actions">

                                                 <div class="actions-inner">

                                                     <ul class="add-to-links">
                                                         <li class="cart">
                                                             <a class="button ajax_add_to_cart_button btn btn-default"
                                                                href="ordera9c3.html?add=1&amp;id_product=2&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                rel="nofollow" title="Add to cart" data-id-product="2">
                                                                 <span>Add to cart</span>

                                                             </a>

                                                         </li>
                                                         <li>
                                                             <a class="addToWishlist wishlistProd_2" href="#"
                                                                data-wishlist="2" title="Add to Wishlist"
                                                                onclick="WishlistCart('wishlist_block_list', 'add', '2', false, 1); return false;">
                                                                 <span>Wishlist</span>

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="add_to_compare" href="wine-basics/2-blouse.html"
                                                                data-id-product="2" title="Add to Compare">Compare

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="quick-view" title="Quick view"
                                                                href="wine-basics/2-blouse.html">

                                                             </a>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>


                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <div class="owl-item" style="width: 300px;">
                                 <div class="item-feature">
                                     <div class="item-product">

                                         <div class="products-inner">
                                             <a class="product_img_link" href="wine-basics/3-printed-dress.html"
                                                title="Printed Dress" itemprop="url">
                                                 <img class="replace-2x img-responsive"
                                                      src="../32-home_default/printed-dress.jpg" alt="Printed Dress"
                                                      title="Printed Dress" itemprop="image">
                                             </a>
                                             <a class="new-box" href="wine-basics/3-printed-dress.html">
                                                 <span class="new-label">New</span>
                                             </a>
                                             <div class="hook-reviews">
                                                 <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                      itemprop="aggregateRating" class="comments_note">
                                                     <div class="star_content clearfix">
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star"></div>
                                                         <div class="star "></div>
                                                     </div>
                                                 </div>

                                             </div>


                                         </div>

                                         <div class="product-contents">
                                             <h5 class="product-name"><a href="wine-basics/3-printed-dress.html"
                                                                         title="Printed Dress">Printed Dress</a></h5>

                                             <div class="price-box">

                                     <span class="price product-price">
                                         £ 31.20									</span>


                                             </div>
                                             <div class="actions">

                                                 <div class="actions-inner">

                                                     <ul class="add-to-links">
                                                         <li class="cart">
                                                             <a class="button ajax_add_to_cart_button btn btn-default"
                                                                href="order8aa3.html?add=1&amp;id_product=3&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                rel="nofollow" title="Add to cart" data-id-product="3">
                                                                 <span>Add to cart</span>

                                                             </a>

                                                         </li>
                                                         <li>
                                                             <a class="addToWishlist wishlistProd_3" href="#"
                                                                data-wishlist="3" title="Add to Wishlist"
                                                                onclick="WishlistCart('wishlist_block_list', 'add', '3', false, 1); return false;">
                                                                 <span>Wishlist</span>

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="add_to_compare"
                                                                href="wine-basics/3-printed-dress.html"
                                                                data-id-product="3" title="Add to Compare">Compare

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="quick-view" title="Quick view"
                                                                href="wine-basics/3-printed-dress.html">

                                                             </a>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>


                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <div class="owl-item" style="width: 300px;">
                                 <div class="item-feature">
                                     <div class="item-product">

                                         <div class="products-inner">
                                             <a class="product_img_link" href="wine-basics/4-printed-dress.html"
                                                title="Printed Dress" itemprop="url">
                                                 <img class="replace-2x img-responsive"
                                                      src="../36-home_default/printed-dress.jpg" alt="Printed Dress"
                                                      title="Printed Dress" itemprop="image">
                                             </a>
                                             <a class="new-box" href="wine-basics/4-printed-dress.html">
                                                 <span class="new-label">New</span>
                                             </a>
                                             <div class="hook-reviews">
                                                 <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                      itemprop="aggregateRating" class="comments_note">
                                                     <div class="star_content clearfix">
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star"></div>
                                                         <div class="star "></div>
                                                     </div>
                                                 </div>

                                             </div>


                                         </div>

                                         <div class="product-contents">
                                             <h5 class="product-name"><a href="wine-basics/4-printed-dress.html"
                                                                         title="Printed Dress">Printed Dress</a></h5>

                                             <div class="price-box">

                                     <span class="price product-price">
                                         £ 61.19									</span>


                                             </div>
                                             <div class="actions">

                                                 <div class="actions-inner">

                                                     <ul class="add-to-links">
                                                         <li class="cart">
                                                             <a class="button ajax_add_to_cart_button btn btn-default"
                                                                href="orderc2ff.html?add=1&amp;id_product=4&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                rel="nofollow" title="Add to cart" data-id-product="4">
                                                                 <span>Add to cart</span>

                                                             </a>

                                                         </li>
                                                         <li>
                                                             <a class="addToWishlist wishlistProd_4" href="#"
                                                                data-wishlist="4" title="Add to Wishlist"
                                                                onclick="WishlistCart('wishlist_block_list', 'add', '4', false, 1); return false;">
                                                                 <span>Wishlist</span>

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="add_to_compare"
                                                                href="wine-basics/4-printed-dress.html"
                                                                data-id-product="4" title="Add to Compare">Compare

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="quick-view" title="Quick view"
                                                                href="wine-basics/4-printed-dress.html">

                                                             </a>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>


                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <div class="owl-item" style="width: 300px;">
                                 <div class="item-feature">
                                     <div class="item-product">

                                         <div class="products-inner">
                                             <a class="product_img_link" href="wine-basics/5-printed-summer-dress.html"
                                                title="Printed Summer Dress" itemprop="url">
                                                 <img class="replace-2x img-responsive"
                                                      src="../40-home_default/printed-summer-dress.jpg"
                                                      alt="Printed Summer Dress" title="Printed Summer Dress"
                                                      itemprop="image">
                                             </a>
                                             <a class="new-box" href="wine-basics/5-printed-summer-dress.html">
                                                 <span class="new-label">New</span>
                                             </a>
                                             <div class="hook-reviews">
                                                 <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                      itemprop="aggregateRating" class="comments_note">
                                                     <div class="star_content clearfix">
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star"></div>
                                                         <div class="star "></div>
                                                     </div>
                                                 </div>

                                             </div>


                                         </div>

                                         <div class="product-contents">
                                             <h5 class="product-name"><a href="wine-basics/5-printed-summer-dress.html"
                                                                         title="Printed Summer Dress">Printed Summer
                                                     Dress</a></h5>

                                             <div class="price-box">

                                     <span class="price product-price">
                                         £ 34.78									</span>

                                                 <span class="old-price product-price">
                                             £ 36.61
                                         </span>

                                                 <span class="price-percent-reduction">-5%</span>


                                             </div>
                                             <div class="actions">

                                                 <div class="actions-inner">

                                                     <ul class="add-to-links">
                                                         <li class="cart">
                                                             <a class="button ajax_add_to_cart_button btn btn-default"
                                                                href="order62d3.html?add=1&amp;id_product=5&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                rel="nofollow" title="Add to cart" data-id-product="5">
                                                                 <span>Add to cart</span>

                                                             </a>

                                                         </li>
                                                         <li>
                                                             <a class="addToWishlist wishlistProd_5" href="#"
                                                                data-wishlist="5" title="Add to Wishlist"
                                                                onclick="WishlistCart('wishlist_block_list', 'add', '5', false, 1); return false;">
                                                                 <span>Wishlist</span>

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="add_to_compare"
                                                                href="wine-basics/5-printed-summer-dress.html"
                                                                data-id-product="5" title="Add to Compare">Compare

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="quick-view" title="Quick view"
                                                                href="wine-basics/5-printed-summer-dress.html">

                                                             </a>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>


                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <div class="owl-item" style="width: 300px;">
                                 <div class="item-feature">
                                     <div class="item-product">

                                         <div class="products-inner">
                                             <a class="product_img_link" href="wine-basics/6-printed-summer-dress.html"
                                                title="Printed Summer Dress" itemprop="url">
                                                 <img class="replace-2x img-responsive"
                                                      src="../44-home_default/printed-summer-dress.jpg"
                                                      alt="Printed Summer Dress" title="Printed Summer Dress"
                                                      itemprop="image">
                                             </a>
                                             <a class="new-box" href="wine-basics/6-printed-summer-dress.html">
                                                 <span class="new-label">New</span>
                                             </a>
                                             <div class="hook-reviews">
                                                 <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                      itemprop="aggregateRating" class="comments_note">
                                                     <div class="star_content clearfix">
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star"></div>
                                                         <div class="star "></div>
                                                     </div>
                                                 </div>

                                             </div>


                                         </div>

                                         <div class="product-contents">
                                             <h5 class="product-name"><a href="wine-basics/6-printed-summer-dress.html"
                                                                         title="Printed Summer Dress">Printed Summer
                                                     Dress</a></h5>

                                             <div class="price-box">

                                     <span class="price product-price">
                                         £ 36.60									</span>


                                             </div>
                                             <div class="actions">

                                                 <div class="actions-inner">

                                                     <ul class="add-to-links">
                                                         <li class="cart">
                                                             <a class="button ajax_add_to_cart_button btn btn-default"
                                                                href="ordere327.html?add=1&amp;id_product=6&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                rel="nofollow" title="Add to cart" data-id-product="6">
                                                                 <span>Add to cart</span>

                                                             </a>

                                                         </li>
                                                         <li>
                                                             <a class="addToWishlist wishlistProd_6" href="#"
                                                                data-wishlist="6" title="Add to Wishlist"
                                                                onclick="WishlistCart('wishlist_block_list', 'add', '6', false, 1); return false;">
                                                                 <span>Wishlist</span>

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="add_to_compare"
                                                                href="wine-basics/6-printed-summer-dress.html"
                                                                data-id-product="6" title="Add to Compare">Compare

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="quick-view" title="Quick view"
                                                                href="wine-basics/6-printed-summer-dress.html">

                                                             </a>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>


                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <div class="owl-item" style="width: 300px;">
                                 <div class="item-feature">
                                     <div class="item-product">

                                         <div class="products-inner">
                                             <a class="product_img_link" href="wine-basics/7-printed-chiffon-dress.html"
                                                title="Printed Chiffon Dress" itemprop="url">
                                                 <img class="replace-2x img-responsive"
                                                      src="../48-home_default/printed-chiffon-dress.jpg"
                                                      alt="Printed Chiffon Dress" title="Printed Chiffon Dress"
                                                      itemprop="image">
                                             </a>
                                             <a class="new-box" href="wine-basics/7-printed-chiffon-dress.html">
                                                 <span class="new-label">New</span>
                                             </a>
                                             <div class="hook-reviews">
                                                 <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                      itemprop="aggregateRating" class="comments_note">
                                                     <div class="star_content clearfix">
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star"></div>
                                                         <div class="star "></div>
                                                     </div>
                                                 </div>

                                             </div>


                                         </div>

                                         <div class="product-contents">
                                             <h5 class="product-name"><a href="wine-basics/7-printed-chiffon-dress.html"
                                                                         title="Printed Chiffon Dress">Printed Chiffon
                                                     Dress</a></h5>

                                             <div class="price-box">

                                     <span class="price product-price">
                                         £ 19.68									</span>

                                                 <span class="old-price product-price">
                                             £ 24.60
                                         </span>

                                                 <span class="price-percent-reduction">-20%</span>


                                             </div>
                                             <div class="actions">

                                                 <div class="actions-inner">

                                                     <ul class="add-to-links">
                                                         <li class="cart">
                                                             <a class="button ajax_add_to_cart_button btn btn-default"
                                                                href="order0f19.html?add=1&amp;id_product=7&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                rel="nofollow" title="Add to cart" data-id-product="7">
                                                                 <span>Add to cart</span>

                                                             </a>

                                                         </li>
                                                         <li>
                                                             <a class="addToWishlist wishlistProd_7" href="#"
                                                                data-wishlist="7" title="Add to Wishlist"
                                                                onclick="WishlistCart('wishlist_block_list', 'add', '7', false, 1); return false;">
                                                                 <span>Wishlist</span>

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="add_to_compare"
                                                                href="wine-basics/7-printed-chiffon-dress.html"
                                                                data-id-product="7" title="Add to Compare">Compare

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="quick-view" title="Quick view"
                                                                href="wine-basics/7-printed-chiffon-dress.html">

                                                             </a>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>


                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <div class="owl-item" style="width: 300px;">
                                 <div class="item-feature">
                                     <div class="item-product">

                                         <div class="products-inner">
                                             <a class="product_img_link" href="wine-basics/8-printed-dress.html"
                                                title="Printed Dress" itemprop="url">
                                                 <img class="replace-2x img-responsive"
                                                      src="../52-home_default/printed-dress.jpg" alt="Printed Dress"
                                                      title="Printed Dress" itemprop="image">
                                             </a>
                                             <a class="new-box" href="wine-basics/8-printed-dress.html">
                                                 <span class="new-label">New</span>
                                             </a>
                                             <div class="hook-reviews">
                                                 <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                      itemprop="aggregateRating" class="comments_note">
                                                     <div class="star_content clearfix">
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star"></div>
                                                         <div class="star "></div>
                                                     </div>
                                                 </div>

                                             </div>


                                         </div>

                                         <div class="product-contents">
                                             <h5 class="product-name"><a href="wine-basics/8-printed-dress.html"
                                                                         title="Printed Dress">Printed Dress</a></h5>

                                             <div class="price-box">

                                     <span class="price product-price">
                                         £ 31.20									</span>


                                             </div>
                                             <div class="actions">

                                                 <div class="actions-inner">

                                                     <ul class="add-to-links">
                                                         <li class="cart">
                                                             <a class="button ajax_add_to_cart_button btn btn-default"
                                                                href="orderc4c4.html?add=1&amp;id_product=8&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                rel="nofollow" title="Add to cart" data-id-product="8">
                                                                 <span>Add to cart</span>

                                                             </a>

                                                         </li>
                                                         <li>
                                                             <a class="addToWishlist wishlistProd_8" href="#"
                                                                data-wishlist="8" title="Add to Wishlist"
                                                                onclick="WishlistCart('wishlist_block_list', 'add', '8', false, 1); return false;">
                                                                 <span>Wishlist</span>

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="add_to_compare"
                                                                href="wine-basics/8-printed-dress.html"
                                                                data-id-product="8" title="Add to Compare">Compare

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="quick-view" title="Quick view"
                                                                href="wine-basics/8-printed-dress.html">

                                                             </a>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>


                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <div class="owl-item" style="width: 300px;">
                                 <div class="item-feature">
                                     <div class="item-product">

                                         <div class="products-inner">
                                             <a class="product_img_link" href="wine-basics/9-printed-dress.html"
                                                title="Printed Dress" itemprop="url">
                                                 <img class="replace-2x img-responsive"
                                                      src="../56-home_default/printed-dress.jpg" alt="Printed Dress"
                                                      title="Printed Dress" itemprop="image">
                                             </a>
                                             <a class="new-box" href="wine-basics/9-printed-dress.html">
                                                 <span class="new-label">New</span>
                                             </a>
                                             <div class="hook-reviews">
                                                 <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                      itemprop="aggregateRating" class="comments_note">
                                                     <div class="star_content clearfix">
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star"></div>
                                                         <div class="star "></div>
                                                     </div>
                                                 </div>

                                             </div>


                                         </div>

                                         <div class="product-contents">
                                             <h5 class="product-name"><a href="wine-basics/9-printed-dress.html"
                                                                         title="Printed Dress">Printed Dress</a></h5>

                                             <div class="price-box">

                                     <span class="price product-price">
                                         £ 61.19									</span>


                                             </div>
                                             <div class="actions">

                                                 <div class="actions-inner">

                                                     <ul class="add-to-links">
                                                         <li class="cart">
                                                             <a class="button ajax_add_to_cart_button btn btn-default"
                                                                href="ordere04f.html?add=1&amp;id_product=9&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                rel="nofollow" title="Add to cart" data-id-product="9">
                                                                 <span>Add to cart</span>

                                                             </a>

                                                         </li>
                                                         <li>
                                                             <a class="addToWishlist wishlistProd_9" href="#"
                                                                data-wishlist="9" title="Add to Wishlist"
                                                                onclick="WishlistCart('wishlist_block_list', 'add', '9', false, 1); return false;">
                                                                 <span>Wishlist</span>

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="add_to_compare"
                                                                href="wine-basics/9-printed-dress.html"
                                                                data-id-product="9" title="Add to Compare">Compare

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="quick-view" title="Quick view"
                                                                href="wine-basics/9-printed-dress.html">

                                                             </a>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>


                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <div class="owl-item" style="width: 300px;">
                                 <div class="item-feature">
                                     <div class="item-product">

                                         <div class="products-inner">
                                             <a class="product_img_link" href="wine-basics/10-printed-summer-dress.html"
                                                title="Printed Summer Dress" itemprop="url">
                                                 <img class="replace-2x img-responsive"
                                                      src="../65-home_default/printed-summer-dress.jpg"
                                                      alt="Printed Summer Dress" title="Printed Summer Dress"
                                                      itemprop="image">
                                             </a>
                                             <a class="new-box" href="wine-basics/10-printed-summer-dress.html">
                                                 <span class="new-label">New</span>
                                             </a>
                                             <div class="hook-reviews">
                                                 <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                      itemprop="aggregateRating" class="comments_note">
                                                     <div class="star_content clearfix">
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star"></div>
                                                         <div class="star "></div>
                                                     </div>
                                                 </div>

                                             </div>


                                         </div>

                                         <div class="product-contents">
                                             <h5 class="product-name"><a href="wine-basics/10-printed-summer-dress.html"
                                                                         title="Printed Summer Dress">Printed Summer
                                                     Dress</a></h5>

                                             <div class="price-box">

                                     <span class="price product-price">
                                         £ 34.78									</span>

                                                 <span class="old-price product-price">
                                             £ 36.61
                                         </span>

                                                 <span class="price-percent-reduction">-5%</span>


                                             </div>
                                             <div class="actions">

                                                 <div class="actions-inner">

                                                     <ul class="add-to-links">
                                                         <li class="cart">
                                                             <a class="button ajax_add_to_cart_button btn btn-default"
                                                                href="ordera5cc.html?add=1&amp;id_product=10&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                rel="nofollow" title="Add to cart" data-id-product="10">
                                                                 <span>Add to cart</span>

                                                             </a>

                                                         </li>
                                                         <li>
                                                             <a class="addToWishlist wishlistProd_10" href="#"
                                                                data-wishlist="10" title="Add to Wishlist"
                                                                onclick="WishlistCart('wishlist_block_list', 'add', '10', false, 1); return false;">
                                                                 <span>Wishlist</span>

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="add_to_compare"
                                                                href="wine-basics/10-printed-summer-dress.html"
                                                                data-id-product="10" title="Add to Compare">Compare

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="quick-view" title="Quick view"
                                                                href="wine-basics/10-printed-summer-dress.html">

                                                             </a>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>


                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <div class="owl-item" style="width: 300px;">
                                 <div class="item-feature">
                                     <div class="item-product">

                                         <div class="products-inner">
                                             <a class="product_img_link" href="wine-basics/11-printed-summer-dress.html"
                                                title="Printed Summer Dress" itemprop="url">
                                                 <img class="replace-2x img-responsive"
                                                      src="../60-home_default/printed-summer-dress.jpg"
                                                      alt="Printed Summer Dress" title="Printed Summer Dress"
                                                      itemprop="image">
                                             </a>
                                             <a class="new-box" href="wine-basics/11-printed-summer-dress.html">
                                                 <span class="new-label">New</span>
                                             </a>
                                             <div class="hook-reviews">
                                                 <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                      itemprop="aggregateRating" class="comments_note">
                                                     <div class="star_content clearfix">
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star"></div>
                                                         <div class="star "></div>
                                                     </div>
                                                 </div>

                                             </div>


                                         </div>

                                         <div class="product-contents">
                                             <h5 class="product-name"><a href="wine-basics/11-printed-summer-dress.html"
                                                                         title="Printed Summer Dress">Printed Summer
                                                     Dress</a></h5>

                                             <div class="price-box">

                                     <span class="price product-price">
                                         £ 36.60									</span>


                                             </div>
                                             <div class="actions">

                                                 <div class="actions-inner">

                                                     <ul class="add-to-links">
                                                         <li class="cart">
                                                             <a class="button ajax_add_to_cart_button btn btn-default"
                                                                href="order37e9.html?add=1&amp;id_product=11&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                rel="nofollow" title="Add to cart" data-id-product="11">
                                                                 <span>Add to cart</span>

                                                             </a>

                                                         </li>
                                                         <li>
                                                             <a class="addToWishlist wishlistProd_11" href="#"
                                                                data-wishlist="11" title="Add to Wishlist"
                                                                onclick="WishlistCart('wishlist_block_list', 'add', '11', false, 1); return false;">
                                                                 <span>Wishlist</span>

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="add_to_compare"
                                                                href="wine-basics/11-printed-summer-dress.html"
                                                                data-id-product="11" title="Add to Compare">Compare

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="quick-view" title="Quick view"
                                                                href="wine-basics/11-printed-summer-dress.html">

                                                             </a>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>


                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <div class="owl-item" style="width: 300px;">
                                 <div class="item-feature">
                                     <div class="item-product">

                                         <div class="products-inner">
                                             <a class="product_img_link" href="wine-basics/12-printed-chiffon-dress.html"
                                                title="Printed Chiffon Dress" itemprop="url">
                                                 <img class="replace-2x img-responsive"
                                                      src="../64-home_default/printed-chiffon-dress.jpg"
                                                      alt="Printed Chiffon Dress" title="Printed Chiffon Dress"
                                                      itemprop="image">
                                             </a>
                                             <a class="new-box" href="wine-basics/12-printed-chiffon-dress.html">
                                                 <span class="new-label">New</span>
                                             </a>
                                             <div class="hook-reviews">
                                                 <div itemtype="http://schema.org/AggregateRating" itemscope=""
                                                      itemprop="aggregateRating" class="comments_note">
                                                     <div class="star_content clearfix">
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star "></div>
                                                         <div class="star"></div>
                                                         <div class="star "></div>
                                                     </div>
                                                 </div>

                                             </div>


                                         </div>

                                         <div class="product-contents">
                                             <h5 class="product-name"><a href="wine-basics/12-printed-chiffon-dress.html"
                                                                         title="Printed Chiffon Dress">Printed Chiffon
                                                     Dress</a></h5>

                                             <div class="price-box">

                                     <span class="price product-price">
                                         £ 19.68									</span>

                                                 <span class="old-price product-price">
                                             £ 24.60
                                         </span>

                                                 <span class="price-percent-reduction">-20%</span>


                                             </div>
                                             <div class="actions">

                                                 <div class="actions-inner">

                                                     <ul class="add-to-links">
                                                         <li class="cart">
                                                             <a class="button ajax_add_to_cart_button btn btn-default"
                                                                href="order9543.html?add=1&amp;id_product=12&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                                                rel="nofollow" title="Add to cart" data-id-product="12">
                                                                 <span>Add to cart</span>

                                                             </a>

                                                         </li>
                                                         <li>
                                                             <a class="addToWishlist wishlistProd_12" href="#"
                                                                data-wishlist="12" title="Add to Wishlist"
                                                                onclick="WishlistCart('wishlist_block_list', 'add', '12', false, 1); return false;">
                                                                 <span>Wishlist</span>

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="add_to_compare"
                                                                href="wine-basics/12-printed-chiffon-dress.html"
                                                                data-id-product="12" title="Add to Compare">Compare

                                                             </a>
                                                         </li>
                                                         <li>
                                                             <a class="quick-view" title="Quick view"
                                                                href="wine-basics/12-printed-chiffon-dress.html">

                                                             </a>
                                                         </li>
                                                     </ul>
                                                 </div>
                                             </div>


                                         </div>
                                     </div>

                                 </div>
                             </div>--}}
                        </div>
                    </div>
                </div>
                <div class="boxprevnext">
                    <a class="prev prevfure"><i class="icon-long-arrow-left"></i></a>
                    <a class="next nextfure"><i class="icon-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script >
        $(document).ready(function () {
            var owl = $(".featureSlide");
            owl.owlCarousel({
                items: 10,
                slideSpeed: 1000,
                pagination: false,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [991, 3],
                itemsTablet: [767, 2],
                itemsMobile: [480, 1],
                autoPlay: false,
            });

            // Custom Navigation Events
            $(".nextfure").click(function () {
                owl.trigger('owl.next');
            })
            $(".prevfure").click(function () {
                owl.trigger('owl.prev');
            })
        });

    </script>

    <div class="banner-home">
        <div class="banner-box"><a href="#"><img src="/img/cms/5_1.jpg" alt=""></a></div>
    </div>
    <div class="container">
        <div class="block-smartblog">
            <div class="pos-title">
                <h2><a href="smartblog.html"><span class="first-title">Our Blog</span><br><span class="last-title">New Posts</span></a>
                </h2>
            </div>
            <div class="row pos-content">
                <div class="sdsblog-box-content owl-carousel owl-theme" style="display: block; opacity: 1;">

                    <div class="owl-wrapper-outer">
                        <div class="owl-wrapper" style="width: 3200px; left: 0px; display: block;">
                            <div class="owl-item" style="width: 400px;">
                                <div class="sds_blog_post">
                                    <div class="item-blog">
                                        <div class="news_module_image_holder">
                                            <a href="smartblog/4_share-the-love-for-prestashop-1-6.html"><img
                                                        alt="Share the Love for PrestaShop 1.6" class="feat_img_small"
                                                        src="../modules/smartblog/images/4.jpg"></a>
                                        </div>
                                        <div class="blog_content">

                                            <h4 class="sds_post_title"><a
                                                        href="smartblog/4_share-the-love-for-prestashop-1-6.html">Share
                                                    the Love for PrestaShop 1.6</a></h4>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been...
                                            </p>

                                            <span class="date-smart">2016-03-07 01:59:03</span>
                                            <a href="smartblog/4_share-the-love-for-prestashop-1-6.html" class="r_more"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 400px;">
                                <div class="sds_blog_post">
                                    <div class="item-blog">
                                        <div class="news_module_image_holder">
                                            <a href="smartblog/3_answer-to-your-question-about-prestashop-1-6.html"><img
                                                        alt="Answers to your Questions about PrestaShop 1.6"
                                                        class="feat_img_small" src="../modules/smartblog/images/3.jpg"></a>
                                        </div>
                                        <div class="blog_content">

                                            <h4 class="sds_post_title"><a
                                                        href="smartblog/3_answer-to-your-question-about-prestashop-1-6.html">Answers
                                                    to your Questions about...</a></h4>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been...
                                            </p>

                                            <span class="date-smart">2016-03-07 01:59:03</span>
                                            <a href="smartblog/3_answer-to-your-question-about-prestashop-1-6.html"
                                               class="r_more"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 400px;">
                                <div class="sds_blog_post">
                                    <div class="item-blog">
                                        <div class="news_module_image_holder">
                                            <a href="smartblog/2_what-is-bootstrap.html"><img
                                                        alt="What is Bootstrap? – The History and the Hype"
                                                        class="feat_img_small" src="../modules/smartblog/images/2.jpg"></a>
                                        </div>
                                        <div class="blog_content">

                                            <h4 class="sds_post_title"><a href="smartblog/2_what-is-bootstrap.html">What
                                                    is Bootstrap? – The History...</a></h4>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been...
                                            </p>

                                            <span class="date-smart">2016-03-07 01:59:03</span>
                                            <a href="smartblog/2_what-is-bootstrap.html"
                                               class="r_more"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 400px;">
                                <div class="sds_blog_post">
                                    <div class="item-blog">
                                        <div class="news_module_image_holder">
                                            <a href="smartblog/1_from-now-we-are-certified-web-agency.html"><img
                                                        alt="From Now we are certified web agency"
                                                        class="feat_img_small" src="../modules/smartblog/images/1.jpg"></a>
                                        </div>
                                        <div class="blog_content">

                                            <h4 class="sds_post_title"><a
                                                        href="smartblog/1_from-now-we-are-certified-web-agency.html">From
                                                    Now we are certified web...</a></h4>
                                            <p>
                                                Smartdatasoft is an offshore web development company located in
                                                Bangladesh. We are serving this...
                                            </p>

                                            <span class="date-smart">2016-03-07 01:59:03</span>
                                            <a href="smartblog/1_from-now-we-are-certified-web-agency.html"
                                               class="r_more"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="boxprevnext">
                    <a class="prev prevblog"><i class="icon-long-arrow-left"></i></a>
                    <a class="next nextblog"><i class="icon-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <script>


        $(document).ready(function () {

            var owl = $(".sdsblog-box-content");

            owl.owlCarousel({
                autoPlay: false,
                pagination: false,
                items: 3,
                slideSpeed: 1000,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [991, 2],
                itemsTablet: [767, 2],
                itemsMobile: [480, 1]
            });
            // Custom Navigation Events
            $(".nextblog").click(function () {
                owl.trigger('owl.next');
            })
            $(".prevblog").click(function () {
                owl.trigger('owl.prev');
            })
        });
    </script>

@endsection