<?php

use App\Models\DetDiario;
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
		Schema::create('det_diario', function (Blueprint $table) {
			$table->unsignedBigInteger('cc_seqmov')->primary();

			$table->unsignedBigInteger('cc_seqcta');
			$table->foreign('cc_seqcta')->references('cc_seqcta')->on('tma_plancta')->onDelete('cascade')->onUpdate('cascade');

			$table->integer('cc_numcom');
			$table->date('cc_fechamov');
			$table->enum('cc_tipope', [DetDiario::DEBITO, DetDiario::CREDITO]);
			$table->double('cc_valor');
			$table->string('login');
			$table->string('cc_aniomes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('det_diario');
	}
};
