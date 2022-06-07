<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetDiario extends Model
{
	use HasFactory;
	protected $table = 'det_diario';
	protected $primaryKey = 'cc_seqmov';
	public $timestamps = false;

	// Tipo de movimiento
	const DEBITO = 1;
	const CREDITO = 2;

	// Relacion uno a uno
	public function det_diariodet()
	{
		return $this->hasOne(DetDiarioDet::class, 'cc_seqmov');
	}

	// Relacion uno a muchos (inversa)
	public function tma_plancta()
	{
		return $this->belongsTo(TmaPlancta::class, 'cc_seqcta');
	}

	// Scopes
	public function scopeFechaEntre($query, $desde, $hasta)
	{
		return $query->where('cc_fechamov', '>=', $desde)->where('cc_fechamov', '<=', $hasta);
	}

	// Scopes
	public function scopeFechaMenor($query, $fecha)
	{
		return $query->where('cc_fechamov', '<', $fecha);
	}
}
