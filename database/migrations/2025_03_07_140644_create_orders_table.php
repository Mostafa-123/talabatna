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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employee_id')->unsigned();
            $table->bigInteger('officeBoy_id')->unsigned()->nullable();
            $table->enum('type', ['outdoor', 'indoor'])->default('indoor');
            $table->enum('status', ['delivered', 'indoor'])->default('indoor');
            $table->double('total_price')->default(0);
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('officeBoy_id')->references('id')->on('officeboys')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
