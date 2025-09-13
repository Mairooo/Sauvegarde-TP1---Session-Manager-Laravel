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
        Schema::create('work_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Remplace employe_id
            $table->foreignId('projet_id')->constrained('projets')->onDelete('cascade');
            $table->foreignId('salle_id')->constrained('salles')->onDelete('cascade'); // Nouvelle contrainte
            $table->date('date');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->enum('status', ['planifiee', 'en_cours', 'terminee', 'annulee']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_sessions');
    }
};
