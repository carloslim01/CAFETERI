@extends('layouts.designerhome')

@section('content')
<div class="bg-white p-6 shadow-md">
    <h1 class="text-xl font-bold mb-4">GESTIÓN PEDIDO PROVEEDOR</h1>

    <div class="grid grid-cols-2 gap-8">
        <div>
            <label class="block mb-2">Buscar proveedor</label>
            <input type="text" placeholder="🔍" class="border p-2 w-full rounded">

            <h2 class="mt-6 mb-2 font-semibold">Lista de Productos</h2>
            <table class="w-full border">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-2">Producto</th>
                        <th class="p-2">Cant. Existente</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí irán los productos -->
                    <td class="py-2 px-4"></td>
                    <td class="py-2 px-4"></td>
                </tbody>
            </table>
        </div>

        <div>
            <h2 class="font-bold">Nombre del producto</h2>
            <p class="mt-4">Cantidad Existente: <span class="font-semibold">2</span></p>

            <label class="block mt-4">CANTIDAD:</label>
            <input type="number" class="border p-2 w-1/2 rounded">

            <h2 class="mt-6 mb-2 font-semibold">Producto / Cantidad</h2>
            <table class="w-full border">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-2">Producto</th>
                        <th class="p-2">Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí se mostrarán los productos seleccionados -->
                    <tr class="border-t">
                        <td class="py-2 px-4"></td>
                        <td class="py-2 px-4"></td>
                    </tr>
                </tbody>
            </table class="w-full bg-white shadow-md rounded">
            <div  class="mt-8 flex space-x-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded">Guardar y Imprimir</button>
                <button class="bg-gray-300 px-4 py-2 rounded">Cancelar</button>
            </div>
        </div>
    </div>
</div>


@endsection

