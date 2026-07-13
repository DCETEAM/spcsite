<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->string('font_body', 80)->default('Poppins')->after('footer_bg');
            $table->string('font_heading', 80)->default('Poppins')->after('font_body');
            $table->string('text_primary', 30)->default('#f1f5f9')->after('font_heading');
            $table->string('text_muted', 50)->default('rgba(255,255,255,0.75)')->after('text_primary');
        });
    }

    public function down(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->dropColumn(['font_body', 'font_heading', 'text_primary', 'text_muted']);
        });
    }
};
