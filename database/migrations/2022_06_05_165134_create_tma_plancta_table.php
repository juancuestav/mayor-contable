<?php

use App\Models\TmaPlancta;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tma_plancta', function (Blueprint $table) {
			$table->unsignedBigInteger('cc_seqcta')->primary();

			$table->enum('cc_nivel1', [TmaPlancta::ACTIVO, TmaPlancta::PASIVO, TmaPlancta::RESULTADOS]);
			$table->string('cc_nivel2')->nullable();
			$table->string('cc_nivel3')->nullable();
			$table->string('cc_nivel4')->nullable();
			$table->string('cc_nivel5')->nullable();
			$table->string('cc_nivel6')->nullable();
			$table->string('cc_auxiliar')->nullable();
			$table->string('cc_ctamov')->nullable();
			$table->date('cc_fecape');
			$table->string('cc_nombre');
			$table->enum('cc_tipocta', [TmaPlancta::GRUPO_1, TmaPlancta::GRUPO_2, TmaPlancta::GRUPO_3, TmaPlancta::GRUPO_4, TmaPlancta::GRUPO_5, TmaPlancta::GRUPO_MOVIMIENTO]);
			$table->enum('cc_clase', [TmaPlancta::GRUPO, TmaPlancta::MOVIMIENTO]);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tma_plancta');
	}
};
