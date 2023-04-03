<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('user')->name('user.')->group(function () {
    Route::middleware('auth:web')
        ->controller(AuthController::class)
        ->group(function () {
            Route::get('blank', function () {
                return view('admin.blank');
            })->name('blank');
        });

    Route::middleware('guest:web')
        ->controller(AuthController::class)
        ->group(function () {
            Route::get('login', 'login')->name('login');
        });
});

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');

Route::get('/', function () {
    return view('welcome');
});
