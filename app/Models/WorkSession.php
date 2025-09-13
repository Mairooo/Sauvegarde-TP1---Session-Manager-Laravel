<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkSession extends Model
{
    use HasFactory;
    
    protected $table = 'work_sessions';
    
    protected $fillable = [
        'user_id',
        'projet_id',
        'salle_id',
        'date',
        'heure_debut',
        'heure_fin',
        'status'
    ];
    
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function projet() {
        return $this->belongsTo(Projet::class);
    }
    
    public function salle() {
        return $this->belongsTo(Salle::class);
    }
    
    public function materiels()
    {
        return $this->belongsToMany(Materiel::class,
            'materiel_work_session',
            'work_session_id',
            'materiel_id');
    }
}
