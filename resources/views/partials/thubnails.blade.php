<section class="thumbnails">
    <div class="container-fluid">
        <div class="wrapper-thubnails">
            <div class="row">

                <div class="col-md-4 wrapper-thubnail-item">
                    <div class="thubnails-item thubnails-item-info">
                        <h5 class="thubnails-item-info-heading">Недавно добавленные фото</h5>
                        <p class="thubnails-item-info-content">
                            Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.
                            Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение
                            шаблона, а также реальное распределение букв и пробелов в абзацах, которое не
                            получается при простой дубликации
                            "Здесь ваш текст.. Здесь ваш текст.. Здесь
                            ваш текст.."
                        </p>
                    </div>
                </div>

                @foreach($photos as $photo)

                    <div class="col-md-4 wrapper-thubnail-item">
                        <div class="thubnails-item thubnails-hover-item">
                            <img src="{{ asset('storage/' . $photo) }}" alt="photo">

                            <div class="thubnails-item-hidden-zoom">
                                <a data-fancybox="gallery" data-trigger="gallery"
                                   href="{{ asset('storage/' . $photo) }}">
                                    <i class="fas fa-search-plus"></i>
                                    <p class="thubnails-text-zoom">Нажмите чтобы увеличить</p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="wrapper-button-all-photos">
            <a class="button-all-photos" href="{{ url('/albums') }}">СМОТРЕТЬ ВСЕ ФОТО</a>
        </div>
    </div>
</section>