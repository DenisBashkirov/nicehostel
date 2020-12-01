@extends('frontend.layouts.main')

@section('main_content')

    @include('frontend.pages.hostel.title-screen')
    @include('frontend.pages.home.features')
    @include('frontend.pages.hostel.rooms')
    @if($hostel->about)
        @include('frontend.pages.hostel.about')
    @endif
    <div class="wave"></div>
    @include('frontend.sections.footer')

@endsection
