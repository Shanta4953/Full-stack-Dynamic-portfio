<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Experience', function () {
    return view('Experience');
});

Route::get('/Services', function () {
    return view('Services');
});

Route::get('/Contact', function () {
    return view('Contact');
});


Route::get('/Projects', function () {
    return view('Projects');
});

Route::get('/Education', function () {
    return view('Education');
});




// Test route to check MySQL database
Route::get('/test-db', function () {
    $users = \App\Models\User::all();
    return "Users in MySQL 'laravel' database: " . $users->count() . "<br>" . 
           $users->map(function($user) {
               return "ID: {$user->id}, Name: {$user->name}, Email: {$user->email}, Created: {$user->created_at}";
           })->implode('<br>');
});

// Logout Route
Route::post('/logout', [AuthenticationController::class,'logout'])->name('logout');






//login route
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [AuthenticationController::class, 'login'])->name('login.post');

//register route
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::post('/register', [AuthenticationController::class, 'register'])->name('register.post');

// Logout route
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');

// Admin Dashboard (protected by authentication)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});
