<div class="wrapper container">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach(\App\Models\MainSlider::all()->sortBy('sort')->reverse() as $slide)
                @php
                    $image =  \App\Models\Upload::query()->find($slide->image, ['name', 'hash']);
                    $img_url = sprintf('%s/files/%s/%s', config('url'), $image->hash, $image->name);
                @endphp
            <div class="swiper-slide"><img src="{{ $img_url }}" /></div>
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
</script>

<style>
    .swiper-slide
    {
        text-align: center;
    }
    .swiper-container
    {
        margin-top: 20px;
        max-height: 350px;
    }
</style>

