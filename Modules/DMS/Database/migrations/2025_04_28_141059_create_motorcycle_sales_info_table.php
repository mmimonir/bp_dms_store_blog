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
        Schema::create('motorcycle_sales_info', function (Blueprint $table) {
            $table->id();
            $table->foreignId('motorcycle_serials_id')->constrained('motorcycle_serials')->cascadeOnDelete();
            $table->date('sale_date');
            $table->decimal('sale_price', 15, 0);
            $table->decimal('sale_price_vat', 15, 0);
            $table->string('sale_mushak_no', 100)->nullable();
            $table->decimal('sale_profit', 15, 0)->nullable();
            $table->string('dms_status', 50)->default('PENDING');
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
        Schema::dropIfExists('motorcycle_sales_info');
    }
};
