<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PlanoTratamento extends Controller
{
	public function allUsers()
	{
		$pac = DB::table('paciente')->get();
  	return response($pac, 200)->header('Access-Control-Allow-Origin', '*');
	}
	public function saveUser(Request $request)
	{
		$input = $request->all();
		DB::table('paciente')->insert($input);
	}
	public function updateUser(Request $request, $id)
	{
		$input = $request->all();
		DB::table('paciente')
		 	->where('id', $id)
		 	->update($input);
	}
	public function deleteUsers($id)
	{
		DB::table('paciente')->where('id', '=', $id)->delete();
	}
}
