<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App;

class FisioterapeutaController extends Controller
{	
	public function allFisio()
	{
		$fisio = DB::table('fisioterapeuta')->get();
		return $fisio;
	}
	public function getFisio($id)
	{
		$fisio = DB::table('fisioterapeuta')->where('id_fisioterapeuta', $id)->get();
		foreach ($fisio as $v) {
			echo response()->json($v);
		}
	}
	public function loginFisio(Request $request)
	{
		header('Content-Type: application/x-www-form-urlencoded');
		header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

		$login = $request->email;
		$senha = $request->senha;
		
		$fisio = DB::table('fisioterapeuta')->where([['login_fisioterapeuta','=',$login],['senha_fisioterapeuta','=',$senha]])->get();
		
		return response()
            ->view('api.fisio', ['fisio' => $fisio], 200);
	}
	public function saveFisio(Request $request)
	{
		$input = $request->all();
		DB::table('fisioterapeuta')->insert($input);
	}
	public function updateFisio(Request $request, $id)
	{
		$input = $request->all();
		DB::table('fisioterapeuta')
		 	->where('id_fisioterapeuta', $id)
		 	->update($input);
	}
	public function deleteFisio($id)
	{
		DB::table('fisioterapeuta')->where('id_fisioterapeuta', '=', $id)->delete();
	}
}
