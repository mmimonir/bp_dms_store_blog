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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('vendor_id');
            $table->string('factory_challan_no', 50)->nullable();
            $table->date('purchage_date')->nullable();
            $table->decimal('total_purchage_amount', 12, 2)->default(0);
            $table->string('uml_mushak_no', 50)->nullable();
            $table->date('uml_mushak_date')->nullable();
            $table->string('dealer_code', 20)->nullable();
            $table->date('rebate_date')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('edited_by')->nullable();
            $table->timestamps();

            // Foreign Keys
            $table->foreign('vendor_id')
                ->references('id')->on('motorcycle_vendors_and_dealers')
                ->onDelete('cascade');

            $table->foreign('created_by')
                ->references('id')->on('users')
                ->onDelete('set null');

            $table->foreign('edited_by')
                ->references('id')->on('users')
                ->onDelete('set null');
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
