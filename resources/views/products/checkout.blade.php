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
                <!-- Steps -->
                <ul class="step clearfix" id="order_step">
                    <li class="step_current  first">
                        <span><em>01.</em> Summary</span>
                    </li>
                    <li class="step_todo third">
                        <span><em>02.</em> Address</span>
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
                        <tbody id="checkOutTbody">
                        </tbody>
                        <tfoot>

                        <tr class="cart_total_price">
                            <td rowspan="2" colspan="2" id="cart_voucher" class="cart_voucher">
                            </td>
                            <td colspan="3" class="text-right">Total products (tax incl.)</td>
                            <td colspan="2" class="price" id="total_product">13% tax</td>
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

                    </table>
                </div> <!-- end order-detail-content -->

                <div id="HOOK_SHOPPING_CART"></div>
                <p class="cart_navigation clearfix">
                    <a href="/checkout/address"
                       id="purchase"
                       class="button btn btn-default standard-checkout button-medium" title="Proceed to checkout"
                       style="">
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
        checkOutRows();
    </script>
@endsection