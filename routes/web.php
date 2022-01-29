<?php

use Illuminate\Support\Facades\Auth;
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

// ## Drives routes ##
//display all drives
 
Route::get('drives',"DriveController@index")->name('drives.index');

// to Go create page
Route::get('drives/create',"DriveController@create")->name('drives.create');
// to insert dataBase
Route::post('drives/create',"DriveController@store")->name('drives.store');
// display one item
Route::get('drives/show/{id}',"DriveController@show")->name('drives.show');

// to go edit page
Route::get('drives/edit/{id}',"DriveController@edit")->name('drives.edit');

// to go edit page

Route::post('drives/edit/{id}',"DriveController@update")->name('drives.update');

// remove items from database

Route::get('drives/destroy/{id}',"DriveController@destroy")->name('drives.destroy');
// download items from database

Route::get('drives/download/{id}',"DriveController@download")->name('drives.download');
##### end route Drives ####### 


