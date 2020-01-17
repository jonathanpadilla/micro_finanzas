<?php

use Illuminate\Http\Request;

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

//Route::post('/', 'API\UserController@login');
Route::post('login', 'API\UserController@login')->name('login');
Route::post('register', 'API\UserController@register')->name('register');

Route::group(['middleware' => 'auth:api'], function(){

    Route::post('details', 'API\UserController@details');

    // movements route
    Route::group(['prefix' => 'movements'], function(){
        Route::get('/', 'API\MovementController@index')->name('movements_index');
        Route::post('/', 'API\MovementController@store');
        Route::get('{movement}', 'API\MovementController@show');
        Route::put('{movement}', 'API\MovementController@update');
        Route::delete('{movement}', 'API\MovementController@destroy');
        Route::get('{movement}/edit', 'API\MovementController@edit');
        Route::get('create', 'API\MovementController@create');
    });

    // rules route
    Route::group(['prefix' => 'rules'], function(){
        Route::get('/', 'API\RuleController@index')->name('rules_index');
        Route::post('/', 'API\RuleController@store')->name('rules_store');
        Route::get('{movement}', 'API\RuleController@show');
        Route::put('{movement}', 'API\RuleController@update');
        Route::delete('{movement}', 'API\RuleController@destroy');
        Route::get('{movement}/edit', 'API\RuleController@edit');
        Route::get('create', 'API\RuleController@create');
    });

    // movement_type route
    Route::group(['prefix' => 'movement_type'], function(){
        Route::get('/', 'API\MovementTypeController@index')->name('movement_type_index');
        Route::post('/', 'API\MovementTypeController@store')->name('movement_type_store');
        Route::get('{movement}', 'API\MovementTypeController@show');
        Route::put('{movement}', 'API\MovementTypeController@update');
        Route::delete('{movement}', 'API\MovementTypeController@destroy');
        Route::get('{movement}/edit', 'API\MovementTypeController@edit');
        Route::get('create', 'API\MovementTypeController@create');
    });

    // category route
    Route::group(['prefix' => 'category'], function(){
        Route::get('/', 'API\CategoryController@index')->name('category_index');
        Route::post('/', 'API\CategoryController@store')->name('category_store');
        Route::get('{movement}', 'API\CategoryController@show');
        Route::put('{movement}', 'API\CategoryController@update');
        Route::delete('{movement}', 'API\CategoryController@destroy');
        Route::get('{movement}/edit', 'API\CategoryController@edit');
        Route::get('create', 'API\CategoryController@create');
    });
});
