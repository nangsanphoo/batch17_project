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

// Route::get('/', function () {
//     return view('welcome');
//     //return 'Hello Laravel';

// });

Route::get('/registerpage', 'FrontendController@registerfun')->name('registerpage');
Route::get('/loginpage', 'FrontendController@loginfun')->name('loginpage');
Route::get('/', 'FrontendController@mainfun')->name('mainpage');
Route::get('/partner', 'FrontendController@partnerfun')->name('partnerpage');
Route::get('viewdetail/{id}', 'FrontendController@viewdetailfun')->name('viewdetailpage');

<<<<<<< HEAD
Route::post('payment','FrontendController@paymentfun')->name('paymentpage');
=======
Route::get('match', 'FrontendController@matchfun')->name('matchpage');


>>>>>>> 60ad0d7bb3f522de79decacb20c80a86c13b0f56


Route::get('/contact', 'FrontendController@contactfun')->name('contactpage');

Route::post('profile', 'FrontendController@profilefun')->name('profilepage');






Route::middleware('role:Admin')->group(function () {

	Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');

	Route::resource('members','MemberController');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

