@if(env('APP_ENV') == 'production')
    <link rel="stylesheet" href="{{ asset('css/critical.min.css') }}">
    <link rel="preload" href="{{ asset('css/main.min.css') }}" as="style" onload="this.rel='stylesheet'">
@else
    <link rel="stylesheet" href="{{ asset('css/framework.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
@endif
<link rel="stylesheet" href="{{ asset('fonts/icons/style.css') }}">
