<section class="photo-items video_items">
    <div class="container">

        <div class="row">

            @foreach($videos as $video)
                <div class="photo-left col-lg-6">
                    <div class="wrapper-twest-hover">
                        <iframe width="560" height="315" src="{{ $video->src }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>