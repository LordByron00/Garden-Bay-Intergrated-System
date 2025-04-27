<?php
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\MenuItemController;
use  App\Http\Controllers\OrderController;


Route::get('/menu-items', [MenuItemController::class, 'index']);
Route::post('/orders', [OrderController::class, 'store']);
