<html lang="{{ app()->getLocale() }}" prefix="og: http://ogp.me/ns#">
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
    <title>@yield('pageTitle')</title>
    <meta name="description" content="{{ LAConfigs::getByKey('site_description') }}">
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.0, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    {{--
      <link type="text/css" rel="stylesheet" href="/css/css">
      --}}
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="http://autoservice39.ru/xmlrpc.php" />


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/global.css?v=2" media="all">
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
    <link rel="stylesheet" href="/css/bootstrap.css" media="all">
    {{--<link rel="stylesheet" href="/css/fakeLoader.css" media="all">--}}

    {{--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>--}}
    <script src="./js/jquery-1.11.0.min.js"></script>
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
            <div class="wrapper container">
                <div class="col-lg-10 col-md-8">
                © 2014, Автосервис и автостоянка "ГЕНЗАР"

                г. Калининград, ул. Горького 223 в<br>

                Телефоны: 8 (4012) 526-800; 50-90-61 (стоянка)<br>

                Автосервис работает: с 9:00 до 19:00, суббота - с 9:00 до 16:00, воскресенье - выходной  <br>
                Автостоянка работает: круглосуточно
                </div>
                <div class="col-lg-2 col-md-4" style="text-align: right"><script type="text/javascript" src="//vk.com/js/api/openapi.js?150"></script>

                    <!-- VK Widget -->
                    <a href="https://vk.com/autoservice39" class="vk-link">

                    </a>
                   {{-- <div id="vk_groups" style="margin: 0 auto"></div>
                    <script type="text/javascript">
                        VK.Widgets.Group("vk_groups", {mode: 3}, 20003922);
                    </script>--}}
                </div>
               </div>

            </div>
        </div>
    </div>
    {{--<div class="bottom-footer">
        <div class="container">
            <a class="_blank" href="" target="_blank">  </a>
        </div>
    </div>--}}
</div>
<div class="remodal" data-remodal-id="modal">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true"></span></button>
            <h4 class="modal-title" id="myModalLabel">Запись на ремонт</h4>
        </div>
        <div class="modal-body">
            <div id="repairs-form-result">
                <form action="/" method="post" id="my-repairs-form" accept-charset="UTF-8">
                    <div>
                        <div class="phone-mail-row clearfix">
                            <div class="form-item form-item-name form-type-textfield form-group"><label
                                        class="control-label" for="edit-name--2">Ваше имя <span
                                            class="form-required"
                                            title="Это поле обязательно для заполнения.">*</span></label>
                                <input class="form-control form-text" required type="text" id="edit-name--2"
                                       name="name" value="" size="60" maxlength="128"></div>
                            <div class="form-item form-item-phone form-type-textfield form-group"><label
                                        class="control-label" for="edit-phone--2">Телефон <span
                                            class="form-required"
                                            title="Это поле обязательно для заполнения.">*</span></label>
                                <input placeholder="+7 (___) ___-__-__" class="form-control form-text "
                                       type="text" id="edit-phone--2" required name="phone" value="" size="60"
                                       maxlength="128"></div>
                        </div>
                        <div class="form-item form-item-comment form-type-textarea form-group"><label
                                    class="control-label" for="edit-comment--2">Причина обращения, поломка,
                                вопрос <span class="form-required"
                                             title="Это поле обязательно для заполнения.">*</span></label>
                            <div class="form-textarea-wrapper resizable textarea-processed resizable-textarea">
                                            <textarea class="form-control form-textarea" required id="edit-comment--2"
                                                      name="comment" cols="60" rows="5"></textarea>
                                <div class="grippie"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- <div class="modal-success">
             <h1 class="modal-title" id="myModalLabel">Спасибо, мы свяжемся с Вами в ближайшее врямя.</h1>
         </div>--}}
    </div>
    <button data-remodal-action="cancel" class="remodal-cancel">Закрыть</button>
    <button class="remodal-confirm">Отправить</button>
</div>
<!-- #page -->

<script type="text/javascript" src="//vk.com/js/api/openapi.js?150"></script>

<!-- VK Widget -->
<div id="vk_community_messages"></div>
<script type="text/javascript">
    VK.Widgets.CommunityMessages("vk_community_messages", 79032417, {tooltipButtonText: "Есть вопрос?"});
</script>
<script>
    /*$(".fakeloader").fakeLoader({
        timeToHide:1000,
        zIndex:"9999",
        bgColor:"#c64444",
        //imagePath:"http://autoservice39.ru/wp-content/uploads/2016/06/cropped-Avtoservis-GENZAR-1.png",
        spinner:"spinner5"
    });*/

    var inst = $('[data-remodal-id=modal]').remodal();

    $('.remodal-confirm').on('click', function (e) {

        var url = "/modal/";
        $.ajax({
            type: "GET",
            url: url,
            data: $('#my-repairs-form').serialize(), // serializes the form's elements.
            success: function (data) {
                if (data) {
                    alert(data);
                    //inst.open();
                }
                else {

                    //$('#my-repairs-form')[0].reset();
                    inst.close();
                }
            }
        });
    })
</script>
</body>
</html>