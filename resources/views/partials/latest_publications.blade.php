<section class="photo_report latest_publication">
    <div class="container full_cr">

        <h2>Последние публикации</h2>
        <h5>Последние публикации</h5>

        <div class="latest_publication_slider latest_publication_slider_new">

            @foreach($posts as $post)
                <div class="latest_publication_slider_item">
                    <div class="flexx">
                        <div class="block_text">
                            <div class="block_bg_img">
                                <h3>{{ $post->title }}</h3>

                                <div class="wrapper-latest-bublication-text">
                                    {!! $post->body !!}
                                </div>

                                <div class="row photo_report_panel">
                                    <div class="col-xl-4 col-sm-4 latest_publication_arrow photo_report_arrow">
                                        <span class="current_number_slide"></span> <span>/</span> <span
                                                class="all_number_slide"></span>
                                    </div>
                                    <div class="col-xl-8 col-sm-8 photo_report_link">
                                        <a href="{{ url('news', $post->id ) }}">Подробней</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block_img">
                            <img src="{{ asset('storage/' . $post->image) }}">
                        </div>
                    </div>
                </div>
            @endforeach



            {{--<div class="latest_publication_slider_item">--}}
                {{--<div class="flexx">--}}
                    {{--<div class="block_text">--}}
                        {{--<div class="block_bg_img">--}}
                            {{--<h3>Идея веселого выкупа невесты</h3>--}}
                            {{--<p>--}}
                                {{--Давно выяснено, что при оценке дизайна и композици читаемый текст мешает--}}
                                {{--сосредоточиться. Lorem Ipsum используют потму, что тот обеспечиват более или менее--}}
                                {{--стандартное заполнение шаблоа, а также реальное распределиние букв и пробелов в абзацах,--}}
                                {{--которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь--}}
                                {{--ваш текст.."--}}
                            {{--</p>--}}
                            {{--<div class="row photo_report_panel">--}}
                                {{--<div class="col-xl-4 latest_publication_arrow photo_report_arrow">--}}
                                    {{--<span class="current_number_slide"></span> <span>/</span> <span--}}
                                            {{--class="all_number_slide"></span>--}}
                                {{--</div>--}}
                                {{--<div class="col-xl-8 photo_report_link">--}}
                                    {{--<a href="#">Подробней</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="block_img">--}}
                        {{--<img src="{{ asset('images/latest_publication_slider_example.png') }}">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        </div>
    </div>
</section>