@if(env('APP_ENV') == 'production')
    <link rel="preload" href="{{ asset('css/critical.min.css') }}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('css/main.min.css') }}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('fonts/Roboto/Roboto-Bold.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/Roboto/Roboto-Regular.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/Roboto/Roboto-Medium.woff2') }}" as="font" type="font/woff2" crossorigin>
@else
    <link rel="stylesheet" href="{{ asset('css/framework.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
@endif
<link rel="stylesheet" href="{{ asset('fonts/icons/style.css') }}">
