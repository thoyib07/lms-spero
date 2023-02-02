<?php

namespace App\Models;

use App\Models\User;
use App\Models\Direktur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agensi extends Model
{
    use HasFactory;

    protected $table = 'agensis';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'direktur_id',
        'logo',
        'nama_usaha',
        'alamat',
        'nib',
        'telepon',
        'status_verifikasi',
        'status_aktif',
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

    public function direkturs(){
        return $this->belongsTo(Direktur::class, 'direktur_id');
    }

    public function projects(){
        return $this->hasMany(Project::class);
    }
}
