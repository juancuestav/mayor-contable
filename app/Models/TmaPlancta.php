<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TmaPlancta extends Model
{
	use HasFactory;
	protected $table = 'tma_plancta';
	protected $primaryKey = 'cc_seqcta';
	public $timestamps = false;

	// Tipo de cuenta
	const ACTIVO = 1;
	const PASIVO = 2;
	const RESULTADOS = 3;

	// Grupo de cuenta
	const GRUPO_1 = 1;
	const GRUPO_2 = 2;
	const GRUPO_3 = 3;
	const GRUPO_4 = 4;
	const GRUPO_5 = 5;
	const GRUPO_MOVIMIENTO = 10;

	// Clase
	const GRUPO = 'G';
	const MOVIMIENTO = 'M';


	// Relacion uno a muchos
	public function det_diario()
	{
		return $this->hasMany(DetDiario::class, 'cc_seqcta');
	}
}
