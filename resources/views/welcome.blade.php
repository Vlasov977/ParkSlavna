@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.min.css') }}" media="screen" />
@endsection

@section('content')

@include('partials.intro')

<h2 class="sub-header-section first">КОТТЕДЖ-ПАРК «СЛАВНА» <br>
    В С. ЧЕРНЕТЧИНА.</h2>
<h4 class="sub-header-section second">СПЕЦИАЛЬНОЕ ПРЕДЛОЖЕНИЕ</h4>
<h5 class="sub-header-section third">Акции, специальные предложения и системы скидок от коттедж-парк Славна</h5>

@include('partials.photo_report')

@include('partials.shortAbout')

@include('partials.reviews')

@include('partials.latest_publications')

@include('partials.thubnails')

@include('partials.contactForm')

@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{ asset('js/toastr.js') }}"></script>
    <script src="{{ asset('js/sly.js') }}"></script>
@endsection