<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('licence', function (Blueprint $table) {
            $table->id();
            $table->string('mac_number')->unique();
            $table->string('activation_key')->unique();
            $table->string('product_slug')->nullable();
            $table->string('product_name')->nullable();
            $table->timestamp('last_verified_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('licence');
    }
};
