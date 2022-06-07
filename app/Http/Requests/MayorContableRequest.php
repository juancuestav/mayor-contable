<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MayorContableRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, mixed>
	 */
	public function rules()
	{
		return [
			'cc_seqcta' => 'required|numeric|integer',
			'desde' => 'required|date',
			'hasta' => 'required|date',
		];
	}

	public function messages()
	{
		return [
			'cc_seqcta.required' => 'El campo cuenta es obligatorio.',
		];
	}
}
