<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $table = 'specialties';

    public function doctor()
    {
        return $this->hasMany(Doctor::class, 'specialty_id', 'id');
    }
}
