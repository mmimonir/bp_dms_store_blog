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
            $table->string('due_type', 20);
            $table->decimal('amount', 15, 0);
            $table->date('entry_date');
            $table->string('reference_no', 20);
            $table->text('remarks')->nullable();
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
        Schema::dropIfExists('customer_dues');
    }
};
