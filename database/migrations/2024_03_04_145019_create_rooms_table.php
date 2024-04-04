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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_name');
            $table->string('room_img')->nullable();
            $table->decimal('room_rate', 8, 2);
            $table->unsignedBigInteger('room_location');
            $table->foreign('room_location')->references('id')->on('areas')->onDelete('cascade');
            $table->boolean('room_status')->default(1);
            $table->time('room_start')->format('H:i');
            $table->time('room_end')->format('H:i');
            $table->unsignedInteger('room_max');
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
        Schema::dropIfExists('rooms');
    }
};
