@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.min.css') }}" media="screen" />
@endsection

@section('content')
    @include('partials.thubnails-about')

    @include('partials.latest_publications')

    @include('partials.thubnails')

    @include('partials.contactForm')
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
@endsection