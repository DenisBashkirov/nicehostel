<header class="header absolute t-0 w-screen z-5 text-white">
    <div class="container flex justify-between xs-sm:h-48 md-xl:h-64 flex items-center">

        <div class="md-xl:flex items-center">

            <a class="header__logo" href="{{ route('home') }}">
                <picture>
                    <img class="xs-sm:h-36 md-xl:h-40" src="{{ asset('img/logo/header.png') }}" alt="Nicehostel суть уютных хостелов логотип">
                </picture>
            </a>

            <nav class="header__nav sx-32 xs-sm:hidden md-lg:ml-40px xl:ml-80px text-20">
                <a class="no-underline text-white" href="#">Наши хостелы</a>
                <a class="no-underline text-white" href="#">Франшиза</a>
                <a class="no-underline text-white" href="#">Контакты</a>
            </nav>

        </div>

        <div class="header__phone xs-sm:hidden">
            <a class="no-underline text-white text-24 font-700" href="tel:8 (800) 505-16-57">8 (800) 505-16-57</a>
        </div>

        <button class="hamburger md-xl:hidden" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>

    </div>
</header>
