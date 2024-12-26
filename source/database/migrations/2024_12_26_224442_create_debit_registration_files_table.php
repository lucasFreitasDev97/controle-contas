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
        Schema::create('debit_registration_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('debit_registration_id')->constrained('debit_registrations');
            $table->string('path_to_debit_file')->nullable();
            $table->string('path_to_payment_proof_file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debit_registration_files');
    }
};
