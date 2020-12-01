<div class="title-screen flex items-center xs-sm:h-468px md-xl:h-600px text-white">
    <picture class="overlay">
        <img class="overlay h-full object-cover" src="{{ asset('img/hostels/' . $hostel->route . '/background.jpg') }}" alt="Nicehostel {{ $hostel->city }}">
    </picture>
    <div class="title-screen__overlay overlay"></div>
    <div class="container md-lg:text-center">

        <h1 class="inline-block xs-sm:text-40 md-xl:text-64 pb-8 mb-8 font-900 uppercase b-bottom-3 b-style-solid" style="border-color: #fff">Nicehostel</h1>
        <p class="xs-sm:text-24 md-xl:text-36">г. {{ $hostel->city . ' ' . $hostel->address }}</p>

        <div class="mt-40">
            <x-frontend.components.button.green color="green-0" font-size="xs-sm:text-18 md-xl:text-20" text="Номера и цены" link="#"/>
        </div>

    </div>
</div>
