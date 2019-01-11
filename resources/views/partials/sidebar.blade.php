<div class="col-lg-3 col-md-4 col-sm-12">
    <div class="service_drunk_head_right">
        <img src="images/our_works_delimiter.png">
        <h2>МЕНЮ РАЗДЕЛА</h2>
    </div>

    {{--{{ dd($menus) }}--}}


    <div class="service_drunk_menu_right">

        @foreach($menus as $menu)
            <a class="service-item" href="#">
                <img src="images/service_drunk_menu_point.png">
                <p>{{ $menu->name }}</p>
            </a>

            @if(count($menu->pages))

                @foreach($menu->pages as $page)
                    <a class="service_drunk_space service-item" href="{{ url('service-' . $page->slug) }}">
                        <img src="images/service_drunk_menu_point2.png">
                        <p>{{ $page->title }}</p>
                    </a>
                @endforeach

            @endif

        @endforeach


        {{--<a class="service-item" href="#">--}}
            {{--<img src="images/service_drunk_menu_point.png">--}}
            {{--<p>Дизайн</p>--}}
        {{--</a>--}}

        {{--<a class="service_drunk_space service-item" href="">--}}
            {{--<img src="images/service_drunk_menu_point2.png">--}}
            {{--<p>Печать на баннере</p>--}}
        {{--</a>--}}

        {{--<a class="service-item" href="#">--}}
            {{--<img src="images/service_drunk_menu_point.png">--}}
            {{--<p>Изготовление и монтаж наружной рекламы</p>--}}
        {{--</a>--}}
        {{--<a class="service-item" href="#">--}}
            {{--<img src="images/service_drunk_menu_point.png">--}}
            {{--<p>Широкоформатная печать</p>--}}
        {{--</a>--}}

        {{--<a class="service_drunk_space service-item" href="">--}}
            {{--<img src="images/service_drunk_menu_point2.png">--}}
            {{--<p>Печать на пленке</p>--}}
        {{--</a>--}}
        {{--<a class="service_drunk_space service-item" href="">--}}
            {{--<img src="images/service_drunk_menu_point2.png">--}}
            {{--<p>Печать на баннере</p>--}}
        {{--</a>--}}
        {{--<a class="service_drunk_space service-item" href="">--}}
            {{--<img src="images/service_drunk_menu_point2.png">--}}
            {{--<p>Интерьерная печать</p>--}}
        {{--</a>--}}
        {{--<a class="service_drunk_space service-item" href="">--}}
            {{--<img src="images/service_drunk_menu_point2.png">--}}
            {{--<p>Печать бигбордов и больших форматов</p>--}}
        {{--</a>--}}
        {{--<a class="service_drunk_space service-item" href="">--}}
            {{--<img src="images/service_drunk_menu_point2.png">--}}
            {{--<p>Печать на холсте</p>--}}
        {{--</a>--}}
        {{--<a class="service_drunk_space service-item" href="">--}}
            {{--<img src="images/service_drunk_menu_point2.png">--}}
            {{--<p>Печать на сетке</p>--}}
        {{--</a>--}}

        {{--<br>--}}

        {{--<a class="service-item" href="#">--}}
            {{--<img src="images/service_drunk_menu_point.png">--}}
            {{--<p>Лазерная и фрезерная резка и гравировка</p>--}}
        {{--</a>--}}
        {{--<a class="service-item" href="#">--}}
            {{--<img src="images/service_drunk_menu_point.png">--}}
            {{--<p>Шелкотрафаретная печать</p>--}}
        {{--</a>--}}
        {{--<a class="service-item" href="#">--}}
            {{--<img src="images/service_drunk_menu_point.png">--}}
            {{--<p>Плоттерная порезка</p>--}}
        {{--</a>--}}
        {{--<a class="service-item" href="#">--}}
            {{--<img src="images/service_drunk_menu_point.png">--}}
            {{--<p>Производство пластиковых карт</p>--}}
        {{--</a>--}}
        {{--<a class="service-item" href="#">--}}
            {{--<img src="images/service_drunk_menu_point.png">--}}
            {{--<p>Изготовление сувенирной продукции</p>--}}
        {{--</a>--}}
        {{--<a class="service-item" href="#">--}}
            {{--<img src="images/service_drunk_menu_point.png">--}}
            {{--<p>Брендирование автотранспорта</p>--}}
        {{--</a>--}}
        {{--<a class="service-item" href="#">--}}
            {{--<img src="images/service_drunk_menu_point.png">--}}
            {{--<p>Аренда рекламных плоскостей</p>--}}
        {{--</a>--}}
        {{--<a class="service-item" href="#">--}}
            {{--<img src="images/service_drunk_menu_point.png">--}}
            {{--<p>Реклама на/в транспорте</p>--}}
        {{--</a>--}}
    </div>
</div>