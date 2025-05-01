<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('balance_increments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('balance_id')->constrained()->onDelete('cascade');
            $table->decimal('increment_amount', 15, 2);  // Always 1000, but good to keep flexible
            $table->decimal('resulting_balance', 15, 2); // Balance after increment
            $table->timestamps(); // created_at = timestamp of increment
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('balance_increments');
    }
};
