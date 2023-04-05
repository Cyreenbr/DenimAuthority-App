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
Route::get('/users', [App\Http\Controllers\AdminController::class, 'users']);
Route::get('/createuser', [App\Http\Controllers\AdminController::class, 'createuser']);
Route::get("/updateuserView/{id}",[AdminController::class,"updateuserview"]);
Route::post("/updateuser/{id}",[AdminController::class,"updateuser"]);
Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);

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