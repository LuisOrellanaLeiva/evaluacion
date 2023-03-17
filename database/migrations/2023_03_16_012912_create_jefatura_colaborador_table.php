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
        Schema::create('jefatura_colaborador', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jefatura_id')->constrained('profiles','id');
            $table->foreignId('colaborador_id')->constrained('profiles','id');
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
        Schema::dropIfExists('jefatura_colaborador');
    }
};
