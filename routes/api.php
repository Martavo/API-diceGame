<?php

use Illuminate\Support\Facades\Route;
use Laravel\Passport\Passport;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;

/*

    Encryption keys generated successfully.
    Personal access client created successfully.
    Client ID: 1
    Client secret: TrVbhwhRrk6HZrC3mHo9UVYDojL1BNwFh7QuLr3g
    Password grant client created successfully.
    Client ID: 2
    Client secret: MXvXbSNcsC4TA1fxy7dtbGq93Nmakg6pwRA8irEk
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//estructura pendiente de ir añadiendo las rutas 
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/players', [UserController::class, 'register']);

Route::middleware('auth:api')->group(function () {

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

    Route::middleware('role:admin')->group(function () {

    });

    Route::middleware('role:player')->group(function () {

    });
});
