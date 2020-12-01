@if(env('APP_ENV') == 'production')
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css/framework.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
@endif
<link rel="stylesheet" href="{{ asset('fonts/icons/style.css') }}">
