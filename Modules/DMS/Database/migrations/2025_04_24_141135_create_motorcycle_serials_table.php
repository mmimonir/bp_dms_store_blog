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
            $table->unsignedBigInteger('motorcycle_purchase_id');
            $table->unsignedBigInteger('motorcycle_customer_info_id');
            $table->string('model_code', 50);
            $table->string('gate_pass', 100)->nullable();
            $table->string('chassis_first_twelve_digit', 12);
            $table->string('chassis_last_five_digit', 5);
            $table->string('engine_first_six_digit', 6);
            $table->string('engine_last_five_digit', 5);
            $table->string('color_code', 20);
            $table->boolean('in_stock')->default(true);
            $table->year('year_of_manufacture')->nullable();
            $table->string('mc_location', 100)->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('edited_by')->nullable();
            $table->timestamps();

            // Foreign Keys
            $table->foreign('motorcycle_purchase_id')
                ->references('id')->on('motorcycle_purchases')
                ->onDelete('cascade');

            $table->foreign('motorcycle_customer_info_id')
                ->references('id')->on('motorcycle_customer_infos')
                ->onDelete('cascade');

            // Optionally, you can define foreign keys for created_by and edited_by
            // assuming you have a 'users' table
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
        Schema::dropIfExists('motorcycle_serials');
    }
};
