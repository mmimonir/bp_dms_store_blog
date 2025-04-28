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

            // Foreign Keys
            $table->foreignId('motorcycle_serials_id')->constrained('motorcycle_serials')->cascadeOnDelete();
            $table->foreignId('challans_and_receipts_id')->constrained('challans_and_receipts')->cascadeOnDelete();
            $table->foreignId('motorcycle_color_id')->constrained('motorcycle_colors')->cascadeOnDelete();
            $table->foreignId('motorcycle_color_description_id')->constrained('motorcycle_color_descriptions')->cascadeOnDelete();

            // Other Fields
            $table->string('ckd_process', 255);
            $table->string('approval_no', 100)->nullable();
            $table->string('invoice_no', 100)->nullable();
            $table->decimal('purchage_price', 15, 2);
            $table->enum('whos_vat', ['dealer', 'customer']);
            $table->string('vat_process', 255)->nullable();
            $table->date('tr_dep_date')->nullable();
            $table->string('register_no', 50)->nullable();
            $table->string('page_no', 50);
            $table->string('vat_purchage_sl', 100)->nullable();
            $table->string('vat_sale_sl', 100)->nullable();
            $table->string('evl_invoice_no', 100)->nullable();
            $table->enum('file_status', ['pending', 'approved', 'rejected', 'archived']);
            $table->string('tr_month_code', 10)->nullable();
            $table->string('tr_number', 50)->nullable();
            $table->date('tr_deposite_date')->nullable();

            // Audit Fields
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('edited_by')->nullable()->constrained('users');

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
