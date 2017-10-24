<?php
/**
 * Created by vlad.
 * Date: 26.07.17
 * Time: 22:39
 */
?>
@extends('layout.template')
@section('pageTitle', 'Автосервис Калининград - Авторемонт на Горького, автосервисы Калининграда, ремонт подвески, замена масла')
@section('content')
    @include('slider.main')

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


                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 contact-inner"><!-- MODULE Block contact infos -->
                    <div id="newsletter_block_left" class="block">

                        <section id="block_contact_infos" class="footer-block">
                            <div>

                                <ul>
                                    <h4>Свяжитесь с нами</h4>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        Наш адрес: г. Калининград, Ленинградский район, ул. Горького 223(в)
                                    </li>
                                    <li>
                                        <i class="fa fa-mobile"></i>
                                        <span>
            <a href="tel:+7401250-90-61">
              Телефон автостоянки: +7 (4012) 50-90-61
            </a>
          </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-mobile"></i>
                                        <span>
            <a href="tel:8-921-711-1216">
              Телефон автосервиса: 8 4012 52 68 00 ; 8-921-711-1216
            </a>
          </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <span><a href="mailto:ortex79@mail.ru"> Наш электронный адрес: ortex79@mail.ru</a></span>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <button data-remodal-target="modal" name="submitNewsletter" class="btn btn-default btn-sm">
                            <span>Связаться с нами</span>
                        </button>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <iframe src="https://yandex.ru/map-widget/v1/-/CBUof8TxDA" width="100%" height="500" frameborder="0"></iframe>
    {{--<div class="wrapper container">
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

    </div>--}}

    {{--<div class="columns-container">
    </div>--}}

@endsection