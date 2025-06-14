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
        Schema::create('motorcycle_mrp', function (Blueprint $table) {
            $table->id();
            $table->string('model_code', 10);
            $table->decimal('mrp', 15, 0);
            $table->decimal('commission', 15, 0);
            $table->enum('status', ['active', 'inactive']);
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->foreignId('edited_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motorcycle_mrp');
    }
};
