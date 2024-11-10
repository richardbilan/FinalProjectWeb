<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (Auth::check()) {
            // If the user's role doesn't match the required role, deny access
            if (Auth::user()->role !== $role) {
                return redirect()->route('access.denied'); // Redirect to access-denied route
            }
        }

        return $next($request);
    }
}
