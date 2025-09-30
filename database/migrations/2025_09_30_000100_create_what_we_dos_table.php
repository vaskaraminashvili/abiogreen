<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('what_we_dos', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('status')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('what_we_dos');
    }
}; 