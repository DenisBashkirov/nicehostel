<div class="title-screen flex items-center xs-sm:h-468px md-xl:h-600px text-white">
    <picture class="overlay">

        <source srcset="{{ asset('img/home/title-background.webp') }}" media="(min-width: 768px)" type="image/webp">
        <source srcset="{{ asset('img/home/title-background.jpg') }}" media="(min-width: 768px)">

        <source data-srcset="{{ asset('img/home/title-background_sm@2.webp') }}" media="(-webkit-min-device-pixel-ratio: 2)" type="image/webp">
        <source data-srcset="{{ asset('img/home/title-background-sm.webp') }}" media="(-webkit-device-pixel-ratio: 1)" type="image/webp">
        <source data-srcset="{{ asset('img/home/title-background@2.jpg') }}" media="(-webkit-min-device-pixel-ratio: 2)">
        <img class="overlay w-full h-full object-cover" src="{{ asset('img/home/title-background_sm.jpg') }}" alt="Nicehostel">

    </picture>
    <div class="container md-lg:text-center">

        <h1 class="inline-block xs-sm:text-40 md-xl:text-64 pb-8 mb-8 font-900 uppercase b-bottom-3 b-style-solid" style="border-color: #fff">Nicehostel</h1>
        <p class="xs-sm:text-30 md-xl:text-48">Сеть уютных хостелов</p>

        <div class="mt-40">
            <x-frontend.components.button.green font-size="xs-sm:text-18 md-xl:text-20" text="Наши хостелы" link="#hostels"/>
        </div>

    </div>
</div>
