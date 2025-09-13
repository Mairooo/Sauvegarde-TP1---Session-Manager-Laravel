<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;
    
    protected $fillable = ['type', 'description'];
    
    public function workSessions()
    {
        return $this->belongsToMany(WorkSession::class, 'materiel_work_session');
    }
}
