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
        Schema::create('motorcycle_specs', function (Blueprint $table) {
            $table->id();
            $table->string('model_code', 100);
            $table->string('model_make_of_vehicle', 100);
            $table->string('class_of_vehicle', 100);
            $table->string('no_of_cylinder_with_cc', 50);
            $table->string('size_of_tyre', 50);
            $table->decimal('horse_power', 10, 2);
            $table->decimal('laden_weight', 15, 2);
            $table->decimal('unladen_weight', 15, 2);
            $table->decimal('wheel_base', 15, 2);
            $table->integer('seating_capacity');
            $table->string('makers_name', 100);
            $table->string('makers_country', 100);
            $table->decimal('cubic_capacity', 10, 2);
            $table->integer('no_of_cylinder');
            $table->string('fuel_used', 50);
            $table->integer('rpm');
            $table->integer('seats_inc_driver');
            $table->enum('status', ['active', 'inactive']);
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
        Schema::dropIfExists('motorcycle_specs');
    }
};
