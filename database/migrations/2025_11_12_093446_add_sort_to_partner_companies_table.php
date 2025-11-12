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
        Schema::table('partner_companies', function (Blueprint $table) {
            $table->integer('sort')
                ->default(0)
                ->after('status');
        });

        DB::table('partner_companies')
            ->orderBy('created_at')
            ->orderBy('id')
            ->get()
            ->each(function ($partnerCompany, int $index): void {
                DB::table('partner_companies')
                    ->where('id', $partnerCompany->id)
                    ->update(['sort' => $index + 1]);
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('partner_companies', function (Blueprint $table) {
            $table->dropColumn('sort');
        });
    }
};
