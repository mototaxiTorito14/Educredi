<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Roles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Verificamos que el usuario esté autenticado y tenga el rol adecuado
        if (Auth::check() && Auth::user()->rol === $role) {
            return $next($request);  // Si el rol es correcto, seguimos con la solicitud
        }

        return redirect()->route('login');  // Si no tiene el rol adecuado, redirigimos al login
    }
}