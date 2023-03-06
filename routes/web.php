<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TicketController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about']);
// login&register
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);
Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store']);
// dashboard
Route::get('/listuser',[UserController::class,'index']);


Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard',[DashboardController::class,'index']);
});
Route::group(['middleware' => ['auth'=>'role:admin']], function(){
    Route::get('/addticket',[DashboardController::class,'add']);
    Route::post('/addticket',[TicketController::class,'storeticket']);
    Route::get('/buyticket',[DashboardController::class,'buy']);
    Route::get('/generate',[DashboardController::class,'generate']);
    Route::get('buy/{id}',[TicketController::class,'beli']);

});
Route::group(['middleware' => ['auth'=>'role:operator']], function(){
    Route::get('/addticket2',[DashboardController::class,'add']);
    Route::post('/addticket@',[TicketController::class,'storeticket']);
    Route::get('/buyticket2',[DashboardController::class,'buy']);
    Route::get('/buy-op',[TicketController::class,'beli']);
});
Route::group(['middleware' => ['auth'=>'role:customer']], function(){
    Route::get('/buyticket3',[DashboardController::class,'buy']);
    Route::get('/buy-cs',[TicketController::class,'beli']);

});


Route::get('/dashboard', function () {
return view('dashboard.index');
})->middleware('auth');


// crud
route::get('edit/{id}',[UserController::class,'edit']);
route::put('update/{id}',[UserController::class,'update']);
route::get('delete/{id}',[UserController::class,'destroy']);
