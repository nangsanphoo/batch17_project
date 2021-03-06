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




Route::resource('matches', 'MatchController');
Route::get('matchjoin/{id}','FrontendController@matchjoinfun')->name('matchjoin');
Route::get('/contact', 'FrontendController@contactfun')->name('contactpage');

Route::post('profile', 'FrontendController@profilefun')->name('profilepage');

Route::resource('members','MemberController');

Route::get('memberlist','MemberListController@memberlistfun')->name('memberlistpage');

Route::get('memberreqlist','MemberListController@memberreqfun')->name('memberreqlistpage');

Route::middleware('role:Admin')->group(function () {

	Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
	Route::get('accept/{id}','MemberListController@accept')->name('accept');
	Route::resource('memberdelete','MemberDeleteController');

});
Route::middleware('role:Member')->group(function(){
	Route::get('userrequestlist','MemberListController@userrequestfun')->name('userrequestlistpage');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

