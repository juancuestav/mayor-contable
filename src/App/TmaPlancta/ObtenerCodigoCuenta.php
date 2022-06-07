<?php

namespace Src\App\TmaPlancta;

use App\Models\TmaPlancta;

class ObtenerCodigoCuenta
{
	private TmaPlancta $tmaPlancta;

	public function __construct(TmaPlancta $tmaPlancta)
	{
		$this->tmaPlancta = $tmaPlancta;
	}

	public function __invoke(): string
	{
		return $this->tmaPlancta->cc_nivel2 . $this->tmaPlancta->cc_nivel3 . $this->tmaPlancta->cc_nivel4 . $this->tmaPlancta->cc_nivel5 . $this->tmaPlancta->cc_nivel6 . $this->tmaPlancta->cc_auxiliar;
	}
}
