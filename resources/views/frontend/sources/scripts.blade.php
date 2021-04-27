<script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
<script src="{{ asset('libs/jquery.easing/jquery.easing.1.3.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

@if(env('APP_ENV') == 'production')
    <script type="text/javascript" src="//api.venyoo.ru/wnew.js?wc=venyoo/default/science&widget_id=6755342139790973"></script>
@endif
