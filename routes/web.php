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

Auth::routes();
//Route::resource('/home', 'HomeController');
Route::get('/product', 'ItemController@index')->name('item');
Route::get('/producto/{id}', 'ItemController@show')->name('detail-item');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/carrito/detalle-pedido','CartController@orderDetail')->name('cart.order-detail');
Route::post('carrito/agregar/producto','CartController@add')->name('cart-add');
Route::post('carrito/update/{id}','CartController@update')->name('cart-update');
Route::get('carrito/borrar/{id}','CartController@destroy')->name('cart-destroy');
Route::resource('/contacto', 'ContactController');
Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('auth')->group(function (){
    Route::resource('/dashboard', 'Admin\AdminController');
    Route::resource('/productos', 'Admin\ProductController');
    Route::resource('/categorias', 'Admin\CategoryController');
    Route::resource('/usuarios', 'Admin\UserController');
    Route::get('/variantes/colores', 'Admin\ColorController@index')->name('color');
    Route::post('/variantes/colores/create', 'Admin\ColorController@store')->name('color-create');
    Route::delete('/variantes/colores/delete/{id}', 'Admin\ColorController@destroy')->name('color-delete');
    Route::get('/variantes/sizes', 'Admin\SizeController@index')->name('size');
    Route::post('/variantes/talle/create', 'Admin\SizeController@store')->name('size-create');
    Route::delete('/variantes/talle/delete/{id}', 'Admin\SizeController@destroy')->name('size-delete');
    //-----Buscadores------
    Route::get('/user/{name}', 'Admin\UserController@index')->name('user_filter');
    Route::get('/filter-product', 'Admin\ProductController@index')->name('product_filter');
    Route::get('/user/{name}', 'Admin\UserController@index')->name('user_filter');
    //----EXPORT TO EXCEL-----
    Route::get('/user-excel', 'Admin\ExportController@user')->name('export_user');
    Route::get('/products-excel', 'Admin\ExportController@product')->name('export_product');
    Route::get('/categories-excel', 'Admin\ExportController@category')->name('export_category');
    Route::get('/color-excel', 'Admin\ExportController@color')->name('export_color');
    Route::get('/size-excel', 'Admin\ExportController@size')->name('export_size');

});
