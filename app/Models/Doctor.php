<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctores';

    public function specialty()
    {
        return $this->belongsTo(Specialty::class, 'specialty_id', 'id');
    }
}
