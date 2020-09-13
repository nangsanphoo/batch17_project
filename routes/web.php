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
    //return 'Hello Laravel';

});
Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
Route::get('register', 'FrontendController@registerfun')->name('registerpage');
Route::get('login', 'FrontendController@loginfun')->name('loginpage');
Route::get('main', 'FrontendController@mainfun')->name('mainpage');
Route::get('partner', 'FrontendController@partnerfun')->name('partnerpage');
Route::get('viewdetail', 'FrontendController@viewdetailfun')->name('viewdetailpage');




Route::resource('members','MemberController');


