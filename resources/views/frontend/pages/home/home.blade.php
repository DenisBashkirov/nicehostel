@extends('frontend.layouts.main')

@section('main_content')

    @include('frontend.pages.home.header')
    @include('frontend.pages.home.title-screen')
    @include('frontend.pages.home.features')
    @include('frontend.pages.home.hostels')

    <div id="map" class="xs-sm:hidden w-full md-lg:h-400px xl:h-580px"></div>

    @include('frontend.sections.footer')

@endsection

@section('page_scripts')


    <script>
        

    </script>

@endsection
