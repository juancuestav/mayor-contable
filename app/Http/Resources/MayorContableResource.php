<?php

namespace App\Http\Resources;

use App\Models\DetDiario;
use Illuminate\Http\Resources\Json\JsonResource;
use Src\App\MayorContable\CalcularSaldoDetDiario;

class MayorContableResource extends JsonResource
{
	public $saldo_calculado;
	public $saldo_anterior;

	public function __construct($resource, &$saldo_anterior)
	{
		parent::__construct($resource);
		$this->saldo_anterior = &$saldo_anterior;
		$this->saldo_calculado = $this->calcularSaldo();
		$saldo_anterior = $this->saldo_calculado;
	}
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
	 */
	public function toArray($request)
	{
		return [
			'diario' => $this->cc_aniomes . '-' . $this->cc_numcom,
			'fecha' => $this->cc_fechamov,
			'ref' => 0,
			'debito' => $this->when($this->cc_tipope == DetDiario::DEBITO, priceFormat($this->cc_valor)),
			'credito' => $this->when($this->cc_tipope == DetDiario::CREDITO, priceFormat($this->cc_valor)),
			'detalle' => $this->det_diariodet->cc_detalle,
			'saldo' => priceFormat($this->saldo_calculado),
		];
	}

	private function calcularSaldo()
	{
		return (new CalcularSaldoDetDiario($this->saldo_anterior, $this->cc_tipope, $this->cc_valor))();
	}
}
