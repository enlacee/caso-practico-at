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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->nullable()->constrained();
            $table->unsignedBigInteger('player_validador_id')->nullable();
            $table->decimal('voucher_amount', $precision = 8, $scale = 2)->default(0);
            $table->string('voucher_bank_name')->nullable();
            $table->integer('player_validador_status')->nullable()->default(0)->comment('aprobado?');
            $table->timestamps();

            $table->foreign('player_validador_id')->references('id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
