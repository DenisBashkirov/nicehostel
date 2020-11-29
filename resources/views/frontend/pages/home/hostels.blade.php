<div class="wave md-lg:mt-40px"></div>

<div class="bg-grey-0 pt-20">

    <div class="container">

        <h2 class="xs-sm:text-30 md-xl:text-48 font-700">Наши хостелы</h2>

        <div class="hostels-list-grid grid md:grid-cols-2 lg-xl:grid-cols-3 gap-x xs-lg:gap-y-40 xl:gap-y-60 xs-md:mt-40px lg-xl:mt-60px">

            @for($i = 1; $i <= 8; $i++)
                <x-frontend.components.hostels-list-grid.item/>
            @endfor

        </div>

    </div>

</div>
