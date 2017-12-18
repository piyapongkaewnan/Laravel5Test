<?php

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
    return view('home');
});

Route::get('about' ,'SiteController@index');

Auth::routes();

/* Type Book */
Route::resource('typebooks','TypeBooksController');
/*
//สำหรับแสดงข้อมูลทั้งหมด
Route::get('typebooks','TypeBooksController@index');

// สำหรับลบข้อมูลตาม ID ที่ส่สงค่ามา
Route::get('typebooks/destroy/{id}','TypeBooksController@destroy');

// สำหรับแก้ไขข้อมูลตาม ID ที่ส่งค่ามา
Route::get('typebooks/edit/{id}','TypeBooksController@edit');

// สำหรับแก้ไขข้อมูลตาม ID ที่ส่งค่ามา
Route::put('typebooks/edit/{id}','TypeBooksController@update');
 
 */

/* Books */
Route::resource('books','BooksController');

Route::get('/home', 'HomeController@index')->name('home');
