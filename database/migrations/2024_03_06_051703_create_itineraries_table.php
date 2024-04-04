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
        Schema::create('itineraries', function (Blueprint $table) {
            $table->id();
            $table->string('itinerary_name');
            $table->decimal('itinerary_price', 8, 2);
            $table->unsignedBigInteger('itinerary_location');
            $table->foreign('itinerary_location')->references('id')->on('provinces')->onDelete('cascade');
            $table->unsignedBigInteger('itinerary_location');
            //$table->unsignedBigInteger('lunch_location');
            //$table->foreign('lunch_location')->references('id')->on('areas')->onDelete('cascade');
            $table->date('itinerary_start');
            $table->date('itinerary_end');
            $table->unsignedInteger('itinerary_pax');
            $table->unsignedBigInteger('user_id'); // Add user_id column
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Create foreign key constraint
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itineraries');
    }
};
