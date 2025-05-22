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
        Schema::create('motorcycle_serials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('model_code', 50);
            $table->string('gate_pass', 100)->nullable();
            $table->string('chassis_first_twelve_digit', 12)->nullable();
            $table->string('chassis_last_five_digit', 5);
            $table->string('engine_first_six_digit', 6)->nullable();
            $table->string('engine_last_five_digit', 5);
            $table->string('color_code', 20)->nullable();
            $table->boolean('in_stock')->default(true);
            $table->year('year_of_manufacture')->nullable();
            $table->string('mc_location', 100)->nullable();
            $table->timestamps();

            // Foreign Keys
            $table->foreignId('motorcycle_purchase_id')->constrained('motorcycle_purchases')->cascadeOnDelete();
            $table->foreignId('motorcycle_customer_info_id')->nullable()->constrained('motorcycle_customers_info')->cascadeOnDelete();
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->foreignId('edited_by')->nullable()->constrained('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motorcycle_serials');
    }
};
