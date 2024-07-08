<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'zip_code',
        'street',
        'number',
        'complement',
        'city',
        'state',
        'who_is',
    ];

    protected $hidden = [
        'who_is'
    ];

    public function getFullAddress()
    {
        return $this->street." | ".$this->number. " | ". $this->city." | ".$this->state;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'address_id', 'id');
    }
}
