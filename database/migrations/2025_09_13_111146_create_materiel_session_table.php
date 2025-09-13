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
        Schema::create('materiel_work_session', function (Blueprint $table) {
            $table->id();
            $table->foreignId('work_session_id')->constrained('work_sessions')->onDelete('cascade');
            $table->foreignId('materiel_id')->constrained('materiels')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiel_work_session');
    }
};
