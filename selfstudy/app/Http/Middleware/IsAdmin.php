<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     * Ellenőrzi, hogy be van-e jelentkezve, és admin-e a user.
     */
    public function handle(Request $request, Closure $next)
    {
        // Ha nincs belépve vagy nem admin, irányítsuk vissza mondjuk a kezdőlapra
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            return redirect('/'); 
        }

        return $next($request);
    }
}
