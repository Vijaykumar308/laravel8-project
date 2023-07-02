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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/mains/dashboard','dashboard.homepage')->name('home');

Route::view('users/profile','users.profile')->name('profile.view');
Route::view('users/changePassword','users.change_password')->name('profile.changePassword');