<?php

namespace App\Models;

use App\Models\User;
use App\Models\Director;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Agency extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'agencies';


    protected $fillable = [
        'user_id',
        'director_id',
        'business_name',
        'business_identification_number',
        'telephone_number',
        'address',
        'created_by',
        'updated_by',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function directors(){
        return $this->belongsTo(Director::class, 'director_id');
    }
}
