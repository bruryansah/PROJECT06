<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminOnly
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        // Pastikan user sudah login
        if (! $user) {
            return redirect()->route('login'); // atau abort(401)
        }

        // Contoh cek: kolom role di tabel users bernilai 'admin'
        // Sesuaikan dengan struktur DB-mu (mis. is_admin boolean, role_id, dsb.)
        if (isset($user->role) && $user->role === 'admin') {
            return $next($request);
        }

        // Alternatif jika pakai boolean is_admin:
        // if (isset($user->is_admin) && $user->is_admin) { ... }

        // Jika bukan admin -> blokir akses
        // Kamu bisa abort(403) atau redirect dengan pesan
        return abort(403, 'Akses ditolak — hanya untuk admin.');
        // atau:
        // return redirect()->route('home')->with('error', 'Hanya admin yang boleh mengakses halaman ini.');
    }
}
