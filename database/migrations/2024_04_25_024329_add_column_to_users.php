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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('study_program_id')->nullable()->after('generation')->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignId('group_id')->nullable()->after('study_program_id')->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignId('organization_id')->nullable()->after('group_id')->constrained()->restrictOnUpdate()->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropConstrainedForeignId('study_program_id');
            $table->dropConstrainedForeignId('group_id');
            $table->dropConstrainedForeignId('organization_id');
        });
    }
};
