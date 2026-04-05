<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal - Sistema de Gestión</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">
    <div class="max-w-7xl w-full p-6">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-2">Sistema de Gestión</h1>
        <p class="text-center text-gray-500 mb-10">Hola, {{ auth()->user()->name }}. Selecciona un panel para administrar.</p>

        <div class="flex flex-wrap justify-center gap-6">
            @if(auth()->user()->is_admin || auth()->user()->acceso_san_nicolas)
            <a href="/san-nicolas" class="block w-full max-w-sm p-8 bg-white rounded-2xl shadow-sm border-t-4 border-emerald-700 hover:shadow-lg transition-all transform hover:-translate-y-1">
                <h2 class="text-2xl font-bold text-emerald-700  mb-2">San Nicolás</h2>
                <p class="text-gray-600 text-sm">Gestión general de la iglesia, control de ofrendas, donaciones y gastos.</p>
            </a>
            @endif

            @if(auth()->user()->is_admin || auth()->user()->acceso_woodmont)
            <a href="/woodmont" class="block w-full max-w-sm p-8 bg-white rounded-2xl shadow-sm border-t-4 border-blue-700 hover:shadow-lg transition-all transform hover:-translate-y-1">
                <h2 class="text-2xl font-bold text-blue-700 mb-2">Woodmont</h2>
                <p class="text-gray-600 text-sm">Administración del programa de becas Woodmont y sus beneficiarios.</p>
            </a>
            @endif

            @if(auth()->user()->is_admin || auth()->user()->acceso_mckinney)
            <a href="/mckinney" class="block w-full max-w-sm p-8 bg-white rounded-2xl shadow-sm border-t-4 border-rose-700 hover:shadow-lg transition-all transform hover:-translate-y-1">
                <h2 class="text-2xl font-bold text-rose-700 mb-2">McKinney</h2>
                <p class="text-gray-600 text-sm">Administración del programa Milagro de Jesús y sus becarios.</p>
            </a>
            @endif
        </div>

        <div class="mt-12 text-center">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="text-gray-400 hover:text-red-500 font-medium transition-colors">Cerrar Sesión</button>
            </form>
        </div>
    </div>
</body>
</html>