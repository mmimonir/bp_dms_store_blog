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
        Schema::create('motorcycle_vendors_and_dealers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type', ['vendor', 'dealer']);
            $table->string('name', 255);
            $table->text('address')->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('bin_no', 100)->nullable();
            $table->string('tin_no', 100)->nullable();
            $table->string('trade_licence_no', 100)->nullable();
            $table->timestamps();

            // Foreign Keys
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->foreignId('edited_by')->nullable()->constrained('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motorcycle_vendors_and_dealers');
    }
};
