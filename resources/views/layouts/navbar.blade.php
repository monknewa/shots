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
                                <li class="first"><a class="link-myaccount" href="/user" title="My account">
                                        My account
                                    </a></li>
                                </li>

                                <li class="first"> <a class="login" href="/logout" rel="nofollow"
                                        title="Log in to your customer account">
                                        Log out
                                    </a></li>
                            </ul>
                        @else
                            <div class=" top-links current">
                                <span><i class="icon-user"></i>&nbsp;&nbsp;&nbsp;My Account</span>
                            </div>
                            <ul id="header_links" class=" vertical-link header_links_ul toogle_content">

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
                            <strong>NPR</strong></div>

                    </form>
                </div>
                <span class="shop-phone">
		<i class="icon-phone"></i><strong>phone: </strong><strong>+9774427151</strong>
	</span>
                <span class="shop-phone">
		<i class="icon-clock-o"></i><strong>Delivery time:</strong><strong>24/7 hours and 365 days</strong>
	</span>
                <span class="shop-phone">
		<i class="icon-money"></i><strong></strong><strong>cash on delivery</strong>
	</span>
            </nav>
        </div>
    </div>
</div>