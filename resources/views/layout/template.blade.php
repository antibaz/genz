<html lang="{{ app()->getLocale() }}">
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{ LAConfigs::getByKey('sitename') }}</title>
    <meta name="description" content="{{ LAConfigs::getByKey('site_description') }}">
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.0, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    {{--
      <link type="text/css" rel="stylesheet" href="/css/css">
      --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/global.css" media="all">
    <link rel="stylesheet" href="/css/highdpi.css" media="all">
    <link rel="stylesheet" href="/css/responsive-tables.css" media="all">
    <link rel="stylesheet" href="/css/uniform.default.css" media="all">
    <link rel="stylesheet" href="/css/jquery.fancybox.css" media="all">
    <link rel="stylesheet" href="/css/product_list.css" media="all">
    <link rel="stylesheet" href="/css/blockcart.css" media="all">
    <link rel="stylesheet" href="/css/blockcategories.css" media="all">
    <link rel="stylesheet" href="/css/blockcurrencies.css" media="all">
    <link rel="stylesheet" href="/css/blocklanguages.css" media="all">
    <link rel="stylesheet" href="/css/blockcontact.css" media="all">
    <link rel="stylesheet" href="/css/blocknewsletter.css" media="all">
    <link rel="stylesheet" href="/css/blocktags.css" media="all">
    <link rel="stylesheet" href="/css/blockviewed.css" media="all">
    <link rel="stylesheet" href="/css/hooks.css" media="all">
    <link rel="stylesheet" href="/css/blockwishlist.css" media="all">
    <link rel="stylesheet" href="/css/productcomments.css" media="all">
    <link rel="stylesheet" href="/css/tmmegamenu.css" media="all">
    <link rel="stylesheet" href="/css/front.css" media="all">
    <link rel="stylesheet" href="/css/tmmegalayout.css" media="all">
    <link rel="stylesheet" href="/css/swiper.min.css" media="all">
    <link rel="stylesheet" href="/css/jquery.bxslider.min.css" media="all">
    <link rel="stylesheet" href="/css/remodal.css" media="all">
    <link rel="stylesheet" href="/css/remodal-default-theme.css" media="all">
    {{--<link rel="stylesheet" href="/css/fakeLoader.css" media="all">--}}

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="./js/tmmegamenu.js"></script>
    {{--<script src="./js/jquery-migrate-1.2.1.min.js"></script>--}}
    <script src="./js/jquery.easing.js"></script>
    {{-- <script src="./js/tools.js"></script>
     <script src="./js/global.js"></script>--}}
    <script src="./js/10-bootstrap.min.js"></script>
    <script src="./js/14-device.min.js"></script>
    <script src="./js/superfish.js"></script>
    {{-- <script src="./js/js"></script>--}}
    <script src="./js/swiper.min.js"></script>
    <script src="./js/jquery.bxslider.min.js"></script>
    <script src="./js/remodal.min.js"></script>
    {{--<script src="./js/fakeLoader.min.js"></script>--}}

</head>
<body id="index" class="index hide-left-column hide-right-column lang_ru  one-column">
<div class="fakeloader"></div>
<div id="page">
    <div class="header-container">
        <header id="header">
           {{-- <div id="header-element"></div>--}}
            <div class="nav">
                <div class="container">
                    <div class="row">
                        <div id="header_logo">
                            <h1>
                                <a href="/" title="ГЕНЗАР">
                                    ГЕНЗАР АВТОСЕРВИС
                                    {{--<img class="logo img-responsive" src="./img/new-store-logo-1457701171.jpg"
                                 alt="Spare Parts" width="282" height="48">--}}
                                </a>
                            </h1>
                        </div>
                        @include('menus.top_menu')
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="row">
                        @include('menus.main_menu')
                    </div>
                </div>
            </div>
        </header>
    </div>
@yield('content')

<!-- .columns-container -->
    <div class="footer-container">
        <div id="footer">
            <div class="remodal" data-remodal-id="modal">
                <button data-remodal-action="close" class="remodal-close"></button>
                <h1>Связаться с нами</h1>
                <p>
                    Responsive, lightweight, fast, synchronized with CSS animations, fully customizable modal window plugin with declarative configuration and hash tracking.
                </p>
                <br>
                <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
            </div>
        </div>
    </div>
    {{--<div class="bottom-footer">
        <div class="container">
            <a class="_blank" href="" target="_blank">  </a>
        </div>
    </div>--}}
</div>
<!-- #page -->
<script>
    /*$(".fakeloader").fakeLoader({
        timeToHide:1000,
        zIndex:"9999",
        bgColor:"#c64444",
        //imagePath:"http://autoservice39.ru/wp-content/uploads/2016/06/cropped-Avtoservis-GENZAR-1.png",
        spinner:"spinner5"
    });*/

</script>
</body>
</html>