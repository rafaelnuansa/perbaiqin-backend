<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Technician extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['id'];
    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }

    public function consultationMessages()
    {
        return $this->hasMany(ConsultationMessage::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function specialists()
    {
        return $this->belongsToMany(Specialist::class, 'technician_specialists');
    }
}
