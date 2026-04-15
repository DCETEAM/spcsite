<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 public function up()
{
    Schema::table('facilities', function (Blueprint $table) {
        $table->dropColumn('tab_number');
    });
}

public function down()
{
    Schema::table('facilities', function (Blueprint $table) {
        $table->integer('tab_number')->nullable();
    });
}
    
};
