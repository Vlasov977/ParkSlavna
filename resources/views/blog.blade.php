@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.min.css') }}" media="screen" />
@endsection

@section('content')
    @include ('partials.blog_list_one')

    @include('partials.thubnails')

    @include('partials.contactForm')
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
@endsection