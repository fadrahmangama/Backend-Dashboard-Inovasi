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
        //
        Schema::create('User_Log', function (Blueprint $table) {
            $table->id();
            $table->date('access_datetime');
            $table->string('expired');
            $table->string('token');
            $table->string('username');
            $table->string('ip');
            $table->string('useragent');
            $table->string('stat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('User_Log');
    }
};
