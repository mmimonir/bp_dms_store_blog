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
            $table->string('model_code', 10);
            $table->string('model_make_of_vehicle', 10);
            $table->string('class_of_vehicle', 10);
            $table->string('no_of_cylinder_with_cc', 50);
            $table->string('size_of_tyre', 50);
            $table->string('horse_power', 10);
            $table->string('laden_weight', 15);
            $table->string('unladen_weight', 15);
            $table->string('wheel_base', 15);
            $table->string('seating_capacity');
            $table->string('makers_name', 100);
            $table->string('makers_country', 10);
            $table->string('cubic_capacity', 10);
            $table->string('no_of_cylinder', 10);
            $table->string('fuel_used', 50);
            $table->string('rpm', 10);
            $table->string('seats_inc_driver', 10);
            $table->enum('status', ['active', 'inactive']);
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
        Schema::dropIfExists('motorcycle_specs');
    }
};
