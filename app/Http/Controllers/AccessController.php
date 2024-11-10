<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessController extends Controller
{
    public function accessDenied()
    {
        return view('access-denied'); // Create a view for access denied page
    }
}
