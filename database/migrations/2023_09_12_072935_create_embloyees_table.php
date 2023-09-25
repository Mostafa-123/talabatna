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
        Schema::create('embloyees', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('hr_code');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('password');
            $table->integer('floor_number');
            $table->string('image')->default('avatar.png');

            $table->bigInteger('titlemodel_id')->unsigned();
            $table->bigInteger('status_id')->unsigned();

            $table->timestamps();

            $table->foreign('titlemodel_id')->references('id')->on('titlemodels')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('embloyees');
    }
};
