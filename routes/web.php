<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Si el usuario ya inició sesión, le mostramos las 3 tarjetas
    if (auth()->check()) {
        return view('portal');
    }
    
    // Si no ha iniciado sesión, lo mandamos directo al login
    return redirect('/san-nicolas/login');
});