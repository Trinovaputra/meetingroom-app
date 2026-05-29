<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReservationController;

Route::redirect('/', '/login');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth');

Route::middleware(['auth', 'role:admin'])
    ->group(function () {

        Route::get('/admin/dashboard',[DashboardController::class, 'admin']);
        Route::resource('/rooms', RoomController::class);
        Route::get('/admin/reservations',[ReservationController::class, 'adminIndex']
        )->name('reservations.index');
        Route::patch(
            '/reservations/{reservation}/approve',
            [ReservationController::class, 'approve']
        )->name('reservations.approve');

        Route::patch(
            '/reservations/{reservation}/reject',
            [ReservationController::class, 'reject']
        )->name('reservations.reject');

    });

Route::middleware(['auth', 'role:user'])
    ->prefix('user')
    ->name('user.')
    ->group(function () {

        Route::get('/user/dashboard',[DashboardController::class, 'user']);
        Route::resource('/reservations', ReservationController::class);

    });
