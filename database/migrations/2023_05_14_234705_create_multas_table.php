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
        Schema::create('multas', function (Blueprint $table) {
            $table->id();
            $table->string('condutor');
            $table->string('matricula');
            $table->date('data');
            $table->string('marca');
            $table->time('hora');
            $table->string('estado');
            $table->string('local');
            $table->string('artigo');
            $table->string('codigo_multa')->unique();
            $table->string('agente');
            $table->bigInteger('valor');
            $table->string('detalhes');
            $table->tinyInteger('pagamento');
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
        Schema::dropIfExists('multas');
    }
};
