<?php

namespace App\Models;

use App\Models\Materi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lowongan extends Model
{
    use HasFactory;

    protected $table = 'lowongans';

    protected $fillable = [
        'id',
        'project_id',
        'level',
        'client',
        'kuota',
        'lokasi',
        'tahun_pengalaman',
        'gaji',
        'skill_pekerjaan',
        'deskripsi_pekerjaan',
        'syarat_pekerjaan',
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

    public function projects(){
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function materis(){
        return $this->hasMany(Materi::class);
    }
}
