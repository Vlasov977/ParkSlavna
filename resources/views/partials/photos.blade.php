<section class="photos-in-album">

    <p class="albom-header">{{ $album->name }}</p>

    <div class="all-photos row">

        @if(count($photos) < 1)
            <p class="albom-header sorry">Извините, пока в данном альбоме нету фотографий!</p>
        @endif

        @foreach($all_photos as $photo)
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-fix">
                <a data-fancybox="photos" href="{{ asset('storage/' . $photo) }}">
                    <img src="{{ asset('storage/' . $photo) }}" alt="">
                </a>
            </div>
        @endforeach

    </div>
</section>