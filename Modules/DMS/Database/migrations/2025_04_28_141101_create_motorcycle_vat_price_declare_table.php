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
        Schema::create('motorcycle_vat_price_declare', function (Blueprint $table) {
            $table->id();
            $table->foreignId('motorcycle_purchases_id')->constrained('motorcycle_purchases')->cascadeOnDelete();
            $table->string('model_code', 100);
            $table->decimal('value_addition_amount', 15, 0);
            $table->date('submit_date');
            $table->string('hs_code', 50)->nullable();
            $table->foreignId('motorcycle_dealer_id')->constrained('motorcycle_vendors_and_dealers')->cascadeOnDelete();
            $table->date('date_of_first_supply')->nullable();
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
        Schema::dropIfExists('motorcycle_vat_price_declare');
    }
};
