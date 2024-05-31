<?php

use Illuminate\Support\Facades\Route;

$servicios = [
    ['titulo' => 'Desarrollo web'],
    ['titulo' => 'Diseño web'],
    ['titulo' => 'Marketing digital'],
    ['titulo' => 'Diseño web'],
    ['titulo' => 'Diseño web'],
    ['titulo' => 'Diseño web']
];

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'home')->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');
// Route::view('servicios', 'servicios', compact('servicios'))->name('servicios');
// Route::get('servicios','App\Http\Controllers\ServiciosController@servicios')->name('servicios');
Route::get('servicios','App\Http\Controllers\Servicios2Controller@index')->name('servicios');
Route::resource('servicios','App\Http\Controllers\Servicios2Controller@index');
Route::resource('servicios','App\Http\Controllers\Servicios2Controller@index')->only('index','show');
Route::resource('servicios','App\Http\Controllers\Servicios2Controller@index')->except('index','show');
Route::view('contacto', 'contacto')->name('contacto');