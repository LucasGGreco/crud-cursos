<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();

            $table->string('name')->unique();   //NOMBRE DEL CURSO
            $table->text('descripcion');        //DESCRIPCION DEL CURSO
            $table->text('costo');              //COSTO-PRECIO-VALOR DEL CURSO
            $table->string('imagen');           //IMAGEN

            $table->text('inicio');             //FECHA DE INICIO
            $table->text('fin');                //FECHA DE FIN

            $table->text('horaInicio');         //HORA DE INICIO DE CLASES
            $table->text('horas');              //DURACION DE LA CLASE

            $table->text('numAlumnos');         //CANT. MAX. DE ALUMNOS POR CLASE
            $table->text('profesor');           //NOMBRE DEL PROFESOR/A

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
        Schema::dropIfExists('cursos');
    }
}
