<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccessController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Index', function () {
    return view('Index');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});


// Admin dashboard route - protected by the CheckRole middleware for admin
Route::get('/dashboardadmin', [DashboardController::class, 'adminDashboard'])
    ->middleware('auth', 'checkRole:admin') // Apply custom middleware
    ->name('dashboard.admin');

// User dashboard route - protected by the CheckRole middleware for user
Route::get('/dashboarduser', [DashboardController::class, 'userDashboard'])
    ->middleware('auth', 'checkRole:user') // Apply custom middleware
    ->name('dashboard.user');

// Access denied route
Route::get('/access-denied', [AccessController::class, 'accessDenied'])->name('access.denied');
