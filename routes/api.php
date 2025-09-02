<?php

use App\Http\Controllers\RestaurantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/restaurants', [RestaurantController::class, 'getAllRestaurants']);
Route::get('/bookings/{restaurant_id}', [RestaurantController::class, 'getBookings']);
Route::post('/bookings', [RestaurantController::class, 'addBooking']);
