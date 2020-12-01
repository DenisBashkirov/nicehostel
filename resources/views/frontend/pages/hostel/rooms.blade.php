<div class="wave md-lg:mt-40px"></div>

<div class="bg-grey-0 pt-20 xl:pb-80 z-2">

    <div class="container">

        <h2 class="xs-sm:text-30 md-xl:text-48 font-700">Комнаты и цены</h2>

        <div class="hostels-list-grid grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x xs-lg:gap-y-40 xl:gap-y-60 xs-md:mt-40px lg-xl:mt-60px">

            @for($i = 1; $i <= 8; $i++)
                <x-frontend.room-card/>
            @endfor

        </div>

    </div>

</div>

<div class="wave_reverse md-lg:mt-40px"></div>
