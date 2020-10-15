<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/store_classes', 'Api\ClassController@store_classes');

Route::post('/store_partners', 'Api\ClassController@store_partners');

Route::post('/store_inquiry', 'Api\ClassController@store_inquiry');


Route::group(['prefix' => '/admin'], function () {

    Route::post('/login', 'Api\AdminController@login');
    
});