<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->byIncrement('id_personas');
            $table->foreign('id_tipo_doc')->references('id_tipo_doc')->on('tipo_documentos');
            $table->integer('doc_entidad')->unique();
            $table->string('nombres',200);
            $table->date('fecha_nac');
            $table->string('direccion',100);
            $table->string('telefono',20);
            $table->boolean('estado_civil',50);
            $table->string('ocupacion',50);
            $table->string('grado_instruccion',50);
            $table->string('foto',500);
            $table->integer('edad',500);

           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
