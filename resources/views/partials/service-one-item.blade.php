<section class="photo_report latest_publication cottagges_one_item">
    <div class="container full_cr">

        <div class="">

            <div class="latest_publication_slider_item">

                @foreach($services as $service)

                    <div class="flexx" id="service-item-foreach">
                        <div class="block_text">
                            <div class="row">
                                <div class="col-xl-8 col-lg-7 main_head">
                                    <h3>{{ $service->name }}</h3>
                                </div>
                                <div class="col-xl-4 col-lg-5 main_link">
                                    <a class="service-more" href="#">Подробнее</a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-10">
                                    <div class="text_one_item">
                                        {!! $service->body !!}
                                    </div>
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
                                <div class="col-xl-12 photo_report_link">
                                    <a href="{{ url('/contacts') }}">Задать вопрос</a>
                                </div>
                            </div>
                        </div>
                        <div class="block_img">
                            <img src="{{ asset('storage/' . $service->image) }}">
                        </div>
                    </div>

                @endforeach
            </div>

        </div>
    </div>
</section>