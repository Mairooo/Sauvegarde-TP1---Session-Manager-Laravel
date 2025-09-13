<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    protected $fillable = ['nom', 'type'];

    /**
     * Une ressource peut être utilisée par plusieurs sessions.
     */
    public function sessions()
    {
        return $this->belongsToMany(Session::class, 'session_ressource');
    }
}
