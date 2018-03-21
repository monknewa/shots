<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <div class="sidenav-header-inner text-center">
                <img src="/img/logo.png" alt="person"
                                                               class="">

            </div>
            <div class="sidenav-header-logo"><a href="/" class="brand-small text-center">
                    <strong class="text-info">S</strong><strong class="text-primary"></strong></a></div>
        </div>
        <div class="main-menu">
            <ul id="side-main-menu" class="side-menu list-unstyled">

                <li class=" {{(request()->path() == "dash")?"active":""  }}">
                    <a href="/dash/"><i class="fa fa-home"></i><span>Home</span></a>
                </li>
                <li class=" {{ (request()->path() == "dash/products")?"active":""  }}">
                    <a href="/dash/products"><i class="fa fa-paperclip"></i><span>Product</span></a>
                </li>
                <li class=" {{ (request()->path() == "dash/category")?"active":""  }}">
                    <a href="/dash/category"> <i class="fa fa-folder"></i><span>Catgory</span></a>
                </li>
                <li class=" {{ (request()->path() == "dash/subcategory")?"active":""  }}">
                    <a href="/dash/subcategory"> <i class="fa fa-folder-open"> </i><span>Sub Categories </span></a>
                </li>
                <li class=" {{ (request()->path() == "dash/inquiry")?"active":""  }}">
                    <a href="/dash/inquiry"> <i class="fa fa-envelope"></i><span>Inquiry</span></a>
                </li>
                <li class=" {{ (request()->path() == "dash/special-offers")?"active":""  }}">
                    <a href="/dash/special-offers"> <i
                                class="icon-interface-windows"></i><span>Special Offers </span></a>
                </li>
                <li class="{{ (request()->path() == "dash/account")?"active":""  }}">
                    <a href="/dash/account"> <i
                                class="fa fa-key"></i><span>Account </span></a>
                </li>

            </ul>
        </div>

    </div>
</nav>
