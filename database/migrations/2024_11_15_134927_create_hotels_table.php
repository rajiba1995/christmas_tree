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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('destination');
            $table->string('division');
            $table->string('hotel_category');
            $table->string('phone_code');
            $table->string('mobile_number');
            $table->string('whatsapp_number');
            $table->string('email1');
            $table->string('email2')->nullable();
            $table->boolean('status')->default(1)->comment('0:Inactive, 1:Active'); // Default value true with comment
            $table->softDeletes(); // Soft deletes column
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
