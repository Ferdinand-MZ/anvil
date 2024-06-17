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
        Schema::create('archives', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignId('user_id')->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignId('letter_type_id')->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignId('archive_category_id')->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->date('date_at')->nullable();
            $table->string('letter_from');
            $table->string('description');
            $table->string('filepath');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archives');
    }
};
