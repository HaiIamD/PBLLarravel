<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\userpageController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\rcontroller;



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
})->name('home');

Route::get('/ourteam', function () {
    return view('ourteam');
})->name('ourteam');

// Route::get('/recomendation', function () {
//     return view('recomendation');
// });


// Route::get('/form', function () {
//     return view('form');
// })->name('form');

// Route::get('/login', function () {
//     return view('login');
// })->name('login');
// Route::get('/register', function () {
//     return view('register');
// });

// LOGIN SECTION
Route::get('/login', [LoginController::class,'index'])->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

route::group(["middleware" => ['auth','ceklevel:admin']], function(){
    Route::get('/userpage', [userpageController::class,'index']);
    Route::resource('mahasiswa', MahasiswaController::class);
});
route::group(["middleware" => ['auth','ceklevel:user']], function(){
    Route::get('/userpage', [userpageController::class,'index']);
    Route::resource('recomendation', rcontroller::class);
});

Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);

// Route::get('/userpage', [userpageController::class,'index'])->middleware('auth');

// Route::resource('mahasiswa', MahasiswaController::class)->middleware('auth');
