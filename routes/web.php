<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminCont;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\kontakController;
use App\Http\Controllers\profileCont;
use App\Http\Controllers\userCont;

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
})->name('login');

Route::get('admin', function () {
    return view('template');
});



Route::post('auth',[userCont::class,'auth']);
Route::get('profile',[profileCont::class,'profile'])->middleware('auth');;
Route::get('dashboard',[dashboardController::class,'view'])->middleware('auth');;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout',[userCont::class,'logout']);


Route::get('/profile',[profileCont::class,'add'])->middleware('auth');;
route::get('/profile/add',[profileCont::class,''])->middleware('auth');;
route::post('/profile/create',[profileCont::class,'create'])->middleware('auth');;


Route::get('portofolio',[profileCont::class,'show'])->middleware('auth');;
route::get('/profile/edit/{item}',[profileCont::class,'edit'])->middleware('auth');;
route::post('/profile/update/{item}',[profileCont::class,'update'])->middleware('auth');;

Route::get('/logout',function(){
    auth::logout();
    return redirect('/');

});

route::get('/viewpo',[PortofolioController::class,'show'])->middleware('auth');;
route::get('/viewpo/add',[PortofolioController::class,'add'])->middleware('auth');;
route::post('/viewpo/create',[PortofolioController::class,'create'])->middleware('auth');;
route::get('/viewpo/delete/{item}',[PortofolioController::class,'delete'])->middleware('auth');;
route::get('/viewpo/edit/{item}',[PortofolioController::class,'edit'])->middleware('auth');;
route::post('/viewpo/update/{id}',[PortofolioController::class,'update'])->middleware('auth');;

route::get('/kontak',[kontakController::class,'show'])->middleware('auth');;
route::get('/kontak/delete/{item}',[kontakController::class,'delete'])->middleware('auth');;
route::post('/kontak/create',[kontakController::class,'create'])->middleware('auth');;


