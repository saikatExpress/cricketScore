<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\ErrorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend/index');
});

Route::get('/register', [AuthController::class, 'register'])->name('register.us');

Route::post('/registation', [AuthController::class, 'registationCreate'])->name('registation.us');

Route::get('/login', [AuthController::class, 'login'])->name('login.us');
Route::post('/login/create', [UserController::class, 'loginCreate'])->name('login.create');

// For Error page route
Route::get('/custom-error', [ErrorController::class, 'errorMsg'])->name('custom.us');

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [Admincontroller::class, 'adminHome'])->name('admin.home');
    Route::get('/team', [TeamController::class, 'store'])->name('team.us');
});