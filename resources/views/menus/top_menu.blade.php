<nav>
    <div id="contact-link">

        <span class="shop-phone">
                                Автостоянка <a href="tel:526-800">50-90-61</a>
                            </span>
        <span class="shop-phone">
                                Автосервис <a href="tel:526-800">526-800</a>
                            </span>
    </div>
    @foreach(\App\Models\Top::all()->sortBy('sort_top')->reverse() as $nav)
        <div id="contact-link">
            <a href="/{{ $nav->slug }}" title="{{ $nav->title }}">{{ $nav->title }}</a>
        </div>
    @endforeach

</nav>
