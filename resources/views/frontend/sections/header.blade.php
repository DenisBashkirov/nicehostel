<header class="header absolute t-0 w-screen z-5 text-white">
    <div class="container flex xs-sm:justify-between xs-sm:h-48 md-xl:h-64 flex items-center">

        <div>

            <div class="header__logo">
                <picture>
                    <img class="xs-sm:h-36 md-xl:h-40" src="{{ asset('img/logo/header.png') }}" alt="Nicehostel суть уютных хостелов логотип">
                </picture>
            </div>

            <nav class="header__nav xs-sm:hidden">
                <a class="no-underline text-white" href="#">Наши хостелы</a>
                <a class="no-underline text-white" href="#">Франшиза</a>
                <a class="no-underline text-white" href="#">Контакты</a>
            </nav>

        </div>

        <div class="header__phone xs-sm:hidden">
            <a class="no-underline text-white" href="tel:8 (800) 505-16-57">8 (800) 505-16-57</a>
        </div>

        <button class="hamburger md-xl:hidden" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>

    </div>
</header>
