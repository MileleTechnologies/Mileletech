<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('innovation_proposals', function (Blueprint $table) {
            $table->string('status')->default('pending')->after('project_idea');
        });
    }

    public function down(): void
    {
        Schema::table('innovation_proposals', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
