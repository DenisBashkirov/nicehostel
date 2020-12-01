<div class="wave md-lg:mt-40px"></div>

<div class="bg-grey-0 xs-sm:pb-20 md-xl:pb-40 pt-20 z-2" id="hostels">

    <div class="container">

        <h2 class="xs-sm:text-30 md-xl:text-48 font-700">Наши хостелы</h2>

        <div class="hostels-list-grid grid md:grid-cols-2 lg-xl:grid-cols-3 gap-x xs-lg:gap-y-40 xl:gap-y-60 xs-md:mt-40px lg-xl:mt-60px">

            @foreach($hostels as $hostel)
                <x-frontend.components.hostels-list-grid.item :hostel="$hostel"/>
            @endforeach

        </div>

    </div>

</div>
