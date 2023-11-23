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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rol_id')->nullable()->constrained();
            $table->string('name')->nullable();
            $table->string('wallet_doc_number')->nullable()->unique();

            // $table->foreignId('rol_id')
                // ->nullable()
                // ->constrained('roles');
                // ->cascadeOnUpdate()
                // ->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
