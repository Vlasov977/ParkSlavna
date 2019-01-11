<section class="photo_report">
    <div class="container full_cr">
        <div class="photo_report_slider">

            @foreach($photos as $photo)
                <div class="photo_report_slider_item">
                    <div class="flexx">
                        <div class="block_text">
                            <div class="block_bg_img">
                                <h3>{{ $photo->name }}</h3>
                                <p>{{ $photo->description }}</p>
                                <div class="row photo_report_panel">
                                    <div class="col-xl-4 col-md-5 photo_report_arrow">
                                        <span class="current_number_slide"></span> <span>/</span> <span
                                                class="all_number_slide"></span>
                                    </div>
                                    <div class="col-xl-8 col-md-7 photo_report_link">
                                        <a href="{{ url('/photos', $photo->id) }}">Подробней</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block_img">
                            <img src="{{ asset('storage/' . $photo->image) }}">
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>