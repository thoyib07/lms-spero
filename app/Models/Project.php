<?php

namespace App\Models;

use App\Models\Agensi;
use App\Models\Lowongan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'id',
        'agensi_id',
        'judul_project',
        'deskripsi',
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

    public function agensis(){
        return $this->belongsTo(Agensi::class, 'agensi_id');
    }

    public function lowongans(){
        return $this->hasMany(Lowongan::class);
    }
}
