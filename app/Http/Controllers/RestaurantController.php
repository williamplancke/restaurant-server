<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
class RestaurantController extends Controller
{
    function getAllRestaurants() {
        return DB::table('restaurants')->get();
    }
    function getBookings($restaurant) {
        return DB::table('bookings')->where(['restaurant_id' => $restaurant])->get();
    }
    function addBooking(Request $request) {
        $booking = new Booking($request->all());
        $booking->save();
        return $booking;
    } 
}
