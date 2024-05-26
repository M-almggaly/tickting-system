<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/customer/new-ticket', function () {
    return view('customer/new-ticket');
})->middleware(['auth', 'verified'])->name('new-ticket');


Route::get('/admin/index',[adminController:: class,'index'])->name('admin.index');
Route::get('/admin/login',[adminController:: class,'useradd'])->name('admin.login');
Route::get('/admin/dangerous',[adminController:: class,'dangerous'])->name('admin.dangerous');
Route::get('/admin/normal',[adminController:: class,'normal'])->name('admin.normal');
Route::get('/admin/Urgent',[adminController:: class,'Urgent'])->name('admin.Urgent');
Route::get('/admin/indechartsx',[adminController:: class,'charts'])->name('admin.charts');
Route::get('/admin/tables',[adminController:: class,'tables'])->name('admin.tables');
Route::get('/user/new-ticket',[UserController:: class,'create'])->name('user.create');
Route::get('/user/show-ticket',[UserController::class, 'index'])->name('user-show-ticket');
Route::get('/show-ticket',[TicketController::class, 'index'])->name('customer.show');
Route::get('/customer/new-ticket',[TicketController:: class,'create'])->name('customer.create');
Route::post('/new-ticket',[TicketController:: class,'store'])->name('new-ticket.store');
Route::post('/show-ticket', [TicketController:: class, 'showTicket'])->name('show.ticket');
Route::put('/show-ticket/{id}', [TicketController::class, 'update'])->name('show-ticket.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
