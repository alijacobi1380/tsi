<?php
session_start();

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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
Route::get('/changelang/{id}', function ($id) {
    if ($id == 1) {
        $_SESSION['lang'] = 'fa';
    } elseif ($id == 2) {
        $_SESSION['lang'] = 'en';
    }
    return back();
})->name('changelang');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');


//Producer routes
Route::get('/producer/products', 'App\Http\Controllers\ProducerController@getproduct')->name('producer.getproduct')->middleware('Producer');
Route::get('/producer/addproduct', 'App\Http\Controllers\ProducerController@addproduct')->name('producer.addproduct')->middleware('Producer');
Route::post('/producer/addproductcheck', 'App\Http\Controllers\ProducerController@addproductcheck')->name('producer.addproductcheck')->middleware('Producer');
Route::get('/producer/categorys', 'App\Http\Controllers\ProducerController@categorylist')->name('producer.categorylist')->middleware('Producer');
Route::get('/producer/addcategory', 'App\Http\Controllers\ProducerController@addcategory')->name('producer.addcategory')->middleware('Producer');
Route::get('/producer/deletecategory/{id}', 'App\Http\Controllers\ProducerController@deletecategory')->name('producer.deletecategory')->middleware('Producer');
Route::post('/producer/addcategorycheck', 'App\Http\Controllers\ProducerController@addcategorycheck')->name('producer.addcategorycheck')->middleware('Producer');
