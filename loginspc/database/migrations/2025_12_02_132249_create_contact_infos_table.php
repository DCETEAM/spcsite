<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactInfosTable extends Migration
{
    public function up()
    {
        Schema::create('contact_infos', function (Blueprint $table) {
            $table->id();
            $table->text('about_lines')->nullable(); // newline-separated or JSON
            $table->json('phone_numbers')->nullable(); // array
            $table->json('marketing_numbers')->nullable(); // array
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->timestamps();
        });

        // Seed a default row for convenience
        \DB::table('contact_infos')->insert([
            'about_lines' => json_encode(["Plastic Solutions","Manufacturing"]),
            'phone_numbers' => json_encode(["+91 98439 09609","+91 80932 86199","+91 93674 10444"]),
            'marketing_numbers' => json_encode(["63694 99561","9487782649"]),
            'email' => 'senthilplasticcontainers@gmail.com',
            'address' => "4/422, V.O.C. Nagar, Allampatti(Via),\nVirudhunagar, TN-626001",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('contact_infos');
    }
}
