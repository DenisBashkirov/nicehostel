<div class="room-card xs-sm:w-240 md-xl:w-full flex-col mx-auto xs-sm:max-w-328 md-xl:p-20 b-radius-5">

    <picture class="w-full">
        <img class="w-full b-radius-3" src="{{ asset('img/hostels/' . $room->hostel->route . '/rooms/' . $room->slug. '.jpg') }}" alt="">
    </picture>

    <p class="flex-1 mt-20 text-18 lh-120">{{ $room->name }}</p>

    <div class="flex mt-8 text-24">
        <p class="font-700">{{ number_format($room->price, 0, '', ' ') }} Р</p>
        <p class="op-30"> / сутки</p>
    </div>
    @if($room->bnovo_id)
        <div class="mt-12">
            <x-frontend.components.button.green font-size="text-18" text="Бронировать" link="{{ route('booking', $room->hostel->route) }}?&onlyrooms={{ $room->bnovo_id }}"/>
        </div>
    @endif

</div>
