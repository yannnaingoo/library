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

Route::get('/', 'FrontendController@category');



Route::get('dashboard', function () {
    return view('dashboard');
});

Route::resource('authors','AuthorController')->middleware('role:admin');
Route::resource('categories','CategoryController')->middleware('role:admin');
Route::resource('books','BookController')->middleware('role:admin');


Route::post('search','BookController@search')->name('books.search');

Route::resource('qty','QtyController');

Route::resource('returns','ReturnnController');

Route::resource('orders','Order');

Route::get('modern/{id}','FrontendController@modern')->name('frontend.modern') ;

Route::get('index','FrontendController@index')->name('frontend.index') ;

Route::get('allbooks','FrontendController@allbooks')->name('frontend.allbooks') ;

Route::resource('members','MemberController')->middleware('role:admin');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('borrow','BorrowController')->middleware('role:admin');



Route::post('delete','FrontendController@delete')->name('borrowdetail.delete');
