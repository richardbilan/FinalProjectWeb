<?php
<<<<<<< HEAD
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccessController;
=======

>>>>>>> 83fa77939eca3119b5afe58311596bfd9846ada8
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


<<<<<<< HEAD
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
=======
>>>>>>> 83fa77939eca3119b5afe58311596bfd9846ada8
