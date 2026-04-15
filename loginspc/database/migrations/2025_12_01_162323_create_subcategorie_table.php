<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('subcategorie', function (Blueprint $table) {
            $table->id('subcategory_id');
            $table->string('subcategory_name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->integer('position')->default(1);
            $table->string('subcategory_image')->nullable();
            $table->foreignId('maincategory_id')
                ->constrained('maincategories', 'maincategory_id')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subcategorie');
    }
};
