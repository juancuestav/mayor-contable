<?php

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
		Schema::create('det_diariodet', function (Blueprint $table) {

			$table->unsignedBigInteger('cc_seqmov')->primary();
			$table->foreign('cc_seqmov')->references('cc_seqmov')->on('det_diario')->onDelete('cascade')->onUpdate('cascade');

			$table->text('cc_detalle');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('det_diariodet');
	}
};
