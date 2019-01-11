<header class="header-wrapper">
    <div class="header-body">
        <div class="logo">
            <a href="{{ url('/') }}"><img src="{{ asset('images/slavna-logo.png') }}" alt=""></a>
        </div>

        <div class="information_part">
            <div class="header-part">
                <h1 class="main-header">Коттедж-парк Славна - отдых со вкусом…</h1>
            </div>

            <div class="links-part">
                @if(setting('site.phone_1'))
                    <a href="tel:+1234567890">(095) 65-02-810</a>
                @endif
                @if(setting('site.phone_2'))
                    <a href="tel:+{{ setting('site.phone_2') }}">{{ setting('site.phone_2') }}</a>
                @endif

                @if(setting('site.email'))
                    <a href="mailto:{{ setting('site.email') }}">{{ setting('site.email') }}</a>
                @endif
            </div>
        </div>

        <div class="menu-part">
            <span class="menu-trigger"><i class="menu-ico fas fa-th"></i></span>
            <p class="menu-text menu-trigger">МЕНЮ</p>
        </div>
    </div>

    <div class="main-menu hider">
        <div class="close-btn">
            <img src="{{ asset('images/closer.png') }}" alt="">
        </div>
        <ul>
            <li><a href="{{ url('/') }}">ГЛАВНАЯ</a></li>
            <li><a href="{{ url('/numbers/cottage') }}">КОТТЕДЖИ</a></li>
            <li><a href="{{ url('/numbers/number') }}">НОМЕРА</a></li>
            <li><a href="{{ url('/numbers/sauna') }}">ДОМА С САУНОЙ</a></li>
            <li><a href="{{ url('/numbers/сhopped_houses') }}">РУБЛЕННЫЕ ДОМА</a></li>
            <li><a href="{{ url('/numbers/bathhouse') }}">БАНИ</a></li>
            <li><a href="{{ url('/numbers/discount_price') }}">ЦЕНА СО СКИДКОЙ</a></li>
            <li><a href="{{ url('/news') }}">БЛОГ</a></li>
            <li><a href="{{ url('/arbours') }}">БЕСЕДКИ</a></li>
            <li><a href="{{ url('/about') }}">О НАС</a></li>
            <li><a href="{{ url('/services') }}">УСЛУГИ</a></li>
            <li><a href="{{ url('/contacts') }}">КОНТАКТЫ</a></li>
        </ul>
    </div>
</header>

<script>

</script>