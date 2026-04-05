<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// 1. Mostrar el Login General
Route::get('/login', function () {
    if (auth()->check()) return redirect('/');
    return view('login');
})->name('login'); // Filament buscará esta ruta por defecto si alguien no está logueado

// 2. Procesar el Login
Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect('/'); // Lo mandamos directo a tu portal de tarjetas
    }

    return back()->withErrors(['email' => 'Las credenciales no coinciden.']);
});

// 3. Cerrar Sesión General
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

// 4. El Portal
Route::get('/', function () {
    if (!auth()->check()) return redirect('/login');
    return view('portal');
});