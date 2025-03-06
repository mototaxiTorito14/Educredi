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
    public function handle(Request $request, Closure $next, $rol)
    {
        // Verifica si el usuario está autenticado y tiene el rol necesario
        if (!Auth::check() || Auth::user()->rol !== $rol) {
            // Si no tiene el rol adecuado, redirige a la página anterior (o a una ruta predeterminada)
            return redirect()->to(url()->previous());  // Redirige a la página donde el usuario estaba
        }

        return $next($request);
    }
}
