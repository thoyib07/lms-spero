<?php

namespace App\Models;

use App\Models\User;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'admins';

    protected $fillable = [
        'user_id',
        'name',
        'date_of_birth',
        'phone_number',
        'address',
        'created_by',
        'updated_by',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
