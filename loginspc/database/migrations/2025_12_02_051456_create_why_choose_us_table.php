<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('why_choose_us', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Why Leading Brands Choose Us');
            $table->longText('description')->nullable();

            // Stats
            $table->string('stat1_icon')->nullable();
            $table->string('stat1_value')->nullable();
            $table->string('stat1_title')->nullable();

            $table->string('stat2_icon')->nullable();
            $table->string('stat2_value')->nullable();
            $table->string('stat2_title')->nullable();

            $table->string('stat3_icon')->nullable();
            $table->string('stat3_value')->nullable();
            $table->string('stat3_title')->nullable();

            $table->string('stat4_icon')->nullable();
            $table->string('stat4_value')->nullable();
            $table->string('stat4_title')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('why_choose_us');
    }
};
