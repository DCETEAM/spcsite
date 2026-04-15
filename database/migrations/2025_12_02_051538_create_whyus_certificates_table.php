<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('whyus_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('image'); // certificate image path
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('whyus_certificates');
    }
};
