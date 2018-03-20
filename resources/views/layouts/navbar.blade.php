<div class="nav">
    <div class="container">
        <div class="row">
            <nav>
                <div class="header_userinfo">
                    <div class="top-userinfo">
                        @if(auth()->check())
                            <div class=" top-links current">
                                <span>{{auth()->user()->name}}</span>
                            </div>
                            <ul id="header_links" class=" vertical-link header_links_ul toogle_content">
                                <li class="first"><a class="link-myaccount" href="loginfd9a.html" title="My account">
                                        My account
                                    </a></li>
                                <li><a class="link-wishlist wishlist_block" href="login619c.html" title="My wishlist">
                                        My wishlist</a></li>
                                <li>
                                        <a class="login" href="/logout" rel="nofollow"
                                           title="Log in to your customer account">
                                            Log out
                                        </a>

                                </li>
                            </ul>
                        @else
                            <div class=" top-links current">
                                <span>My Account</span>
                            </div>
                            <ul id="header_links" class=" vertical-link header_links_ul toogle_content">
                                <li class="first"><a class="link-myaccount" href="loginfd9a.html" title="My account">
                                        My account
                                    </a></li>
                                <li><a class="link-wishlist wishlist_block" href="login619c.html" title="My wishlist">
                                        My wishlist</a></li>
                                <li><a class="link-checkout" href="order.html" title="checkout">Checkout</a></li>
                                <li>
                                    <a class="login" href="/login" rel="nofollow"
                                       title="Log in to your customer account">
                                        Log in
                                    </a>
                                </li>
                            </ul>
                        @endif
                    </div>
                </div>
                <div id="currencies-block-top">
                    <form id="setCurrency" action="http://demo.posthemes.com/pos_fobe/en/" method="post">
                        <div class="current">
                            <input type="hidden" name="id_currency" id="id_currency" value="">
                            <input type="hidden" name="SubmitCurrency" value="">
                            <span class="cur-label">Currency :</span>
                            <strong>GBP</strong></div>
                        <ul id="first-currencies" class="currencies_ul toogle_content">
                            <li>
                                <a href="javascript:setCurrency(2);" rel="nofollow" title="Dollar (Usd)">
                                    Dollar (Usd)
                                </a>
                            </li>
                            <li class="selected">
                                <a href="javascript:setCurrency(1);" rel="nofollow" title="Pound (GBP)">
                                    Pound (GBP)
                                </a>
                            </li>
                        </ul>
                    </form>
                </div>

                <span class="shop-phone">
		<i class="icon-phone"></i><strong>phone: </strong><strong>0123-456-789</strong>
	</span>
            </nav>
        </div>
    </div>
</div>