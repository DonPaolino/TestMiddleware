<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use App\Http\Middleware\LogRequestsMiddleware;


Route::get('/', function () {
    return view('welcome');
});

// Mostra la pagina di login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
//Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*Route::middleware('auth')->get('/dashboard', function () {
    return response()->json(['message' => 'Benvenuto nella dashboard', 'user' => Auth::user()]);
});*/

// Dashboard protetta da middleware 'auth'
Route::middleware('auth')->get('/dashboard', function () {
    return view('auth.dashboard');
});


Route::middleware([LogRequestsMiddleware::class])->get('/dashboard', function () {
    return view('auth.dashboard');
});