<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $table = 'consultations';

    public function specialty()
    {
        return $this->belongsTo(Specialty::class, 'specialty_id', 'id');
    }

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
