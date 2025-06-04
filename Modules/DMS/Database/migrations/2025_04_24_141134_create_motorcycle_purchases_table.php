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
        Schema::create('motorcycle_purchases', function (Blueprint $table) {
            $table->id();
            $table->string('factory_challan_no', 50)->nullable();
            $table->date('purchage_date');
            $table->decimal('total_purchage_amount', 12, 2)->default(0);
            $table->string('uml_mushak_no', 50)->nullable();
            $table->date('uml_mushak_date')->nullable();
            $table->string('dealer_code', 20)->nullable();
            $table->date('rebate_date')->nullable();
            $table->unsignedInteger('quantity');
            $table->timestamps();

            // Foreign Keys           
            $table->foreignId('vendor_id')->constrained('motorcycle_vendors_and_dealers')->cascadeOnDelete();
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->foreignId('edited_by')->nullable()->constrained('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motorcycle_purchases');
    }
};
