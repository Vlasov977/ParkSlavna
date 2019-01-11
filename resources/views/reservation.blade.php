@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.min.css') }}" media="screen" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.min.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.theme.min.css') }}" media="screen" />
@endsection

@section('content')
    {{--@include('partials.reservation')--}}

    <section class="reservaion-form">
        <div class="container">
            <h2 class="text-reserv">Бронирование</h2>

            <form id="reservation" method="post" action="{{ action('PagesController@form_reservation') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <input name="name" value="{{ old('name') }}" type="text" class="form-control"
                           placeholder="Фио">
                </div>

                <div class="form-group">
                    <select name="cottage_id" class="form-control">
                        @foreach($numbers as $number)
                            <option value="{{ $number->id }}">{{ $number->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <input name="date_start" id="date_start" value="{{ old('date_start') }}" type="text"
                           class="form-control" size="30"
                           placeholder="Дата заезда">
                </div>


                <div class="form-group">
                    <input name="date_end" id="date_end" value="{{ old('date_end') }}" type="text"
                           class="form-control" size="30"
                           placeholder="Дата выезда">
                </div>
                <div class="form-group">
                    <input name="phone" id="phone" value="{{ old('phone') }}" type="text" class="form-control"
                           placeholder="Телефон">
                </div>

                <div class="form-group">
                    <textarea name="message" id="reserve-area" cols="30" rows="10" placeholder="Оставьте свое сообщение">{{ old('message') }}</textarea>
                </div>

                <div class="alert" style="display:none"></div>

                <button type="submit" class="reserv-span">
                    Забронировать
                </button>

            </form>
        </div>
    </section>

    @include('partials.latest_publications')

    @include('partials.thubnails')

    @include('partials.contactForm')
@endsection

@section('scripts')
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.js') }}"></script>

    <script>
        jQuery(function($){
            $( "#date_start" ).datepicker({
                dateFormat: "yy-mm-dd"
            });
            $( "#date_end" ).datepicker({
                dateFormat: "yy-mm-dd"
            });

            $("#phone").mask("+380-999-99-9999");
        });
    </script>
@endsection