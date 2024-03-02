<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('activity_name');
            $table->string('activity_img')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->decimal('activity_price', 8, 2);
            $table->string('activity_location');
            $table->boolean('activity_age_limit')->default(1); // 1 for all ages, 0 for adults only
            $table->boolean('activity_status')->default(0); // 1 for approved, 0 for pending
            $table->time('activity_start')->format('H:i');
            $table->time('activity_end')->format('H:i');
            $table->text('activity_desc');
            $table->unsignedInteger('activity_max');
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
        Schema::dropIfExists('activities');
    }
};
