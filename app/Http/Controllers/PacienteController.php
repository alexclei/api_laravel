<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
  public function allPaciente()
	{
		$pac = DB::table('paciente')->get();
  	return response($pac, 200)->header('Access-Control-Allow-Origin', '*');
	}
	public function getPaciente($id)
	{
		$pac = DB::table('paciente')->where('id', $id)->get();
		return response()
            ->view('api.pac', ['pac' => $pac], 200)
            ->header('Content-Type', 'application/json')
            ->header('Access-Control-Allow-Origin', '*');
	}
	public function loginPaciente($login,$senha)
	{
		$pac = DB::table('paciente')->where([['login','=',$login],['senha','=',$senha]])->get();
		return $pac;
	}
	public function savePaciente(Request $request)
	{
		$input = $request->all();
		DB::table('paciente')->insert($input);
	}
	public function updatePaciente(Request $request, $id)
	{
		$input = $request->all();
		DB::table('paciente')
		 	->where('id', $id)
		 	->update($input);
	}
	public function deletePaciente($id)
	{
		DB::table('paciente')->where('id', '=', $id)->delete();
	}
}
