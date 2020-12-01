<div class="room-card flex-col mx-auto xs-sm:max-w-328 md-xl:p-20 b-radius-5">

    <picture class="w-full">
        <img class="b-radius-3" src="{{ asset('img/hostels/' . $room->hostel->route . '/rooms/' . $room->slug. '.jpg') }}" alt="">
    </picture>

    <p class="flex-1 mt-20 text-18 lh-120">{{ $room->name }}</p>

    <div class="flex mt-8 text-24">
        <p class="font-700">{{ number_format($room->price, 0, '', ' ') }} Р</p>
        <p class="op-30"> / сутки</p>
    </div>

</div>
