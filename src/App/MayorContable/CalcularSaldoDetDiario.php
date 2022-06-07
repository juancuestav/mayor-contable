<?php

namespace Src\App\MayorContable;

use App\Models\DetDiario;

class CalcularSaldoDetDiario
{
	private float $saldo_anterior;
	private int $cc_tipope;
	private float $cc_valor;

	public function __construct(float $saldo_anterior, int $cc_tipope, float $cc_valor)
	{
		$this->saldo_anterior = $saldo_anterior;
		$this->cc_tipope = $cc_tipope;
		$this->cc_valor = $cc_valor;
	}

	public function __invoke(): float
	{
		return match ($this->cc_tipope) {
			DetDiario::DEBITO => round($this->saldo_anterior + $this->cc_valor, 2),
			DetDiario::CREDITO => round($this->saldo_anterior - $this->cc_valor, 2)
		};
	}
}
