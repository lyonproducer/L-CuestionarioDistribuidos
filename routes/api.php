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

Route::group([

    'middleware' => 'api',

], function ($router) {

    //User
    Route::get('user', 'UserController@index');
    Route::post('user', 'UserController@storeUser');
    Route::post('userResultado', 'UserController@storeResultado');

    /////////////
    //Pensamiento
    ///////////// 
    Route::get('preguntas', 'Preguntas\PensamientoController@index');
    Route::post('respuestasPensamiento', 'Preguntas\PensamientoController@storeRespuestas');

    // // Pensador 
    Route::get('preguntasPensador', 'Preguntas\PensamientoController@indexPensador');
    // // Leal 
    Route::get('preguntasLeal', 'Preguntas\PensamientoController@indexLeal');
    // // Entuasista 
    Route::get('preguntasEntusiasta', 'Preguntas\PensamientoController@indexEntusiasta');


    /////////////
    //Sentimiento
    ///////////// 
    Route::get('preguntasSentimiento', 'Preguntas\SentimientoController@index');
    Route::post('respuestasSentimiento', 'Preguntas\SentimientoController@storeRespuestas');

    // // Ayudador 
    Route::get('preguntasAyudador', 'Preguntas\SentimientoController@indexAyudador');
    // // Triunfador 
    Route::get('preguntasTriunfador', 'Preguntas\SentimientoController@indexTriunfador');
    // // Artista 
    Route::get('preguntasArtista', 'Preguntas\SentimientoController@indexArtista');

    
    /////////////
    //Instinto
    ///////////// 
    Route::get('preguntasInstinto', 'Preguntas\InstintoController@index');
    Route::post('respuestasInstinto', 'Preguntas\InstintoController@storeRespuestas');

    // // Reformador 
    Route::get('preguntasReformador', 'Preguntas\InstintoController@indexReformador');
    // // Protector 
    Route::get('preguntasProtector', 'Preguntas\InstintoController@indexProtector');
    // // Pacifico 
    Route::get('preguntasPacifico', 'Preguntas\InstintoController@indexPacifico');



});