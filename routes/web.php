<?php

use Illuminate\Support\Facades\Route;

use Livewire\Volt\Volt;

Route::get('home', function () {
    return view('admin/admin');
});
Route::get('usuario', function () {
    return view('usuario/usuario');
});
Route::get('inventario', function () {
    return view('inventario/invenindex');
});
Route::get('pedido', function () {
    return view('pedido/pedidoindex');
});
Route::get('proveedor', function () {
    return view('proveedor/proveindex');
});



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
