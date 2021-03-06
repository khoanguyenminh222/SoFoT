<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*;
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\LoginController@index');

Route::post('/login', 'App\Http\Controllers\LoginController@login')->name('login');

Route::post('/register', 'App\Http\Controllers\LoginController@register')->name('register');

Route::get('/trangchu', 'App\Http\Controllers\HomeController@index')->name('trangchu');

Route::get('/test', function(){
    return view('trangchu');
});