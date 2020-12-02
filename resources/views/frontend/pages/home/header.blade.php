<header class="header absolute xs-sm:absolute t-0 w-full z-5 text-white">

    <div class="container flex justify-between xs-sm:h-48 md-xl:h-64 flex items-center z-3">

        <div class="md-xl:flex items-center">

            <a class="header__logo" href="{{ route('home') }}">
                <picture>
                    <img class="xs-sm:h-36px md-xl:h-40" src="{{ asset('img/logo/header.png') }}" alt="Nicehostel суть уютных хостелов логотип">
                </picture>
            </a>

            <nav class="header__nav xs-sm:hidden sx-32 md-lg:ml-40px xl:ml-80px text-20">
                <a class="no-underline text-white" href="#hostels">Наши хостелы</a>
                <a class="no-underline text-white" href="#contacts">Контакты</a>
            </nav>

        </div>

        <div class="header__phone xs-sm:hidden">
            <a class="no-underline text-white text-24 font-700 hover_color-grey-10" href="tel:{{ $phone }}">{{ $phone }}</a>
        </div>

        <button class="hamburger hamburger--squeeze md-xl:hidden js-hamburger" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>

    </div>

    <div class="header__nav_mobile hidden container fixed h-screen w-full t-0 xs-sm:pt-180px z-2 js-mobile_nav">

        <div class="overlay op-85" style="background: #000"></div>

        <div class="flex justify-center ">

            <nav class="xs-sm:flex-col sy-32 text-32 font-500 text-center">
                <a class="no-underline text-white" href="#hostels">Наши хостелы</a>
                <a class="no-underline text-white" href="#contacts">Контакты</a>
            </nav>

        </div>

    </div>

</header>
