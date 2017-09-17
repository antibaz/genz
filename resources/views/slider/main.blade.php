<div class="wrapper container">
    <ul class="manufacturers_items clearfix">
        <li class="manufacturer_item caroucel_item">
            <a title="Подробнее о Toyota">
                <img class="img-responsive"
                     src="https://ld-prestashop.template-help.com/prestashop_58410/img/m/6-tm_manufacture_default.jpg"
                     alt="6">
            </a>
        </li>
        <li class="manufacturer_item caroucel_item">
            <a title="Подробнее о Ford">
                <img class="img-responsive"
                     src="https://ld-prestashop.template-help.com/prestashop_58410/img/m/7-tm_manufacture_default.jpg"
                     alt="7">
            </a>
        </li>
        <li class="manufacturer_item caroucel_item">
            <a title="Подробнее о Nissan">
                <img class="img-responsive"
                     src="https://ld-prestashop.template-help.com/prestashop_58410/img/m/8-tm_manufacture_default.jpg"
                     alt="8">
            </a>
        </li>
        <li class="manufacturer_item caroucel_item">
            <a title="Подробнее о Kia">
                <img class="img-responsive"
                     src="https://ld-prestashop.template-help.com/prestashop_58410/img/m/9-tm_manufacture_default.jpg"
                     alt="9">
            </a>
        </li>
        <li class="manufacturer_item caroucel_item">
            <a title="Подробнее о Honda">
                <img class="img-responsive"
                     src="https://ld-prestashop.template-help.com/prestashop_58410/img/m/10-tm_manufacture_default.jpg"
                     alt="10">
            </a>
        </li>
        <li class="manufacturer_item caroucel_item">
            <a title="Подробнее о Hyundai">
                <img class="img-responsive"
                     src="https://ld-prestashop.template-help.com/prestashop_58410/img/m/11-tm_manufacture_default.jpg"
                     alt="11">
            </a>
        </li>
    </ul>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach(\App\Models\MainSlider::all()->sortBy('sort')->reverse() as $slide)
                @php
                    $image =  \App\Models\Upload::query()->find($slide->image, ['name', 'hash']);
                    $img_url = sprintf('/files/%s/%s', $image->hash, $image->name);
                @endphp
                <div class="swiper-slide"><img src="{{ $img_url }}"/></div>
            @endforeach
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

</div>

<div class="rd-parallax-layer">
    <div class="wrapper container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 textMain">
                <div class="item-html">
                    <h4>Автосервис Гензар</h4>
                    <p>Наш адрес — Автосервис на Горького в Калининграде это молодая команда профессионалов. Услуги
                        компании Автосервис ГЕНЗАР Калининград не ограничиваются только автосервисом — у нас имеется
                        также большая крытая автостоянка, шиномонтаж. Автосервис Калининград — это место где вам окажут
                        любые услуги по обслуживанию вашего автомобиля. А именно: диагностика, ремонт двигателей, замена
                        и продажа масла, ремонт ходовой части, послегарантийное техническое обслуживание, сварочные
                        работы.</p>
                </div>

                <div class="item-html">
                    <h4>Автостоянка</h4>
                    <p>На нашей автостоянке Вы можете не беспокоиться о сохранности Вашего автомобиля, Ваш железный конь
                        день и ночь находится под наблюдением охранников и видео регистрации. Также в качестве усиления
                        защиты Вашего имущества стоянка оборудована электронным шлагбаумом и железными воротами. Въезд и
                        выезд осуществляется посредством индивидуальной электронной карты. Вся территория стоянки
                        обнесена бетонным глухим забором.</p>
                </div>
            </div>


            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 contact-inner" ><!-- MODULE Block contact infos -->
                <div id="newsletter_block_left" class="block">
                    <h4>Свяжитесь с нами</h4>
                    <div class="block_content">
                        <section id="block_contact_infos" class="footer-block">
                            <div>

                                <ul>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        4578 Marmora Road,
                                        Glasgow D04 89GR
                                    </li>
                                    <li>
                                        <i class="fa fa-mobile"></i>
                                        <span>
            <a href="tel:1-800-1234-567">
              1-800-1234-567
            </a>
          </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <span><a href="mailto:%69%6e%66%6f@%64%65%6d%6f%6c%69%6e%6b.%6f%72%67">info@demolink.org</a></span>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<div class="wrapper container">
    <ul class="bxslider">
        @foreach(\App\Models\MainSlider::all()->sortBy('sort')->reverse() as $slide)
            @php
                $image =  \App\Models\Upload::query()->find($slide->image, ['name', 'hash']);
                $img_url = sprintf('/files/%s/%s', $image->hash, $image->name);
            @endphp
            <li>

            </li>
        @endforeach
    </ul>

</div>


<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        loop: true,
        autoplayDisableOnInteraction: false
    });

    $('.bxslider').bxSlider({
        minSlides: 2,
        maxSlides: 2,
        slideWidth: 360,
        responsive: true,
        slideMargin: 10
    });

    $('.manufacturers_items').bxSlider({
        minSlides: 6,
        maxSlides: 6,
        moveSlides: 1,
        slideWidth: 500,
        infiniteLoop: true,
        pager: false,
    });
</script>
