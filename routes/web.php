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

Route::post('/userstore', [App\Http\Controllers\AdminController::class, 'userstore']);

Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'redirects']);
Route::get('/users', [App\Http\Controllers\AdminController::class, 'users'])->name('Users');
Route::get('/UserProfile', [App\Http\Controllers\HomeController::class, 'UserProfile']);
Route::get('/createuser', [App\Http\Controllers\AdminController::class, 'NewUser']);
Route::get("/updateuserView/{id}",[AdminController::class,"updateuserview"]);
Route::post("/updateuser/{id}",[AdminController::class,"updateuser"]);
Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);
Route::get("/search",[AdminController::class,"search"]);
Route::get("/searchByService/{serviceId}",[AdminController::class,"getUsersByService"]);

//Vente route 
Route::get('/table_détails_vente', [App\Http\Controllers\HomeController::class, 'tableVente']);
Route::get('/VentesDashboard', [App\Http\Controllers\HomeController::class, 'VentesDashboard']);

//Achat route 
Route::get('/table_détails_achat', [App\Http\Controllers\HomeController::class, 'tableAchat']);
Route::get('/AchatsDashboard', [App\Http\Controllers\HomeController::class, 'AchatsDashboard']);

//Stock route 
Route::get('/StockDashboard', [App\Http\Controllers\HomeController::class, 'StockDashboard']);

//Production route 
Route::get('/ProductionDashboard', [App\Http\Controllers\HomeController::class, 'ProductionDashboard']);
Route::get('/DeuxiemeChoixDashboard', [App\Http\Controllers\HomeController::class, 'DeuxiemeChoixDashboard']);


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
