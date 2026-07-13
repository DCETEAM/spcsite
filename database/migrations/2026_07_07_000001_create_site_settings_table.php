<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('accent', 20)->default('#45aae3');
            $table->string('accent_dark', 20)->default('#2e96d4');
            $table->string('hero_navy', 20)->default('#001a3d');
            $table->string('hero_gold', 20)->default('#ffb800');
            $table->string('hero_blue', 20)->default('#3a9dff');
            $table->string('footer_bg', 20)->default('#060f1a');
            $table->timestamps();
        });

        DB::table('site_settings')->insert([
            'accent' => '#45aae3',
            'accent_dark' => '#2e96d4',
            'hero_navy' => '#001a3d',
            'hero_gold' => '#ffb800',
            'hero_blue' => '#3a9dff',
            'footer_bg' => '#060f1a',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
