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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'Admin','middleware'=>['auth','admin']], function(){
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('calendar', 'DashboardController@calendar')->name('calendar');
Route::resource('members', 'MembersController');
Route::resource('announcement', 'AnnouncementController');
Route::get('archive/announcement', 'AnnouncementController@archive')->name('announcement.archive');
Route::get('upcoming/announcement', 'AnnouncementController@upcoming')->name('announcement.upcoming');
Route::resource('service', 'ServiceController');
Route::resource('district', 'DistrictController');
Route::resource('event', 'EventController');
Route::get('upcoming/event','EventController@upcoming')->name('event.upcoming');
Route::get('archieve/event','EventController@archieve')->name('event.archieve');
Route::resource('theme', 'ThemeController');
Route::resource('ministry', 'MinistryController');

});
Route::group(['as'=>'members.','prefix'=>'members', 'namespace'=>'Members','middleware'=>['auth','members']], function(){
Route::get('dashboard', 'DashboardController@index')->name('dashboard');


	
});