<?php

use App\Http\Controllers\ProjectController;
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

Route::get('test', function () {
    $var = new \App\modules\Tax(6);
    return $var->item_price(1000);
});
Route::get('cost' , function() {
    $cost = new \App\MOD2\Express('300' , '100');
    return $cost->calculate('LCL' , '75');
});




Route::get('/home/user', function () {
    return view('homeuser');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::namespace('admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){


Route::resource('user','App\Http\Controllers\UserController');
Route::resource('project','App\Http\Controllers\ProjectController');
Route::resource('task','App\Http\Controllers\TaskController');


//});
