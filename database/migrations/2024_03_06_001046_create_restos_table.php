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
        Schema::create('restos', function (Blueprint $table) {
            $table->id();
            $table->string('resto_name');
            $table->string('resto_img')->nullable();
            $table->decimal('resto_rate', 8, 2);
            $table->unsignedBigInteger('resto_location');
            $table->foreign('resto_location')->references('id')->on('areas')->onDelete('cascade');
            $table->boolean('resto_status')->default(1);
            $table->time('resto_start')->format('H:i');
            $table->time('resto_end')->format('H:i');
            $table->unsignedBigInteger('user_id'); // Add user_id column
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restos');
    }
};
