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
            $table->enum('document_type', ['challan', 'receipt']);
            $table->string('document_no', 100);
            $table->date('date');
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('edited_by')->nullable()->constrained('users');
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
