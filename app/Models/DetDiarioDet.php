<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetDiarioDet extends Model
{
	use HasFactory;
	protected $table = 'det_diariodet';
	protected $primaryKey = 'cc_seqmov';
	public $timestamps = false;

	public function det_diario()
	{
		return $this->belongsTo(DetDiario::class, 'cc_seqmov');
	}
}
