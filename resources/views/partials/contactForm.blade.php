<section class="contactForm">
    <div class="container-fluid">
        <div class="row flex-repair">
            <div class="wrapper-text-left col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <h2 class="text-ua">Украина<br>
                    Сумская область<br>
                    Ахтырский район<br>
                    с. Чернетчина<br>
                    ул. Монастырська
                </h2>

                @if(setting('site.phone_1'))
                    <p class="text-p-ua padding-phone-p"><a href="tel:+{{ setting('site.phone_1') }}">{{ setting('site.phone_1') }}</a></p>
                @endif

                @if(setting('site.phone_2'))
                    <p class="text-p-ua padding-phone-p"><a href="tel:+{{ setting('site.phone_2') }}">{{ setting('site.phone_2') }}</a></p>
                @endif

                <P class="text-p-ua padding-phone-p">(05446) 3-13-36</P>
                <p class="text-p-ua  padding-phone-p"> (прием банкетов - ресторан) </p>

                <p class="text-p-ua  special-padding-top">WWW.PARK-SLAVNA.COM.UA</p>

                @if(setting('site.email'))
                    <p class="text-p-ua  padding-phone-p"><a href="mailto:{{ setting('site.email') }}">{{ setting('site.email') }}</a></p>
                @endif

                <div class="my-fafa">

                    @if(setting('site.facebook_link'))
                        <a href="{{ setting('site.facebook_link') }}">
                            <i class="fab fa-facebook-square"></i>
                            <p>facebook</p>
                        </a>
                    @endif

                    @if(setting('site.instagram_link'))
                        <a href="{{ setting('site.instagram_link') }}">
                            <i class="fab fa-instagram"></i>
                            <p>instagram</p>
                        </a>
                    @endif

                    @if(setting('site.google_link'))
                        <a href="{{ setting('site.google_link') }}">
                            <i class="fab fa-google"></i>
                            <p>google+</p>
                        </a>
                    @endif
                </div>

            </div>
            <div class="wrapper-answer-form  col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <form id="form" action="{{ action('PagesController@form_question') }}">
                    {{ csrf_field() }}

                    <h2 class="h2-text-quest">ЗАДАТЬ ВОПРОС </h2>
                    <hr>

                    <div class="input-special">
                        <input class="checkout-input" value="{{ old('name') }}" name="name" type="text" placeholder="Имя *">
                    </div>

                    <div class="input-special">
                        <input class="checkout-input" value="{{ old('email') }}" name="email" type="email" placeholder="E-mail *">
                    </div>
                    <div class="input-special">
                        <input class="checkout-input input-bot" value="{{ old('phone') }}" name="phone" type="text" placeholder="Телефон *">
                    </div>
                    <textarea placeholder=" Задайте свой вопрос" name="message" id="">
                        {{ old('message') }}
                    </textarea>

                    <p class="under-form-text">
                        Пожалуйста заполните все поля формы, и в скором времени наш<br>
                        администратор ответит на ваши вопросы.
                    </p>

                    <div class="alert" style="display:none"></div>

                    <button type="submit" class="question-span"> Задать вопрос</button>
                </form>
            </div>
        </div>
    </div>
</section>