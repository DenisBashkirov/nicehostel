@extends('frontend.layouts.main')

@section('main_content')

    @include('frontend.pages.hostel.header')
    @include('frontend.pages.hostel.title-screen')
    @include('frontend.pages.home.features')
    <div class="wave md-lg:mt-40px"></div>
    @include('frontend.pages.hostel.rooms')
    @if($hostel->about)
        <div class="wave_reverse"></div>
        @include('frontend.pages.hostel.about')
        <div class="wave"></div>
    @endif
    @include('frontend.sections.footer')
    <div id="map" class="w-full xs-sm:h-300px md-lg:h-300px xl:h-440px"></div>

@endsection

@section('page_scripts')
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=5a760665-b8db-4c65-ae81-bb48afbdaf64" type="text/javascript"></script>

    <script>
        let myMap;

        // Дождёмся загрузки API и готовности DOM.
        ymaps.ready(init);

        function init () {
            // Создание экземпляра карты и его привязка к контейнеру с
            // заданным id ("map").
            myMap = new ymaps.Map('map', {
                // При инициализации карты обязательно нужно указать
                // её центр и коэффициент масштабирования.
                center: {{ $hostel->coords }},
                zoom: 17,
                controls: ['zoomControl'],
            }, {
                searchControlProvider: 'yandex#search'
            });

            myMap.behaviors
                // Отключаем часть включенных по умолчанию поведений:
                //  - drag - перемещение карты при нажатой левой кнопки мыши;
                //  - magnifier.rightButton - увеличение области, выделенной правой кнопкой мыши.
                .disable(['scrollZoom' ,'rightMouseButtonMagnifier']);

            //на мобильных устройствах... (проверяем по userAgent браузера)
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
                //... отключаем перетаскивание карты
                myMap.behaviors.disable('drag');
            }

            let cities = {
                MoscowZemlyanoyVal: {
                    coords: [55.755251, 37.655320],
                },
                MoscowSadovayaChernogryazskaya: {
                    coords: [55.766516, 37.653424],
                },
                IvanovoProspektLenina: {
                    coords: [56.997627, 40.976391],
                },
                TumenMiussckaya: {
                    coords: [57.145983, 65.535837],
                },
                PenzaSvrdlova: {
                    coords: [53.176669, 45.006099],
                },
                KrasnogorskIlinskiyBulvar: {
                    coords: [55.817249, 37.370796],
                },
                RyazanPervomayskiyProspekt: {
                    coords: [54.629450, 39.715974],
                },
                SochiVinogradniy: {
                    coords: [43.630642, 39.716944],
                }
            }

            myMap.geoObjects
                .add(new ymaps.Placemark({{ $hostel->coords }}, {
                    balloonContent: ''
                }, {
                    preset: 'islands#redIcon',
                    iconColor: '#3caa3c'
                }
                ));

        }
    </script>

@endsection
