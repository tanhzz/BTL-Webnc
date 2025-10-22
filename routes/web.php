<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoomController;


Route::resource('rooms', RoomController::class);


Route::resource('customers', CustomerController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    $totalRooms = \App\Models\Room::count();
    $totalAvailable = \App\Models\Room::where('status', 'available')->count();
    $totalCustomers = \App\Models\Customer::count();
    return view('dashboard', compact('totalRooms', 'totalAvailable', 'totalCustomers'));
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

?>