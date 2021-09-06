<?php

use Illuminate\Support\Facades\Route;
use App\Hostel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['uses' => 'Frontend\FrontendOutputController@home', 'as' => 'home']);

// новый маршрут
Route::get('/{hostel}', ['uses' => 'Frontend\FrontendOutputController@hostel', 'as' => 'hostel']);
// старый url с /hostels/ был в проекте изначально, но потом его заменили на более лаконичный, старый оставили для доступнсти размещённых ссылок
Route::get('/hostels/{hostel}', function ($hostel) {
    return redirect(route('hostel', $hostel));
});

Route::get('/{hostel}/booking', ['uses' => 'Frontend\FrontendOutputController@booking', 'as' => 'booking']);