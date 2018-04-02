@extends ("layouts.master")

@section("content")
    <div class=" pos_bannerslide">

        <div class="pos-slideshow">
            <div class="flexslider ma-nivoslider">
                <div class="pos-loading" style="display: none;"></div>

                <div id="pos-slideshow-home" class="slides ">
                    <img src="/img/blockslideshow/1.jpg" data-thumb="/img/blockslideshow/1.jpg" alt=""/>
                </div>
            </div>
        </div>
        <hr>

        <div class="banner-home">
            <div class="container">
                <div class="row">
                    <div class=" col-md-8 col-sm-8 col-xs-12">
                        <div class="banner-box"><a href="#" data-lightbox="image-1"><img src="/img/cms/1_1.jpg" alt=""></a>
                        </div>
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
                                                    <a href="#" title=""
                                                       class="content_img clearfix">
                                                        <img src="../40-home_default/printed-summer-dress.jpg"
                                                             class="img-responsive" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-contents">

                                                    <h5 class="product-name">
                                                        <a href="/product/{{$beer['name']}}" title="">
                                                           {{$beer['name']}}<br>
                                                        </a>
                                                    </h5>

                                                    <div class="price-box" style="margin-bottom: 10px">
                                                        <span class="price product-price"><i class="fa fa-rupee"></i> {{$beer['price']}}</span>
                                                        <span class="price-percent-reduction">-5%</span>
                                                    </div>

                                                    <p class="product-desc" itemprop="description" style="overflow: auto;height: 200px;">
                                                        {{$beer['description']}}
                                                    </p>
                                                    <div class="cart">
                                                        <a class="button ajax_add_to_cart_button btn btn-default"
                                                           onclick="addToCart({{$beer}})"
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
                                                    <a href="#" title=""
                                                       class="content_img clearfix">
                                                        <img src="../65-home_default/printed-summer-dress.jpg"
                                                             class="img-responsive" alt="">
                                                    </a>

                                                </div>
                                                <div class="product-contents">
                                                    <div class="countdown">

                                                    </div>
                                                    <h5 class="product-name">
                                                        <a href="#" title="">
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
                                                        <div itemprop="aggregateRating" class="comments_note">
                                                        </div>

                                                    </div>
                                                    <p class="product-desc" itemprop="description">
                                                        Long printed dress with thin adjustable straps. V-neckline and
                                                        wiring under the bust with ruffles at the...
                                                    </p>
                                                    <div class="cart">
                                                        <a class="button ajax_add_to_cart_button btn btn-default"
                                                           href="/products/"
                                                           rel="nofollow" title="Add to cart" data-id-product="10">
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

                    </div>
                </div>
            </div>

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
                                            @for($i = 0 ; $i < 2;$i++)
                                                <div class="item-product">
                                                    <div class="products-inner">
                                                        <a href="{{$products[$i]->image}}" data-lightbox="product">
                                                            <img src="{{$products[$i]->image}}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-contents">

                                                        <h5 class="product-name">
                                                            <a href="/product/{{$products[$i]->name}}" title="">
                                                                {{$products[$i]->name}}<br>
                                                            </a>
                                                        </h5>

                                                        <div class="hook-reviews">
                                                            <div itemtype="http://schema.org/AggregateRating"
                                                                 itemscope=""
                                                                 itemprop="aggregateRating" class="comments_note">
                                                                <div class="star_content clearfix">
                                                                    <div class=" "></div>
                                                                    <div class=" "></div>
                                                                    <div class=" "></div>
                                                                    <div class=""></div>
                                                                    <div class=" "></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="price-box">

										<span class="price product-price">
										<i class="fa fa-rupee"></i>{{$products[$i]->price}}	</span>

                                                        </div>
                                                        <p class="product-desc" itemprop="description"
                                                           style="overflow: auto;height: 100px;">
                                                            {{$products[$i]->description}}
                                                        </p>
                                                        <div class="actions">
                                                            <div class="actions-inner">
                                                                <ul class="add-to-links">
                                                                    <li class="cart">
                                                                        <a class="button ajax_add_to_cart_button btn btn-default"
                                                                           onclick="addToCart({{$products[$i]->toJson()}})"
                                                                           rel="nofollow" title="Add to cart"
                                                                           data-id-product="2">
                                                                            <span>Add to cart</span>
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endfor

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

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

                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class=" row pos-content">
                        <div class="pos_newproducts  owl-carousel owl-theme" style="display: block; opacity: 1;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 7200px; left: 0px; display: block;">
                                    @forelse($specialCollections as $specialCollection)
                                        <div class="owl-item" style="width: 300px;">
                                            <div class="item-feature">
                                                <div class="item-product">

                                                    <div class="products-inner">
                                                        <a class="product_img_link"
                                                           href="/product/{{$specialCollection->name}}"
                                                           title="Faded Short Sleeves T-shirt" itemprop="url">
                                                            <img class=" img-responsive"
                                                                 src="{{$specialCollection->image}}"
                                                                 style="height:300px"
                                                                 title="{{$specialCollection->name}}" itemprop="image">
                                                        </a>
                                                    </div>
                                                    <div class="product-contents">
                                                        <h5 class="product-name"><a
                                                                    href="/product/{{$specialCollection->name}}"
                                                                    title="{{$specialCollection->name}}">{{$specialCollection->name}}</a>
                                                        </h5>
                                                        <div class="price-box">
									<span class="price product-price">
										<i class="fa fa-rupee"></i> {{$specialCollection->price}}</span>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="actions-inner">
                                                                <ul class="add-to-links">
                                                                    <li class="cart">
                                                                        <a class="button ajax_add_to_cart_button btn btn-default"
                                                                           onclick="addToCart({{$specialCollection->toJson()}})"
                                                                           rel="nofollow" title="Add to cart"
                                                                           data-id-product="1">
                                                                            <span>Add to cart</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        no item sorry
                                    @endforelse
                                    <div class="clearfix"></div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="pos-feature-product">
            <div class="pos-title">
                <h2><span class="first-title">Featured</span><br><span class="last-title">Products</span></h2>
            </div>
            <div class="row pos-content">

                <div class="featureSlide owl-carousel owl-theme" style="display: block; opacity: 1;">
                    <div class="owl-wrapper-outer">
                        <div class="owl-wrapper" style="width: 7200px; left: 0px; display: block;">
                            @forelse($products as $product)
                                <div class="owl-item" style="width: 300px;">
                                    <div class="item-feature">
                                        <div class="item-product">

                                            <div class="products-inner">
                                                <a class="product_img_link"
                                                   href="/product/{{$product->name}}"
                                                   title="Faded Short Sleeves T-shirt" itemprop="url">
                                                    <img class=" img-responsive"
                                                         src="{{$product->image}}" style="height:300px"
                                                         title="Faded Short Sleeves T-shirt" itemprop="image">
                                                </a>

                                            </div>
                                            <div class="product-contents">
                                                <h5 class="product-name"><a
                                                            href="/product/{{$product->name}}"
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
                                                                   onclick="addToCart({{$product->toJson()}})"
                                                                   rel="nofollow" title="Add to cart"
                                                                   data-id-product="1">
                                                                    <span>Add to cart</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                sorry no item
                            @endforelse
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="banner-home">
        <div class="banner-box"><a href="#"><img src="/img/cms/5_1.jpg" alt=""></a></div>
    </div>
    <div class="container">
        <div class="block-smartblog">
            <div class="pos-title">
                <h2><a href="#"><span class="first-title">Our Blog</span><br><span
                                class="last-title">New Posts</span></a>
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
                                            <a href="#"><img
                                                        alt="Share the Love for PrestaShop 1.6" class="feat_img_small"
                                                        src="../modules/smartblog/images/4.jpg"></a>
                                        </div>
                                        <div class="blog_content">

                                            <h4 class="sds_post_title"><a
                                                        href="#">Share
                                                    the Love for PrestaShop 1.6</a></h4>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been...
                                            </p>

                                            <span class="date-smart">2016-03-07 01:59:03</span>
                                            <a href="#" class="r_more"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 400px;">
                                <div class="sds_blog_post">
                                    <div class="item-blog">
                                        <div class="news_module_image_holder">
                                            <a href="#"><img
                                                        alt="Answers to your Questions about PrestaShop 1.6"
                                                        class="feat_img_small" src="../modules/smartblog/images/3.jpg"></a>
                                        </div>
                                        <div class="blog_content">

                                            <h4 class="sds_post_title"><a
                                                        href="#">Answers
                                                    to your Questions about...</a></h4>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been...
                                            </p>

                                            <span class="date-smart">2016-03-07 01:59:03</span>
                                            <a href="#"
                                               class="r_more"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 400px;">
                                <div class="sds_blog_post">
                                    <div class="item-blog">
                                        <div class="news_module_image_holder">
                                            <a href="#"><img
                                                        alt="What is Bootstrap? – The History and the Hype"
                                                        class="feat_img_small" src="../modules/smartblog/images/2.jpg"></a>
                                        </div>
                                        <div class="blog_content">

                                            <h4 class="sds_post_title"><a href="#">What
                                                    is Bootstrap? – The History...</a></h4>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been...
                                            </p>

                                            <span class="date-smart">2016-03-07 01:59:03</span>
                                            <a href="#"
                                               class="r_more"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 400px;">
                                <div class="sds_blog_post">
                                    <div class="item-blog">
                                        <div class="news_module_image_holder">
                                            <a href="#"><img
                                                        alt="From Now we are certified web agency"
                                                        class="feat_img_small" src="../modules/smartblog/images/1.jpg"></a>
                                        </div>
                                        <div class="blog_content">

                                            <h4 class="sds_post_title"><a
                                                        href="#">From
                                                    Now we are certified web...</a></h4>
                                            <p>
                                                Smartdatasoft is an offshore web development company located in
                                                Bangladesh. We are serving this...
                                            </p>

                                            <span class="date-smart">2016-03-07 01:59:03</span>
                                            <a href="#"
                                               class="r_more"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>


@endsection