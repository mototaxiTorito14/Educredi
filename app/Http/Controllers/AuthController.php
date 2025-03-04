<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    
    public function login()
    {
        return view('modules/auth/login');
    }


    public function loggear(Request $request)
    {
        try {
            $credenciales = [
                'email' => $request->email,
                'password' => $request->password,
            ];
    
            if (Auth::attempt($credenciales)) {
                $user = Auth::user();
    
                if ($user->estado === 'activo') {
                    
                    switch ($user->rol) {
                        case 'administrador':
                            return to_route('home'); 
                        case 'caja':
                            return to_route('caja.dashboard'); 
                        case 'contador':
                            return to_route('contador.dashboard'); 
                        default:
                            return to_route('login');
                    }
                } else {
                    Auth::logout();
                    session()->flash('error', 'Tu cuenta ha sido desactivada.');
                    return redirect()->route('login'); 
                }
            } else {
                return back()->withErrors([
                    'email' => 'Las credenciales no coinciden con nuestros registros.',
                    'password' => 'Las credenciales no coinciden con nuestros registros.'
                ]);
            }
        } catch (\Exception $e) {
            Log::error('Error en el proceso de autenticación: ' . $e->getMessage());
    
            return back()->withErrors([
                'error' => 'Ocurrió un error inesperado. Por favor, intente nuevamente más tarde.'
            ]);
        }
    }
    

    public function home()
    {
        return view('modules/dashboard/home');
    }
}
