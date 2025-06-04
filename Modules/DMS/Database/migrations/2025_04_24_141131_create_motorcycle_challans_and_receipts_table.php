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
        Schema::create('motorcycle_challans_and_receipts', function (Blueprint $table) {
            $table->id();
            $table->enum('document_type', ['challan', 'receipt', 'extra_challan', 'extra_receipt'])->nullable();
            $table->string('document_no', 100)->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('motorcycle_challans_and_receipts');
    }
};
