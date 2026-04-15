<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('facilities', function (Blueprint $table) {
        $table->id();
        $table->integer('tab_number'); // 1,2,3
        $table->string('title');
        $table->text('description')->nullable();
        $table->string('image')->nullable();
        
        // Bullet points stored as JSON
        $table->json('points')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facilities');
    }
};
