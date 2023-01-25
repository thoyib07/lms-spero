<?php

namespace App\Models;

use App\Models\User;
use App\Models\Lowongan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Materi extends Model
{
    use HasFactory;

    protected $table = 'materis';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'lowongan_id',
        'judul_materi',
        'video_1',
        'intruksi_1',
        'penjelasan_1',
        'pertanyaan_1',
        'file_pdf',
        'video_2',
        'intruksi_2',
        'penjelasan_2',
        'instruksi_studi_kasus',
        'penjelasan_studi_kasus',
        'pertanyaan_studi_kasus',
        'praktekkan',
        'instruksi_essay',
        'urutan_materi',
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

    public function lowongans(){
        return $this->belongsTo(Lowongan::class, 'lowongan_id');
    }
}
