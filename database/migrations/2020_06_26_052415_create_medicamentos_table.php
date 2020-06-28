<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string('expediente')->nullable();
            $table->string('producto')->nullable();
            $table->string('titular')->nullable();
            $table->string('registrosanitario')->nullable();
            $table->string('fechaexpedicion')->nullable();
            $table->string('fechavencimiento')->nullable();
            $table->string('estadoregistro')->nullable();
            $table->string('expedientecum')->nullable();
            $table->string('consecutivocum')->nullable();
            $table->string('cantidadcum')->nullable();
            $table->string('descripcioncomercial')->nullable();
            $table->string('estadocum')->nullable();
            $table->string('fechaactivo')->nullable();
            $table->string('fechainactivo')->nullable();
            $table->string('muestramedica')->nullable();
            $table->string('unidad')->nullable();
            $table->string('atc')->nullable();
            $table->string('descripcionatc')->nullable();
            $table->string('viaadministracion')->nullable();
            $table->string('concentracion')->nullable();
            $table->string('principioactivo')->nullable();
            $table->string('unidadmedida')->nullable();
            $table->string('cantidad')->nullable();
            $table->string('unidadreferencia')->nullable();
            $table->string('formafarmaceutica')->nullable();
            $table->string('nombrerol')->nullable();
            $table->string('tiporol')->nullable();
            $table->string('modalidad')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicamentos');
    }
}
