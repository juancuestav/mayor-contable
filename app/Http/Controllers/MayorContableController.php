<?php

namespace App\Http\Controllers;

use App\Http\Requests\MayorContableRequest;
use App\Http\Resources\MayorContableResource;
use App\Models\DetDiario;
use App\Models\TmaPlancta;
use Illuminate\Database\Eloquent\Collection;
use Inertia\Inertia;
use Src\App\MayorContable\ObtenerSaldoAnterior;

class MayorContableController extends Controller
{
	/**
	 * Pagina Vue
	 */
	public function index()
	{
		return Inertia::render('mayorContable/view/MayorContablePage.vue');
	}


	/**
	 * Consultar 
	 */
	public function filtrar(MayorContableRequest $request)
	{
		// Validar parametros
		$datos_validados = $request->validated();

		// Obtener filtros
		$cc_seqcta = $datos_validados['cc_seqcta'];
		$desde = $datos_validados['desde'];
		$hasta = $datos_validados['hasta'];

		$tmaPlancta = TmaPlancta::find($cc_seqcta);

		// Filtrar: DetDiario
		$consultado = $tmaPlancta->det_diario()->fechaEntre($desde, $hasta)->orderBy('cc_numcom', 'ASC')->get();
		$saldo_anterior =  (new ObtenerSaldoAnterior($tmaPlancta->cc_nivel1, $request))();
		$saldo_anterior_copy = $saldo_anterior;

		// Calcular saldos
		$results = new Collection([]);
		foreach ($consultado as $item) {
			$res = new MayorContableResource($item, $saldo_anterior_copy);
			$results->push($res);
		}

		// Agregar fila al inicio con saldo anterior
		$results->prepend(new Collection([
			'saldo' => priceFormat($saldo_anterior),
			'detalle' => 'SALDO ANTERIOR',
			'ref' => 'SALDO ANTERIOR'
		]));

		// Encapsular data
		$cargos = $consultado->where('cc_tipope', DetDiario::DEBITO)->sum('cc_valor');
		$creditos = $consultado->where('cc_tipope', DetDiario::CREDITO)->sum('cc_valor');

		$data = [
			'results' => $results,
			'saldo_anterior' => priceFormat($saldo_anterior),
			'cargos' => priceFormat($cargos),
			'creditos' => priceFormat($creditos),
			'saldo_actual' => priceFormat($saldo_anterior + $cargos - $creditos),
		];
		return response()->json(compact('data'));
	}
}
