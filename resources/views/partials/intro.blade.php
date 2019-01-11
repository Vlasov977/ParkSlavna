<section class="slider-part">
    <div class="intro_slider">

        @foreach($sliders as $slider)
            <div class="intro-slider_item">
                <img src="{{ asset('storage/' . $slider->image) }}" alt="">
            </div>
        @endforeach

        {{--<div class="intro-slider_item">--}}
            {{--<img src="{{ asset('images/slide-intro.png') }}" alt="">--}}
        {{--</div>--}}

        {{--<div class="intro-slider_item">--}}
            {{--<img src="{{ asset('images/slide-intro.png') }}" alt="">--}}
        {{--</div>--}}

        {{--<div class="intro-slider_item">--}}
            {{--<img src="{{ asset('images/slide-intro.png') }}" alt="">--}}
        {{--</div>--}}
    </div>

    <div class="arrows-intro">

    </div>



    <p class="under-text">Украина, Сумская область, Ахтырский район, с.Чернетчина, ул. Монастырская, 5</p>

    <hr>
</section>