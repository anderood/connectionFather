<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'patient_id',
        'address_id',
        'date_scheduling',
        'status_job_id',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function patient()
    {
        return $this->hasone(Patient::class, 'id', 'patient_id');
    }

    public function status()
    {
        return $this->hasMany(Status::class, 'id', 'status_job_id');
    }

}
