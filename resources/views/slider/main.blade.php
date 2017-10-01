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
                    $image =  App\Models\Upload::find($slide->image);
                @endphp
                <div class="swiper-slide"><img src="{{ $image->path() }}"/></div>
            @endforeach
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

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

    //myMap.behaviors.disable('scrollZoom');
</script>
