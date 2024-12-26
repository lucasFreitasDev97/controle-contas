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
        Schema::create('debit_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('debit_id')->constrained('debits');
            $table->integer('year');
            $table->integer('month');
            $table->float('debit_value', 10, 2);
            $table->date('due_date');
            $table->enum('status', ['pending', 'payment_completed', 'late']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debit_registrations');
    }
};
