<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoria_id');
            $table->string('nome');
            $table->integer('mes');
            $table->integer('ano');
            $table->float('valor');
            $table->string('comprovante')->nullable();
            $table->enum('status', ['pendente', 'pago'])->default('pendente');

            $table->foreign('categoria_id')->references('id')->on('categorias_contas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contas');
    }
};
