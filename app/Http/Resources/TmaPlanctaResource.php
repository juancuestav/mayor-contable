<?php

namespace App\Http\Resources;

use App\Models\TmaPlancta;
use Illuminate\Http\Resources\Json\JsonResource;
use Src\App\TmaPlancta\ObtenerCodigoCuenta;

class TmaPlanctaResource extends JsonResource
{
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
	 */
	public function toArray($request)
	{
		return [
			'cc_seqcta' => $this->cc_seqcta,
			'codigo' => (new ObtenerCodigoCuenta(TmaPlancta::find($this->cc_seqcta)))(),
			'nombre' => $this->cc_nombre,
		];
	}
}
