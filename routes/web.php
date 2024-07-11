<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;


Route::get('/login/index',[adminController:: class,'createe']);
Route::get('/ticket/reply', [ReplyController::class, 'index'])->name('admin.nwe-reply');
Route::delete('/tickets/{id}', [TicketController::class, 'destroy'])->middleware(['auth', 'verified'])->name('tickets.destroy');
Route::get('/',[adminController:: class,'index'])->middleware(['auth', 'verified'])->name('admin');
Route::get('/admin/login',[adminController:: class,'useradd'])->middleware(['auth', 'verified'])->name('admin.login');
Route::get('/admin/dangerous',[adminController:: class,'dangerous'])->middleware(['auth', 'verified'])->name('admin.dangerous');
Route::get('/admin/normal',[adminController:: class,'normal'])->middleware(['auth', 'verified'])->name('admin.normal');
Route::get('/admin/Urgent',[adminController:: class,'Urgent'])->middleware(['auth', 'verified'])->name('admin.Urgent');
Route::get('/admin/indechartsx',[adminController:: class,'charts'])->middleware(['auth', 'verified'])->name('admin.charts');
Route::get('/admin/tables',[adminController:: class,'tables'])->middleware(['auth', 'verified'])->name('admin.tables');
Route::get('/user/new-ticket',[UserController:: class,'create'])->middleware(['auth', 'verified'])->name('user.create');
Route::get('/user/show-ticket',[UserController::class, 'index'])->middleware(['auth', 'verified'])->name('user-show-ticket');
Route::get('/show-ticket',[TicketController::class, 'index'])->middleware(['auth', 'verified'])->name('customer.show');
Route::get('/customer/new-ticket',[TicketController:: class,'create'])->middleware(['auth', 'verified'])->name('customer.create');
Route::post('/new-ticket',[TicketController:: class,'store'])->middleware(['auth', 'verified'])->name('new-ticket.store');
Route::post('/admin-index', [TicketController:: class, 'showTicket'])->middleware(['auth', 'verified'])->name('admin.index');
Route::put('/admin/{id}', [TicketController::class, 'update'])->middleware(['auth', 'verified'])->name('admin-index.update');
Route::get('/admin/edit/{id}',[adminController:: class,'edit'])->name('admin.edit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
