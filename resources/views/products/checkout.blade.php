@extends("layouts.master")

@section("content")
    <div class="pos_breadcrumb" style="background: #f3f3f3">

        <div class="container">
            <!-- Breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="http://demo.posthemes.com/pos_fobe/" title="Return to Home"><i
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
                    <li class="step_current  first">
                        <span><em>01.</em> Summary</span>
                    </li>
                    <li class="step_todo second">
                        <span><em>02.</em> Sign in</span>
                    </li>
                    <li class="step_todo third">
                        <span><em>03.</em> Address</span>
                    </li>
                    <li class="step_todo four">
                        <span><em>04.</em> Shipping</span>
                    </li>
                    <li id="step_end" class="step_todo last">
                        <span><em>05.</em> Payment</span>
                    </li>
                </ul>
                <!-- /Steps -->
                <div id="order-detail-content" class="table_block table-responsive">
                    <table id="cart_summary" class="table table-bordered stock-management-on">
                        <thead>
                        <tr>
                            <th class="cart_product first_item">Product</th>
                            <th class="cart_description item">Description</th>
                            <th class="cart_unit item text-right">Unit price</th>
                            <th class="cart_quantity item text-center">Qty</th>
                            <th class="cart_delete last_item">&nbsp;</th>
                            <th class="cart_total item text-right">Total</th>
                        </tr>
                        </thead>
                        <tfoot>

                        <tr class="cart_total_price">
                            <td rowspan="3" colspan="2" id="cart_voucher" class="cart_voucher">
                            </td>
                            <td colspan="3" class="text-right">Total products (tax incl.)</td>
                            <td colspan="2" class="price" id="total_product">£ 196.26</td>
                        </tr>
                        <tr style="display: none;">
                            <td colspan="3" class="text-right">
                                Total gift wrapping (tax incl.)
                            </td>
                            <td colspan="2" class="price-discount price" id="total_wrapping">£ 0.00</td>
                        </tr>
                        <tr class="cart_total_delivery unvisible" style="display: none;">
                            <td colspan="3" class="text-right">Total shipping</td>
                            <td colspan="2" class="price" id="total_shipping">Free shipping!</td>
                        </tr>
                        <tr class="cart_total_price">
                            <td colspan="3" class="total_price_container text-right">
                                <span>Total</span>
                                <div class="hookDisplayProductPriceBlock-price">

                                </div>
                            </td>
                            <td colspan="2" class="price" id="total_price_container">
                                <span id="total_price">£ 196.26</span>
                            </td>
                        </tr>

                        </tfoot>
                        <tbody>

                        <tr id="product_13_84_0_0" class="cart_item last_item address_0 even first_item">
                            <td class="cart_product">
                                <a href="/product/"><img
                                            src="http://demo.posthemes.com/pos_fobe/72-small_default/faded-short-sleeves-tshirt.jpg"
                                            alt="Faded Short Sleeves T-shirt" width="98" height="127"></a>
                            </td>
                            <td class="cart_description">
                                <p class="product-name"><a
                                            href="http://demo.posthemes.com/pos_fobe/en/wine-basics/13-faded-short-sleeves-tshirt.html#/1-size-s/13-color-orange">Faded
                                        Short Sleeves T-shirt</a></p>
                                <small class="cart_ref">SKU : demo_13</small>
                                <small>
                                    <a href="http://demo.posthemes.com/pos_fobe/en/wine-basics/13-faded-short-sleeves-tshirt.html#/1-size-s/13-color-orange">Size
                                        : S, Color : Orange</a></small>
                            </td>
                            <td class="cart_unit" data-title="Unit price">
                                <ul class="price text-right" id="product_price_13_84_0">
                                    <li class="price">£ 19.81</li>
                                </ul>
                            </td>
                            <td class="cart_quantity text-center" data-title="Quantity">

                                <input type="hidden" value="5" name="quantity_13_84_0_0_hidden">
                                <input size="2" type="text" autocomplete="off"
                                       class="cart_quantity_input form-control grey" value="1"
                                       name="quantity_13_84_0_0">
                                <div class="cart_quantity_button clearfix">
                                    <a rel="nofollow" class="cart_quantity_down btn btn-default button-minus"
                                       id="cart_quantity_down_13_84_0_0"
                                       href="http://demo.posthemes.com/pos_fobe/en/cart?add=1&amp;id_product=13&amp;ipa=84&amp;id_address_delivery=0&amp;op=down&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                       title="Subtract">
                                        <span><i class="icon-minus"></i></span>
                                    </a>
                                    <a rel="nofollow" class="cart_quantity_up btn btn-default button-plus"
                                       id="cart_quantity_up_13_84_0_0"
                                       href="http://demo.posthemes.com/pos_fobe/en/cart?add=1&amp;id_product=13&amp;ipa=84&amp;id_address_delivery=0&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"
                                       title="Add"><span><i class="icon-plus"></i></span></a>
                                </div>
                            </td>
                            <td class="cart_delete text-center" data-title="Delete">
                                <div>
                                    <a rel="nofollow" title="Delete" class="cart_quantity_delete" id="13_84_0_0"
                                       href="http://demo.posthemes.com/pos_fobe/en/cart?delete=1&amp;id_product=13&amp;ipa=84&amp;id_address_delivery=0&amp;token=ee8d95543658ede5e0b91c40edb8d5b6"><i
                                                class="icon-trash"></i></a>
                                </div>
                            </td>
                            <td class="cart_total" data-title="Total">
                                <span class="price" id="total_product_price_13_84_0">£ 99.06</span>
                            </td>
                        </tr>

                        </tbody>

                    </table>
                </div> <!-- end order-detail-content -->

                <div id="HOOK_SHOPPING_CART"></div>
                <p class="cart_navigation clearfix">
                    <a href="http://demo.posthemes.com/pos_fobe/en/order?step=1"
                       class="button btn btn-default standard-checkout button-medium" title="Proceed to checkout"
                       style="">
                        <span>Proceed to checkout<i class="icon-chevron-right right"></i></span>
                    </a>
                    <a href="http://demo.posthemes.com/pos_fobe/en/12-wine-basics"
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