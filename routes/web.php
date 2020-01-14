<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('laptops' , 'Inventario\LaptopController@index')->name('laptops');
Route::get('laptops/create' , 'Inventario\LaptopController@create')->name('laptop.create');
Route::post('laptops/create/store' , 'Inventario\LaptopController@store')->name('laptop.store');
Route::get('laptops/edit/{id}' , 'Inventario\LaptopController@edit')->name('laptop.edit');
Route::put('laptops/update/{id}' , 'Inventario\LaptopController@update')->name('laptop.update');




