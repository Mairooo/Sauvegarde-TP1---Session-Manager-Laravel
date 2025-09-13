<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = 'work_sessions';
    protected $fillable = ['date', 'heure_debut', 'heure_fin', 'status', 'employe_id', 'projet_id'];

    /**
     * Une session appartient à un employé.
     */
    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }

    /**
     * Une session appartient à un projet.
     */
    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }

    /**
     * Une session peut utiliser plusieurs ressources.
     */
    public function ressources()
    {
        return $this->belongsToMany(Ressource::class, 'session_ressource');
    }
}
