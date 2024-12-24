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
        Schema::create('design_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('design_id')->constrained('designs')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('rating');
            $table->text('feedback')->nullable();
            $table->boolean('isRated')->default(false);

            // Menambahkan index
            $table->index('design_id');
            $table->index('user_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('design_reviews');
    }
};
