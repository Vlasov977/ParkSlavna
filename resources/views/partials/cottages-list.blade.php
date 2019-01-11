<div class="wrapper-cottages-list">

    @foreach($numbers as $number)
        <section class="photo_report latest_publication cottagges_one_item">
            <div class="container full_cr">
                <div class="latest_publication_slider_item">
                    <div class="flexx">
                        <div class="block_text">
                            <div class="row">
                                <div class="col-xl-8 col-lg-7 main_head">
                                    <a href="{{ url('/number', $number->id) }}"><h3>{{ $number->name }}</h3></a>
                                </div>
                                <div class="col-xl-4 col-lg-5 main_link">
                                    <a href="{{ url('/number', $number->id) }}">Подробнее</a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-10 text_one_item">
                                    {!! $number->body !!}
                                </div>
                                <div class="col-xl-2 link_one_item">

                                    @if(setting('site.facebook_link'))
                                        <div class="link_one_item_a">
                                            <a href="{{ setting('site.facebook_link') }}">f</a>
                                        </div>
                                    @endif

                                    @if(setting('site.instagram_link'))
                                        <div class="link_one_item_a">
                                            <a href="{{ setting('site.instagram_link') }}">i</a>
                                        </div>
                                    @endif

                                    @if(setting('site.google_link'))
                                        <div class="link_one_item_a">
                                            <a href="{{ setting('site.google_link') }}">g</a>
                                        </div>
                                    @endif

                                </div>
                            </div>

                            <div class="row photo_report_panel">
                                <div class="col-xl-6 item_prise_div">
                                    <div class="weekday_price">
                                        Будний <span>{{ $number->price_weekday }}</span> грн
                                    </div>
                                    <div class="output_price">
                                        Выходной <span>{{ $number->price_holiday }}</span> грн
                                    </div>
                                </div>
                                <div class="col-xl-6 photo_report_link">
                                    <a href="{{ url('/reservation') }}">Забронировать</a>
                                </div>
                            </div>
                        </div>
                        <div class="block_img">
                            <a href="{{ url('/number', $number->id) }}"><img src="{{ asset('storage/' . $number->image) }}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
</div>