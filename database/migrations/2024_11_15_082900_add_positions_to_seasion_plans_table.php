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
        Schema::table('seasion_plans', function (Blueprint $table) {
            $table->string('positions')->nullable(); // Add the 'positions' column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('seasion_plans', function (Blueprint $table) {
            // $table->dropColumn('positions'); // Drop the 'positions' column if rolling back
        });
    }
};
