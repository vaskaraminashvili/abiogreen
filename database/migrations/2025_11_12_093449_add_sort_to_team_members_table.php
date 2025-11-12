<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('team_members', function (Blueprint $table) {
            $table->integer('sort')
                ->default(0)
                ->after('status');
        });

        DB::table('team_members')
            ->orderBy('created_at')
            ->orderBy('id')
            ->get()
            ->each(function ($teamMember, int $index): void {
                DB::table('team_members')
                    ->where('id', $teamMember->id)
                    ->update(['sort' => $index + 1]);
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('team_members', function (Blueprint $table) {
            $table->dropColumn('sort');
        });
    }
};
