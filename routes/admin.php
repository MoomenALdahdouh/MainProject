<?php

use App\Http\Controllers\Admin\AuthAdminController;
use App\Http\Controllers\Admin\RolesAdminController;
use App\Http\Controllers\Admin\UsersAdminController;
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

            Route::prefix('roles')
                ->name('roles.')
                ->middleware(['permission:admin_roles'])
                ->controller(RolesAdminController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index')->middleware(['permission:admin_roles_read']);
                    Route::post('/', 'store')->name('store')->middleware(['permission:admin_roles_write']);
                    Route::get('create', 'create')->name('create')->middleware(['permission:admin_roles_create']);
                    Route::get('{id}/edit', 'edit')->name('edit')->middleware(['permission:admin_roles_write']);
                    Route::get('{id}/show', 'show')->name('show')->middleware(['permission:admin_roles_read']);
                    Route::post('{id}/update', 'update')->name('update')->middleware(['permission:admin_roles_write']);
                    Route::delete('{id}/delete', 'delete')->name('delete')->middleware(['permission:admin_roles_delete']);
                });

            Route::prefix('users')
                ->name('users.')
                ->middleware(['permission:admin_users'])
                ->controller(UsersAdminController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index')->middleware(['permission:admin_users_read']);
                    Route::post('/', 'store')->name('store')->middleware(['permission:admin_users_write']);
                    Route::get('create', 'create')->name('create')->middleware(['permission:admin_users_create']);
                    Route::get('{id}/edit', 'edit')->name('edit')->middleware(['permission:admin_users_write']);
                    Route::get('{id}/show', 'show')->name('show')->middleware(['permission:admin_users_read']);
                    Route::put('{id}/update', 'update')->name('update')->middleware(['permission:admin_users_write']);
                    Route::delete('{id}/delete', 'delete')->name('delete')->middleware(['permission:admin_users_delete']);
                });
        });
});

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');
