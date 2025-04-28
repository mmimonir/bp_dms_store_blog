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
        Schema::create('customer_dues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('motorcycle_customer_info_id')->constrained('motorcycle_customers_info')->cascadeOnDelete();
            $table->enum('entry_type', ['purchase', 'registration', 'service', 'other']);
            $table->string('due_type', 100);
            $table->decimal('amount', 15, 2);
            $table->date('entry_date');
            $table->string('reference_no', 100);
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_dues');
    }
};
