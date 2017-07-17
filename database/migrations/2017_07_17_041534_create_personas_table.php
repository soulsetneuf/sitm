<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    var $table_name='personas';
    public function up()
    {
        Schema::create($this->table_name, function (Blueprint $table) {
                $table->increments('id');
                $table->integer("ci");
                $table->string("nombre");
                $table->string("apellido_paterno");
                $table->string("apellido_materno");
                $table->string("direccion");
                $table->string("sexo");
                $table->date('fecha_nacimiento');
                $table->string("telefono");
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
        Schema::dropIfExists($this->table_name);
    }
}
