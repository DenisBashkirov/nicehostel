<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/moscow/zemlyanoy-val-38', ['uses' => 'Frontend/FrontendOutputController@zemlyanoy_val', 'as' => 'zemlyanoy_val']);
