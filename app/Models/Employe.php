<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $fillable = ['nom', 'prenom', 'email', 'poste'];

    /**
     * Un employé peut avoir plusieurs sessions.
     */
    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
}
