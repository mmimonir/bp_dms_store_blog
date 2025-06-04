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
        Schema::create('motorcycle_name_change', function (Blueprint $table) {
            $table->id();
            $table->foreignId('motorcycle_customer_info_id')->constrained('motorcycle_customers_info')->cascadeOnDelete();
            $table->foreignId('motorcycle_serials_id')->constrained('motorcycle_serials')->cascadeOnDelete();
            $table->decimal('fee', 15, 0);
            $table->date('change_date');
            $table->string('reference', 100)->nullable();
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
        Schema::dropIfExists('motorcycle_name_change');
    }
};
