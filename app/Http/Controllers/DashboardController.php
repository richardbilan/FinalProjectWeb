<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Admin dashboard view
    public function adminDashboard()
    {
        return view('dashboard.admin'); // Create a view for the admin dashboard
    }

    // User dashboard view
    public function userDashboard()
    {
        return view('dashboard.user'); // Create a view for the user dashboard
    }
}
