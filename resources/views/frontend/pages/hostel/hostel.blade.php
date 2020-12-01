@extends('frontend.layouts.main')

@section('main_content')

    @include('frontend.pages.hostel.title-screen')
    @include('frontend.pages.home.features')
    @include('frontend.pages.hostel.rooms')
    @include('frontend.pages.hostel.about')
    <div class="wave"></div>
    @include('frontend.sections.footer')

@endsection
