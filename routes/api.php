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
header('Access-Control-Allow-Origin: http://localhost:3000');
header('Access-Control-Allow-Methods : GET,POST,PUT,DELETE,OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');


Route::group(['middleware' => 'auth:api'], function (){
    Route::group(['prefix' => '/empresa'], function() {
        Route::get('/', 'EmpresaController@show');
        Route::post('/', 'EmpresaController@store');
    }); 
    
    Route::group(['prefix' => '/responsavel'], function() {
        Route::get('/logado','ResponsavelController@getResponsavelLogado');
    });

    Route::group (['prefix' => '/products'], function(){
        Route::get('/company/{id}', 'ProdutoController@showByIdEmpresa');
        Route::post('/', "ProdutoController@store");
    });

    Route::get('/user-authorities', 'UsuarioController@getAuthorities');
    Route::get('/setor', "SetorController@show");
       
});

