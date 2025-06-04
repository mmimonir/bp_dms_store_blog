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
        Schema::create('motorcycle_workflow_data', function (Blueprint $table) {
            $table->id(); // BIGINT Primary Key           

            // Other Fields
            $table->string('ckd_process', 10)->default('PENDING');
            $table->string('approval_no', 10)->nullable();
            $table->string('invoice_no', 10)->nullable();
            $table->decimal('purchase_price', 15, 0);
            $table->string('whos_vat', 10)->nullable();
            $table->string('vat_process', 10)->default('PENDING');
            $table->string('register_no', 10)->nullable();
            $table->string('page_no', 10)->nullable();
            $table->string('vat_purchage_sl', 10)->nullable();
            $table->string('vat_sale_sl', 10)->nullable();
            $table->string('evl_invoice_no', 10)->nullable();
            $table->string('file_status', 50);
            $table->string('tr_month_code', 10)->nullable();
            $table->string('tr_number', 50)->nullable();
            $table->date('tr_deposite_date')->nullable();

            // Foreign Key Fields with the desired format
            $table->foreignId('motorcycle_serials_id')->constrained('motorcycle_serials')->cascadeOnDelete();
            $table->foreignId('challans_and_receipts_id')->nullable()->constrained('motorcycle_challans_and_receipts')->nullOnDelete();
            $table->foreignId('motorcycle_color_id')->nullable()->constrained('motorcycle_colors')->nullOnDelete();
            $table->foreignId('motorcycle_color_description_id')->nullable()->constrained('motorcycle_color_descriptions')->nullOnDelete();

            // Audit Fields
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->foreignId('edited_by')->nullable()->constrained('users')->nullOnDelete();

            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motorcycle_workflow_data');
    }
};
