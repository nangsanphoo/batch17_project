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
Route::get('loginpage', 'FrontendController@loginfun')->name('loginpage');
Route::get('/', 'FrontendController@mainfun')->name('mainpage');
Route::get('/partner', 'FrontendController@partnerfun')->name('partnerpage');
Route::get('viewdetail/{id}', 'FrontendController@viewdetailfun')->name('viewdetailpage');


<<<<<<< HEAD

Route::get('/contact', 'FrontendController@contactfun')->name('contactpage');

// Route::get('contact', 'FrontendController@contactfun')->name('contactpage');
Route::get('profile', 'FrontendController@profilefun')->name('profilepage');
=======
Route::get('/contact', 'FrontendController@contactfun')->name('contactpage');

Route::get('profile', 'FrontendController@profilefun')->name('profilepage');

>>>>>>> e4f8834ee1087501bdbdbbdf70d51d9e0c4dd2ac





Route::middleware('role:Admin')->group(function () {

	Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');

	Route::resource('members','MemberController');

});



Auth::routes();
<<<<<<< HEAD

=======
>>>>>>> e4f8834ee1087501bdbdbbdf70d51d9e0c4dd2ac

Route::get('/home', 'HomeController@index')->name('home');

