<div class="bg-grey-0 xs-sm:pb-20 md:pb-32 lg-xl:pb-40 pt-20 z-2">

    <div class="container">

        <h2 class="xs-sm:text-30 md-xl:text-48 font-700">Комнаты и цены</h2>

        <div class="hostels-list-grid grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x xs-lg:gap-y-40 xl:gap-y-60 xs-md:mt-40px lg-xl:mt-60px">

            @foreach($rooms as $room)
                <x-frontend.room-card :room="$room"/>
            @endforeach

        </div>

    </div>

</div>
