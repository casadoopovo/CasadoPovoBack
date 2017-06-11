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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user', function (Request $request) {
    return "funcionou!";
});

Route::get('getUserToken', 'Api\AuthenticateController@authenticate');

Route::get('getVereadores', 'VereadoresController@getVereadores');

Route::get('getProposituras', function() {
	/*$data = [
		[0 => [
				'titulo' => 'Titulo 01',
				'resumo' => 'Descricao da propositura 01',
				'anexo' => 'http://transparencia.joaopessoa.pb.gov.br/wp-content/uploads/2016/10/semanario_lei_13295.pdf'
			]
		],
	]

	return response()->json($data, 200);*/
});



