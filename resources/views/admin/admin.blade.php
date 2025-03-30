@extends('layouts.designerhome')

@section('content')

    <main class="container mx-auto mt-4 p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <button type="button">
            <div class="bg-white shadow-md rounded p-4">
                <h2 class="text-xl font-semibold mb-2">Gestión de Usuario</h2>
                <p>Administra y controla usuarios.</p>
            </div>
            </button>
            <button type="button">
            <div class="bg-white shadow-md rounded p-4">
                <h2 class="text-xl font-semibold mb-2">Gestión de Inventario</h2>
                <p>Monitorea el inventario.</p>
            </div>
            </button>
            <button type="button">
            <div class="bg-white shadow-md rounded p-4">
                <h2 class="text-xl font-semibold mb-2">Gestión de Pedidos</h2>
                <p>Registra y controla los pedidos.</p>
            </div>
            </button>
            <button type="button">
            <div class="bg-white shadow-md rounded p-4">
                <h2 class="text-xl font-semibold mb-2">Gestión de Ventas</h2>
                <p>Verifica tus ventas aquí.</p>
            </div>
            </button>
            <button type="button">
            <div class="bg-white shadow-md rounded p-4">
                <h2 class="text-xl font-semibold mb-2">Gestión de Promociones</h2>
                <p>Verifica tus Promociones aquí.</p>
            </div>
            </button>
            <button type="button">
            <div class="bg-white shadow-md rounded p-4">
                <h2 class="text-xl font-semibold mb-2">Gestión de Proveedores</h2>
                <p>Verifica tus Proveedores aquí.</p>
            </div>
            </button>
            <button type="button">
            <div class="bg-white shadow-md rounded p-4">
                <h2 class="text-xl font-semibold mb-2">Gestión de Clientes</h2>
                <p>Verifica tus Clientes aquí.</p>
            </div>
            </button>
            <button type="button">
                <div class="bg-white shadow-md rounded p-4">
                    <h2 class="text-xl font-semibold mb-2">Gestión de Reportes</h2>
                    <p>Verifica tus Reportes aquí.</p>
                </div>
            </button>
        </div>
    </main>


@endsection
