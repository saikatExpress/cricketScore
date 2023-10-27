<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\TournamentController;

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

// User Panel Route
Route::get('/cricket/home', [GameController::class, 'home'])->name('cricket.home');

// For Error page route
Route::get('/custom-error', [ErrorController::class, 'errorMsg'])->name('custom.us');

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [Admincontroller::class, 'adminHome'])->name('admin.home');
    Route::get('/calender', [Admincontroller::class, 'calenderShow'])->name('calender.us');
    Route::get('/umpire', [Admincontroller::class, 'umpireAdd'])->name('umpire.us');
    // For Team
    Route::get('/team/list', [TeamController::class, 'index'])->name('team.list');
    Route::get('/team', [TeamController::class, 'teamStore'])->name('team.us');
    Route::post('/team/add', [TeamController::class, 'store'])->name('team.store');

    // For Match
    Route::get('/cricket/match', [SportController::class, 'cricketMatch'])->name('cricket.match');
    Route::post('store/cricket', [SportController::class, 'store'])->name('cricket.store');

    // For Logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout.us');

    // For Tournament
    Route::get('/tournament', [TournamentController::class, 'show'])->name('tournament.us');
    Route::post('/tournament/store', [TournamentController::class, 'store'])->name('tournament.store');
});