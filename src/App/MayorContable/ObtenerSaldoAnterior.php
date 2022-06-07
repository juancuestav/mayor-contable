<?php

namespace Src\App\MayorContable;

use App\Models\DetDiario;
use App\Models\TmaPlancta;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ObtenerSaldoAnterior
{

	private Request $request;
	private int $cc_nivel1;

	public function __construct(int $cc_nivel1, Request $request)
	{
		$this->cc_nivel1 = $cc_nivel1;
		$this->request = $request;
	}

	public function __invoke(): float
	{
		$desde = $this->request['desde'];
		$cc_seqcta = $this->request['cc_seqcta'];
		$tmaPlancta = TmaPlancta::find($cc_seqcta);

		if ($this->cc_nivel1 == TmaPlancta::ACTIVO || $this->cc_nivel1 == TmaPlancta::PASIVO) {
			$det_diario = $tmaPlancta->det_diario()->fechaMenor($desde)->get();
		} else if ($this->cc_nivel1 == TmaPlancta::RESULTADOS) {
			$anio = Carbon::createFromFormat('Y-m-d', $desde)->year;
			$det_diario = $tmaPlancta->det_diario()->fechaEntre($anio . '-01-01', ($desde - 1))->get();
		}

		$suma_debitos = $det_diario->where('cc_tipope', DetDiario::DEBITO)->sum('cc_valor');
		$suma_creditos = $det_diario->where('cc_tipope', DetDiario::CREDITO)->sum('cc_valor');
		return round($suma_debitos - $suma_creditos, 2);
	}
}
