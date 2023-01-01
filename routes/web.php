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
Route::get('/producer/dashboard', 'App\Http\Controllers\ProducerController@dashboard')->name('producer.dashboard')->middleware('Producer');
Route::get('/producer/payments', 'App\Http\Controllers\ProducerController@payments')->name('producer.payments')->middleware('Producer');
Route::get('/producer/products', 'App\Http\Controllers\ProducerController@getproduct')->name('producer.getproduct')->middleware('Producer', 'factor');
Route::get('/producer/addproduct', 'App\Http\Controllers\ProducerController@addproduct')->name('producer.addproduct')->middleware('Producer', 'factor');
Route::post('/producer/addproductcheck', 'App\Http\Controllers\ProducerController@addproductcheck')->name('producer.addproductcheck')->middleware('Producer', 'factor');
Route::get('/producer/payfactor', 'App\Http\Controllers\ProducerController@payfactor')->name('producer.payfactor')->middleware('Producer');
Route::get('/producer/paygo', 'App\Http\Controllers\ProducerController@paygo')->name('producer.paygo')->middleware('Producer');
Route::get('/producer/verifypay', 'App\Http\Controllers\ProducerController@verifypay')->name('producer.verifypay')->middleware('Producer');
