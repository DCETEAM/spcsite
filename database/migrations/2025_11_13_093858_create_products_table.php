<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('slug')->unique();

            $table->text('description')->nullable();
            $table->text('features')->nullable();

            $table->string('image')->nullable();

            // Store multi-selections as JSON
            $table->json('main_category_ids')->nullable();
            $table->json('sub_category_ids')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
