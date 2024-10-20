<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status_jobs';
    protected $fillable = [
        'title',
        'description'
    ];

    public function jobs()
    {
         return $this->hasMany(Job::class, 'status_id', 'id');
    }

}
