<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->
    <meta name="csrf-=token" content="{{csrf_token()}}">
    <meta charset="utf-8">
    <title>Shots</title>
    <meta name="description" content="Shop powered by PrestaShop">
    <meta name="generator" content="PrestaShop">
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="icon" type="image/vnd.microsoft.icon"
          href="http://demo.posthemes.com/pos_fobote/img/favicon.ico?1459389507">
    <link rel="shortcut icon" type="image/x-icon" href="http://demo.posthemes.com/pos_fobe/img/favicon.ico?1459389507">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/global.css" type="text/css" media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/autoload/highdpi.css" type="text/css" media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/autoload/responsive-tables.css" type="text/css" media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/autoload/uniform.default.css" type="text/css" media="all">
    <link rel="stylesheet" href="/js/jquery/plugins/fancybox/jquery.fancybox.css" type="text/css" media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/modules/blockcart/blockcart.css" type="text/css" media="all">
    <link rel="stylesheet" href="/js/jquery/plugins/bxslider/jquery.bxslider.css" type="text/css" media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/modules/blockcategories/blockcategories.css" type="text/css"
          media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/modules/blockcurrencies/blockcurrencies.css" type="text/css"
          media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/modules/blocklanguages/blocklanguages.css" type="text/css"
          media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/modules/blockcontact/blockcontact.css" type="text/css"
          media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/modules/blocknewsletter/blocknewsletter.css" type="text/css"
          media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/modules/blocksearch/blocksearch.css" type="text/css" media="all">
    <link rel="stylesheet" href="/js/jquery/plugins/autocomplete/jquery.autocomplete.css" type="text/css" media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/modules/blocktags/blocktags.css" type="text/css" media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/modules/blockuserinfo/blockuserinfo.css" type="text/css"
          media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/product_list.css" type="text/css" media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/modules/blockwishlist/blockwishlist.css" type="text/css"
          media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/modules/productcomments/productcomments.css" type="text/css"
          media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/modules/posslideshow/css/nivo-slider/nivo-slider.css"
          type="text/css" media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/modules/smartblog/css/smartblogstyle.css" type="text/css"
          media="all">
    <link rel="stylesheet" href="/modules/poscountdown/css/jquery.countdown.css" type="text/css" media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/modules/posmegamenu/css/custommenu.css" type="text/css"
          media="all">
    <link rel="stylesheet" href="/modules/posfeatureproduct/css/posfeatureproduct.css" type="text/css" media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/modules/posnewproduct/css/posnewproduct.css" type="text/css"
          media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/modules/posspecialsproducts/posspecialsproducts.css"
          type="text/css" media="all">
    <link rel="stylesheet" href="/themes/pos_fobe1/css/modules/posbestsellers/css/posbestsellers.css" type="text/css"
          media="all">
    <script type="text/javascript" src="/js/jquery/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="/js/jquery/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="/js/jquery/plugins/jquery.easing.js"></script>
    <script type="text/javascript" src="/js/tools.js"></script>
    <script type="text/javascript" src="/themes/pos_fobe1/js/global.js"></script>
    <script type="text/javascript" src="/themes/pos_fobe1/js/autoload/10-bootstrap.min.js"></script>
    <script type="text/javascript" src="/themes/pos_fobe1/js/autoload/15-jquery.total-storage.min.js"></script>
    <script type="text/javascript" src="/themes/pos_fobe1/js/autoload/15-jquery.uniform-modified.js"></script>
    <script type="text/javascript" src="/js/jquery/plugins/fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="/themes/pos_fobe1/js/products-comparison.js"></script>
    <script type="text/javascript" src="/themes/pos_fobe1/js/modules/blockcart/ajax-cart.js"></script>
    <script type="text/javascript" src="/js/jquery/plugins/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="/js/jquery/plugins/jquery.serialScroll.js"></script>
    <script type="text/javascript" src="/js/jquery/plugins/bxslider/jquery.bxslider.js"></script>
    <script type="text/javascript" src="/themes/pos_fobe1/js/tools/treeManagement.js"></script>
    <script type="text/javascript" src="/themes/pos_fobe1/js/modules/blocknewsletter/blocknewsletter.js"></script>
    <script type="text/javascript" src="/js/jquery/plugins/autocomplete/jquery.autocomplete.js"></script>
    <script type="text/javascript" src="/themes/pos_fobe1/js/modules/blocksearch/blocksearch.js"></script>
    <script type="text/javascript" src="/themes/pos_fobe1/js/modules/blockwishlist/js/ajax-wishlist.js"></script>
    <script type="text/javascript" src="/modules/posslideshow/js/nivo-slider/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript" src="/modules/posscroll/scrolltop.js"></script>
    <script type="text/javascript" src="/modules/poscountdown/js/jquery.plugin.js"></script>
    <script type="text/javascript" src="/modules/poscountdown/js/jquery.countdown.js"></script>
    <script type="text/javascript" src="/modules/posmegamenu/js/custommenu.js"></script>
    <script type="text/javascript" src="/modules/posmegamenu/js/mobile_menu.js"></script>
    <script type="text/javascript" src="/modules/posnewproduct/js/pos.bxslider.min.js"></script>
    <script type="text/javascript" src="/themes/pos_fobe1/js/index.js"></script>
    <script src="/themes/pos_fobe1/js/owl.carousel.js" type="text/javascript"></script>

    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic&amp;subset=latin,latin-ext,vietnamese"
          rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic"
          rel="stylesheet" type="text/css">
    <style type="text/css">

        h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6, a {
            font-family: Source Sans Pro;
        }

        .titleFont {
            font-family: Source Sans Pro !important;
        }

        body, .footer-container #footer a, .footer-container #footer ul li {
            font-family: Cabin;
        }

        .linkFont {
            font-family: Cabin !important;
        }
    </style>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,600&amp;subset=latin,latin-ext"
          type="text/css" media="all">
    <!--[if IE 8]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">.fancybox-margin {
            margin-right: 17px;
        }</style>
</head>
<body>

<div id="page">
  <div class="header-container">
      @include("layouts.header")

      @yield("content")
  </div>

    <div class="column-container">
        @yield("extra")
    </div>

  <div class="footer-container">
      @include("layouts.footer")
  </div>

</div>
</body>
</html>
