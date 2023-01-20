<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pendaftar extends Model
{
    use HasFactory;

    protected $table = 'pendaftars';

    protected $fillable = [
        'id',
        'user_id',
        'nama_panjang',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'kota',
        'provinsi',
        'no_hp',
        'ktp',
        'level',
        'created_by',
        'updated_by',
    ];

    protected static function booted(){
        static::creating(function($model){
            $model->created_by = Auth::id();
            $model->updated_by = Auth::id();
        });

        static::saving(function($model){
            $model->updated_by = Auth::id();
        });
    }

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
