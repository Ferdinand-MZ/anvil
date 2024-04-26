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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignId('user_id')->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->string('name');
            $table->enum('type', ['agenda', 'acara']);
            $table->enum('status', ['selesai', 'proses', 'baru'])->default('baru');
            $table->date('event_day')->nullable();
            $table->dateTime('event_start')->nullable();
            $table->dateTime('event_finish')->nullable();
            $table->text('documentations')->nullable(); //Should fill with gdrive link
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
