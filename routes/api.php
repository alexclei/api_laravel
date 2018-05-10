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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::prefix('fisio')->group(function()
{
	Route::get('', 'FisioterapeutaController@allFisio');
	Route::get('{id}', 'FisioterapeutaController@getFisio');
	Route::post('login', 'FisioterapeutaController@loginFisio');
	Route::post('', 'FisioterapeutaController@saveFisio');
	Route::put('{id}', 'FisioterapeutaController@updateFisio');
	Route::delete('{id}', 'FisioterapeutaController@deleteFisio');
});

Route::prefix('paciente')->group(function()
{
	Route::get('', 'PacienteController@allPaciente');
	Route::get('{id}', 'PacienteController@getPaciente');
	Route::post('login', 'PacienteController@loginPaciente');
	Route::post('', 'PacienteController@savePaciente');
	Route::put('{id}', 'PacienteController@updatePaciente');
	Route::delete('{id}', 'PacienteController@deletePaciente');
});

Route::prefix('plano')->group(function()
{
	Route::get('', 'PlanoTratamentoController@allUsers');
	Route::get('{id}', 'PlanoTratamentoController@getUser');
	Route::post('', 'PlanoTratamentoController@saveUser');
	Route::put('{id}', 'PlanoTratamentoController@updateUser');
	Route::delete('{id}', 'PlanoTratamentoController@deleteUsers');
});