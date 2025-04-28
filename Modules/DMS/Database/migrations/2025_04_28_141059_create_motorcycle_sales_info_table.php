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
            $table->decimal('sale_price', 15, 2);
            $table->decimal('sale_price_vat', 15, 2);
            $table->string('sale_mushak_no', 100)->nullable();
            $table->decimal('sale_profit', 15, 2)->nullable();
            $table->enum('dms_status', ['pending', 'approved', 'delivered', 'rejected']);
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('edited_by')->nullable()->constrained('users');
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
