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

Route::resource('members', 'MembersController');

});
Route::group(['as'=>'members.','prefix'=>'members', 'namespace'=>'Members','middleware'=>['auth','members']], function(){
Route::get('dashboard', 'DashboardController@index')->name('dashboard');


	
});