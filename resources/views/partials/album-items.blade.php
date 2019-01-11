<section class="photo-items">
    <div class="container">

        <div class="row">

            @foreach($albums as $album)

                @if ($loop->iteration % 2)
                    <div class="photo-right col-lg-6">
                        <div class="grid-fix">
                            <a class="album-link twest-1" href="{{ action('PagesController@photosAlbum', $album->id) }}"><img class="twest-1" src="{{ asset('storage/' . $album->image) }}" alt=""></a>
                            <p class="hover-item-text">
                                <a href="{{ action('PagesController@photosAlbum', $album->id) }}">
                                    {{ $album->name }}
                                </a>
                            </p>
                        </div>
                    </div>
                @else
                    <div class="photo-left col-lg-6">
                        <div class="grid-fix">
                            <a class="album-link twest-1" href="{{ action('PagesController@photosAlbum', $album->id) }}"><img class="twest-1" src="{{ asset('storage/' . $album->image) }}" alt=""></a>
                            <p class="hover-item-text">
                                <a href="{{ action('PagesController@photosAlbum', $album->id) }}">
                                    {{ $album->name }}
                                </a>
                            </p>
                        </div>
                    </div>
                @endif

            @endforeach

        </div>
    </div>
</section>