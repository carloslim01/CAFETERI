<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- Barra superior -->
    <div class="bg-green-200 p-4 flex justify-between items-center">
        <div class="flex gap-4">
            <button class="bg-white px-4 py-2 rounded">Registrar</button>
            <button class="bg-white px-4 py-2 rounded">Ajustes</button>
            <button class="bg-white px-4 py-2 rounded">Reportes</button>
        </div>
        <div class="flex gap-4">
            <button class="bg-gray-300 px-4 py-2 rounded">Minimizar</button>
            <button class="bg-red-500 text-white px-4 py-2 rounded">Cerrar</button>
        </div>
    </div>

<section class="container mx-auto px-4 py-8">
    @yield('content')

</section>

    <!-- Pie de página -->
    <footer class="text-center mt-12 p-4 bg-green-200">
        <p class="font-bold">@ Cafetería el Caffe</p>
        <p>Dir. fsdbfskbfdsjf</p>
        <p>Teléfono: 62-136458</p>
    </footer>

</body>

</html>
