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
        Schema::create('motorcycle_customers_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_name', 255);
            $table->string('relation', 50)->nullable();
            $table->string('father_name', 255)->nullable();
            $table->string('mother_name', 255)->nullable();
            $table->text('address_one')->nullable();
            $table->text('address_two')->nullable();
            $table->date('date_of_birth');
            $table->string('national_id_no', 50)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('phone', 20);
            $table->string('secondary_phone', 20)->nullable();
            $table->string('nationality', 100);
            $table->enum('gender', ['male', 'female', 'other']);
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('edited_by')->nullable();
            $table->timestamps();

            // Foreign Keys
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
        Schema::dropIfExists('motorcycle_customers_info');
    }
};
