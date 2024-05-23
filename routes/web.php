<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/customer/new-ticket', function () {
    return view('customer/new-ticket');
})->middleware(['auth', 'verified'])->name('new-ticket');


Route::get('/user/show-ticket',[UserController::class, 'index']);
Route::get('/show-ticket',[TicketController::class, 'index'])->name('customer.show');
Route::get('/customer/new-ticket',[TicketController:: class,'create'])->name('customer.create');
Route::post('/new-ticket',[TicketController:: class,'store'])->name('new-ticket.store');
Route::post('/show-ticket', [TicketController:: class, 'showTicket'])->name('show.ticket');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
