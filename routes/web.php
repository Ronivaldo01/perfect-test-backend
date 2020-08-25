<?php

use Illuminate\Support\Facades\Route;



/*
Telas para ver o funcionamento sem dados

Route::get('/', function () {
    return view('dashboard');
});
 */

Route::get('/','ProductController@index');
Route::post('/newRegister','ProductController@store');
Route::post('/newUpdate/{id}','ProductController@update');
Route::get('/editProduct/{id}','ProductController@edit');

Route::get('/new-sales','SaleController@index');
Route::post('/createSales','SaleController@store');
Route::get('/products',function(){
    return('/crud_products');
});


Route::get('/sales', function () {
    return view('crud_sales');
});
Route::get('/products', function () {
    return view('crud_products');
});
