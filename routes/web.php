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
    return view('welcome');
});

Route::post('/test/get_data1','Controller@test1');
Route::post('/test/get_data2','Controller@test2');
Route::post('/test/get_data3','Controller@test3');
Route::post('/test/get_data4','Controller@test4');

// Route::post('/ttt', function () {
//     echo "tttttttttttttttttttt";
// });

// Route::post('/test/gets', function () {
//     echo "tttttttttttttttttttt";
// });