<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = ['nom', 'description', 'date_debut', 'date_fin'];

    /**
     * Un projet peut avoir plusieurs sessions.
     */
    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
}
