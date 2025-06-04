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
        Schema::create('motorcycle_registrations', function (Blueprint $table) {
            $table->id();
            $table->integer('rg_duration');
            $table->decimal('rg_amount', 10, 0);
            $table->string('rg_number', 50)->nullable();
            $table->decimal('brta_fee', 10, 0);
            $table->decimal('profit_amount', 10, 0);
            $table->decimal('due_amount', 10, 0)->default(0);
            $table->date('brta_fee_deposite_date')->nullable();
            $table->text('brta_transaction_note')->nullable();
            $table->timestamps();

            // Foreign Keys
            $table->foreignId('motorcycle_serials_id')->constrained('motorcycle_serials')->cascadeOnDelete();
            $table->foreignId('motorcycle_customers_info_id')->constrained('motorcycle_customers_info')->cascadeOnDelete();
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->foreignId('edited_by')->nullable()->constrained('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motorcycle_registrations');
    }
};
