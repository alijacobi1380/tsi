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


//admin routes
Route::get('/admin/dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('admin.dashboard')->middleware('Admin');
Route::get('/admin/notfications', 'App\Http\Controllers\AdminController@notfications')->name('admin.notfications')->middleware('Admin');
Route::get('/admin/deletenotfication/{id}', 'App\Http\Controllers\AdminController@deletenotfication')->name('admin.deletenotfication')->middleware('Admin');
Route::get('/admin/addnotif', 'App\Http\Controllers\AdminController@addnotif')->name('admin.addnotif')->middleware('Admin');
Route::post('/admin/addnotifcheck', 'App\Http\Controllers\AdminController@addnotifcheck')->name('admin.addnotifcheck')->middleware('Admin');
Route::get('/admin/orders', 'App\Http\Controllers\AdminController@orders')->name('admin.orders')->middleware('Admin');
Route::post('/admin/addfactor/{id}/{userid}/{username}/{serviceid}', 'App\Http\Controllers\AdminController@addfactor')->name('admin.addfactor')->middleware('Admin');
// Route::post('/admin/addserviceprice/{id}', 'App\Http\Controllers\AdminController@addserviceprice')->name('admin.addserviceprice')->middleware('Admin');








//Producer routes
Route::get('/producer/dashboard', 'App\Http\Controllers\ProducerController@dashboard')->name('producer.dashboard')->middleware('Producer');
Route::get('/producer/deleteproduct/{id}', 'App\Http\Controllers\ProducerController@deleteproduct')->name('producer.deleteproduct')->middleware('Producer');
Route::get('/producer/payments', 'App\Http\Controllers\ProducerController@payments')->name('producer.payments')->middleware('Producer');
Route::get('/producer/products', 'App\Http\Controllers\ProducerController@getproduct')->name('producer.getproduct')->middleware('Producer');
Route::get('/producer/addproduct', 'App\Http\Controllers\ProducerController@addproduct')->name('producer.addproduct')->middleware('Producer');
Route::post('/producer/addproductcheck', 'App\Http\Controllers\ProducerController@addproductcheck')->name('producer.addproductcheck')->middleware('Producer');
Route::get('/producer/vitrin', 'App\Http\Controllers\ProducerController@addvitrin')->name('producer.addvitrin')->middleware('Producer');
Route::post('/producer/addvitrincheck', 'App\Http\Controllers\ProducerController@addvitrincheck')->name('producer.addvitrincheck')->middleware('Producer');
Route::get('/producer/editproduct/{id}', 'App\Http\Controllers\ProducerController@editproduct')->name('producer.editproduct')->middleware('Producer');
Route::post('/producer/editproductcheck/{id}', 'App\Http\Controllers\ProducerController@editproductcheck')->name('producer.editproductcheck')->middleware('Producer');
Route::get('/producer/payfactor', 'App\Http\Controllers\ProducerController@payfactor')->name('producer.payfactor')->middleware('Producer');
Route::get('/producer/paygo/{id}', 'App\Http\Controllers\ProducerController@paygo')->name('producer.paygo')->middleware('Producer');
Route::get('/producer/verifypay', 'App\Http\Controllers\ProducerController@verifypay')->name('producer.verifypay')->middleware('Producer');
Route::get('/producer/chats', 'App\Http\Controllers\ChatController@producergetchat')->name('producer.producergetchat')->middleware('Producer');
Route::get('/producer/service/{id}', 'App\Http\Controllers\ProducerController@service')->name('producer.services')->middleware('Producer');
Route::get('/producer/service/question/{id}', 'App\Http\Controllers\ProducerController@questionservice')->name('producer.questionservice')->middleware('Producer');
Route::get('/producer/tickets', 'App\Http\Controllers\ProducerController@tickets')->name('producer.tickets')->middleware('Producer');
Route::get('/producer/addticket', 'App\Http\Controllers\ProducerController@addticket')->name('producer.addticket')->middleware('Producer');
Route::post('/producer/addticketcheck', 'App\Http\Controllers\ProducerController@addticketcheck')->name('producer.addticketcheck')->middleware('Producer');
Route::post('/producer/addticketcheck/{id}', 'App\Http\Controllers\ProducerController@addticketcheckid')->name('producer.addticketcheckid')->middleware('Producer');
Route::get('/producer/showticket/{id}', 'App\Http\Controllers\ProducerController@showticket')->name('producer.showticket')->middleware('Producer');
