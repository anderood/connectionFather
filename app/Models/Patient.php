<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = "patients";

    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'gender',
        'phone',
        'email',
        'observations',
        'address_id'
    ];

    public function getFullName()
    {
        return $this->first_name." ".$this->last_name;
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'id', 'address_id');
    }

    public function appointments()
    {
        return $this->hasMany(Job::class, 'patient_id', 'id');
    }
}
