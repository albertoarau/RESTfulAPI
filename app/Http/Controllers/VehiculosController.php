<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Vehiculo;
use Illuminate\Http\Request;

class VehiculosController extends Controller {



	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return response()->json(['datos' => Vehiculo::all()], 200);
	}

	
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
			$Vehiculo = Vehiculo::find($id);

		if(!$Vehiculo){
			return response()->json(['mensaje' => 'No se encuentra este Vehiculo', 'codigo' => 404], 404);
		}
		return response()->json(['datos' => $Vehiculo], 200);
	}

	


}
