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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('motorcycle_serials_id');
            $table->unsignedBigInteger('motorcycle_customers_info_id');
            $table->integer('rg_duration');
            $table->decimal('rg_amount', 10, 2);
            $table->string('rg_number', 50);
            $table->decimal('brta_fee', 10, 2);
            $table->decimal('profit_amount', 10, 2);
            $table->decimal('due_amount', 10, 2)->default(0);
            $table->date('brta_fee_deposite_date')->nullable();
            $table->text('brta_transaction_note')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('edited_by')->nullable();
            $table->timestamps();

            // Foreign Keys
            $table->foreign('motorcycle_serials_id')
                ->references('id')->on('motorcycle_serials')
                ->onDelete('cascade');

            $table->foreign('motorcycle_customers_info_id')
                ->references('id')->on('motorcycle_customers_info')
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
        Schema::dropIfExists('motorcycle_registrations');
    }
};
