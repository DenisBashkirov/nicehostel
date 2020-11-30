@extends('frontend.layouts.main')

@section('main_content')

    @include('frontend.pages.home.title-screen')
    @include('frontend.pages.home.features')
    @include('frontend.pages.home.hostels')

    <div id="map" class="xs-sm:hidden w-full md-lg:h-400px xl:h-580px"></div>

    @include('frontend.sections.footer')

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
                center: [55.76, 37.64], // Москва
                zoom: 10,
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

        }
    </script>

@endsection
