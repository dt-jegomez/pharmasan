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
            $table->string('expediente');
            $table->string('producto');
            $table->string('titular');
            $table->string('registrosanitario');
            $table->string('fechaexpedicion');
            $table->string('fechavencimiento');
            $table->string('estadoregistro');
            $table->string('expedientecum');
            $table->string('consecutivocum');
            $table->string('cantidadcum');
            $table->string('descripcioncomercial');
            $table->string('estadocum');
            $table->string('fechaactivo');
            $table->string('fechainactivo');
            $table->string('muestramedica');
            $table->string('unidad');
            $table->string('atc');
            $table->string('descripcionatc');
            $table->string('viaadministracion');
            $table->string('concentracion');
            $table->string('principioactivo');
            $table->string('unidadmedida');
            $table->string('cantidad');
            $table->string('unidadreferencia');
            $table->string('formafarmaceutica');
            $table->string('nombrerol');
            $table->string('tiporol');
            $table->string('modalidad');

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
