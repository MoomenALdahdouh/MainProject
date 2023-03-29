<?php

use App\Http\Controllers\Admin\AuthAdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest:admin')
        ->controller(AuthAdminController::class)
        ->group(function () {
            Route::prefix('auth')->name('auth.')
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::post('login', 'login')->name('login');
                });
        });

    Route::middleware('auth:admin')
        ->controller(AuthAdminController::class)
        ->group(function () {
            Route::get('logout', 'logout')->name('logout');

            Route::get('/', function () {
                return view('admin.blank');
            })->name('blank');




            Route::get('blank', function () {
                return view('admin.blank');
            })->name('blank');
        });
});

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');
