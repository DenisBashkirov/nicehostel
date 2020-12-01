<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $meta_description }}">
    <title>{{ $meta_title }}</title>

    @include('frontend.sources.styles')

</head>
<body>

@include('frontend.sections.header')
@yield('main_content')

@yield('page_scripts')

</body>
</html>
