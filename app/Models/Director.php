<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = 'directors';

    protected $fillable = [
        'name',
        'date_of_birth',
        'email',
        'phone_number',
        'address',
        'created_by',
        'updated_by',
    ];

    public function agencies(){
        return $this->hasMany(Agency::class);
    }
}
