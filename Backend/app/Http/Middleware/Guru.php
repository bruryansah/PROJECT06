<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Guru
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if (! $user) {
            return redirect()->ro   ute('login');
        }

        if (isset($user->role) && $user->role === 'guru') {
            return $next($request);
        }

        return abort(403, 'Akses ditolak — hanya untuk guru.');
    }
}
