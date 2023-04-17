<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

// Route for the home page
Route::get('/', function () {
    if (Auth::guest()) {
        return view('auth.login');
    } else {
        return view('welcome');
    }
});


Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'redirects']);
Route::get('/NewUser', [App\Http\Controllers\AdminController::class, 'NewUser']);
Route::get('/users', [App\Http\Controllers\AdminController::class, 'users']);
Route::get('/UserProfile', [App\Http\Controllers\HomeController::class, 'UserProfile']);
Route::get('/createuser', [App\Http\Controllers\AdminController::class, 'createuser']);
Route::get("/updateuserView/{id}",[AdminController::class,"updateuserview"]);
Route::post("/updateuser/{id}",[AdminController::class,"updateuser"]);
Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);

//Vente route 
Route::get('/table_détails_vente', [App\Http\Controllers\HomeController::class, 'tableVente']);
Route::get('/vente', [App\Http\Controllers\HomeController::class, 'vente']);

//Achat route 
Route::get('/table_détails_achat', [App\Http\Controllers\HomeController::class, 'tableAchat']);
Route::get('/achat', [App\Http\Controllers\HomeController::class, 'achat']);

//Stock route 
Route::get('/stock', [App\Http\Controllers\HomeController::class, 'stock']);

//2emeChoix route 
Route::get('/2emeChoix', [App\Http\Controllers\HomeController::class, 'DeuxiemeChoix']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');
});

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
