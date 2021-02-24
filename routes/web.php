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

// Announcements
Route::resource('announcement', 'AnnouncementController');
Route::get('archive/announcement', 'AnnouncementController@archive')->name('announcement.archive');
Route::get('upcoming/announcement', 'AnnouncementController@upcoming')->name('announcement.upcoming');

// Services and Attendance
Route::resource('service', 'ServiceController');
Route::resource('attendance', 'AttendanceController');
Route::get('allattendance/attendance', 'AttendanceController@allattendance')->name('attendance.allattendance');
Route::get('lastsundayattendance/attendance', 'AttendanceController@lastsundayattendance')->name('attendance.lastsundayattendance');

// districts
Route::resource('district', 'DistrictController');
Route::get('active/district-member','DistrictController@active')->name('active.district-member');
Route::resource('district-member', 'DistrictMemberController');

// Events and themes
Route::resource('theme', 'ThemeController');
Route::resource('event', 'EventController');
Route::get('upcoming/event','EventController@upcoming')->name('event.upcoming');
Route::get('archieve/event','EventController@archieve')->name('event.archieve');
Route::get('todays/event','EventController@todays')->name('event.todays');

// Ministry
Route::resource('ministry', 'MinistryController');
Route::resource('ministrymember', 'MinistryMemberController');

// Family and Members
Route::resource('members', 'MembersController');
Route::resource('family', 'FamilyController');
Route::get('familygrid/family', 'FamilyController@familygrid')->name('family.familygrid');
Route::get('activefamily/family', 'FamilyController@activefamily')->name('family.activefamily');
Route::get('inactivefamily/family', 'FamilyController@inactivefamily')->name('family.inactivefamily');
Route::resource('family-member', 'MemberFamilyController');


// Givings
Route::resource('givingcategory', 'GivingCategoryController');
Route::resource('collection', 'CollectionController');
Route::get('allcollection/collection','CollectionController@allcollection')->name('collection.allcollection');
Route::get('thismonth/collection', 'CollectionController@thismonth')->name('collection.thismonth');
Route::get('annually/collection', 'CollectionController@annually')->name('collection.annually');
Route::get('quartely/collection', 'CollectionController@quartely')->name('collection.quartely');

});
Route::group(['as'=>'members.','prefix'=>'members', 'namespace'=>'Members','middleware'=>['auth','members']], function(){
Route::get('dashboard', 'DashboardController@index')->name('dashboard');


	
});