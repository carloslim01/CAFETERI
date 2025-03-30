@extends('layouts.designerhome')

@section('content')
<div class="flex p-8">

    <!-- Sección de Productos -->
    <div class="w-2/3">
        <h2 class="text-xl font-bold mb-4">GESTIÓN DE USUARIO</h2>

        <!-- Buscador -->
        <div class="mb-4">
            <input type="text" placeholder="Buscar producto..." class="p-2 border rounded w-1/2">
        </div>

        <!-- Tabla de Productos -->
        <table class="w-full bg-white shadow-md rounded">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-2 px-4">Nombres</th>
                    <th class="py-2 px-4">Apellidos</th>
                    <th class="py-2 px-4">Celular</th>
                    <th class="py-2 px-4">CI</th>
                    <th class="py-2 px-4">Rol</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí puedes iterar con Blade -->

                    <tr class="border-t">
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                    </tr>
            </tbody>
        </table>

        <!-- Botones -->
        <div class="mt-4 space-x-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded">Nuevo</button>
            <button class="bg-red-500 text-white px-4 py-2 rounded">Eliminar</button>
        </div>
    </div>

    <!-- Formulario de Edición -->
    <div class="w-1/3 pl-8">
        <h2 class="text-xl font-bold mb-4">EDITAR USUARIO</h2>
        <form class="space-y-4">

            <div>
                <label class="block font-semibold">Nombres</label>
                <input type="text" name="Nombres" placeholder="Introduzca su Nombres" class="p-2 border rounded w-full">
            </div>

            <div>
                <label class="block font-semibold">Apellidos</label>
                <input type="text" name="apellidos" placeholder="Apellidos" class="p-2 border rounded w-full">
            </div>

            <div>
                <label class="block font-semibold">Celular</label>
                <input type="number" name="Celular" placeholder="Celular" class="p-2 border rounded w-full">
            </div>

            <div>
                <label class="block font-semibold">Cedula de Identidad</label>
                <input type="number" name="Cedula de Identidad" placeholder="Cedula de Identidad" class="p-2 border rounded w-full">
            </div>

            <div>
                <label class="block font-semibold">Rol</label>
                <input type="number" name="Rol" placeholder="Rol" class="p-2 border rounded w-full">
            </div>
            <button class="bg-purple-500 text-white px-4 py-2 rounded">Editar</button>
            <button type="submit" class="bg-purple-600 text-white px-6 py-2 rounded">Actualizar</button>
        </form>
    </div>

</div>
@endsection
