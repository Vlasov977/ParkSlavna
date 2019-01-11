<header>
    <div class="container">
        <div class="header-body">
            <div class="logo">
                <a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
            </div>
            <div class="information_part">
                <div class="top-part">
                    <div class="social-block">
                        <a class="social-item" target="_blank" href="{{ Voyager::setting('facebook_link') }}"><i class="fo fab fa-facebook-f"></i></a>
                        <a class="social-item" target="_blank" href="{{ Voyager::setting('linked_link') }}"><i class="fo fab fa-linkedin"></i></a>
                        <a class="social-item last" target="_blank" href="{{ Voyager::setting('twitter_link') }}"><i class="fo fab fa-twitter"></i></a>
                    </div>

                    <div class="lang-handler">
                        <div class="heandler-body">
                            <a href="{{ url('/language/en') }}" class="handler-item eng  @if ( Config::get('app.locale') == 'en') active @endif">En</a>
                            <a href="{{ url('/language/ch') }}" class="handler-item ch last @if ( Config::get('app.locale') == 'ch') active @endif">Ch</a>
                            <a href="{{ url('/language/ru') }}" class="handler-item ru @if ( Config::get('app.locale') == 'ru') active @endif">Ру</a>
                            <a href="{{ url('/language/az') }}" class="handler-item kz @if ( Config::get('app.locale') == 'az') active @endif">Kz</a>
                        </div>
                    </div>
                </div>
                <div class="bottom-part">
                    <div class="telefons-block">
                        <span class="telefon-logo"><i class="fas fa-phone"></i></span>
                        <a href="tel:{{ Voyager::setting('first_phone') }}" class="telefon-text">{{ Voyager::setting('first_phone') }}</a>
                        <a href="tel:{{ Voyager::setting('second_phone') }}" class="telefon-text">{{ Voyager::setting('second_phone') }}</a>

                    </div>

                    <div class="email-block">
                        <span class="e-mail-logo"><i class="fas fa-envelope"></i></span>
                        <a href="mailto:{{ Voyager::setting('email') }}" class="e-mail-text"> {{ Voyager::setting('email') }}</a>
                    </div>
                </div>
            </div>

            <div class="menu part">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>

        </div>
    </div>
</header>