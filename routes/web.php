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

Route::get('/hostels/{hostel}', ['uses' => 'Frontend\FrontendOutputController@hostel', 'as' => 'hostel']);
Route::get('/{hostel}/booking', ['uses' => 'Frontend\FrontendOutputController@booking', 'as' => 'booking']);
