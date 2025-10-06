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
        Schema::table('projects', function (Blueprint $table) {
            $table->json('header_info')->after('status')->nullable();
            $table->json('key_features')->after('header_info')->nullable();
            $table->json('project_objectives')->after('key_features')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('header_info');
            $table->dropColumn('key_features');
            $table->dropColumn('project_objectives');
        });
    }
};
