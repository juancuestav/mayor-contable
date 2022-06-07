<?php

namespace App\Http\Controllers;

use App\Http\Resources\TmaPlanctaResource;
use App\Models\TmaPlancta;
use Illuminate\Http\Request;
use Src\App\TmaPlancta\ObtenerCodigoCuenta;

class TmaPlanCtaController extends Controller
{
	/**
	 * Listar todas las cuentas
	 */
	public function listar(Request $request)
	{
		$codigo = $request['search'];

		if ($codigo) {
			$results = [...TmaPlancta::all()->filter(fn ($cuenta) => $codigo == (new ObtenerCodigoCuenta($cuenta))())];
		} else {
			$results = TmaPlanctaResource::collection(TmaPlancta::all());
		}

		return response()->json(compact('results'));
	}


	/**
	 * Consultar una cuenta
	 */
	public function show(Request $request, TmaPlancta $cuenta)
	{
		return response()->json(['modelo' => $cuenta]);
	}
}
