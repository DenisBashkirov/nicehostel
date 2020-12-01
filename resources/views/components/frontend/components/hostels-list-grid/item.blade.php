<div class="hostels-list-grid__item flex-col w-full mx-auto xs-sm:max-w-328 md-xl:p-20 b-radius-5">

    <picture class="hostels-list-grid__item-img w-full">
        <img class="b-radius-3" src="{{ asset('img/hostels/' . $hostel->route . '/background.jpg') }}" alt="">
    </picture>

    <p class="hostels-list-grid__item-city mt-20 text-24 font-700 lh-120">{{ $hostel->city }}</p>

    <p class="hostels-list-grid__item-address flex-1 mt-8 xs:text-20 sm-xl:text-24">{{ $hostel->address }}</p>

    <div class="mt-20">
        <x-frontend.components.button.green font-size="text-18" text="Подробнее" link="{{ route('hostel', $hostel->route) }}"/>
    </div>

</div>
