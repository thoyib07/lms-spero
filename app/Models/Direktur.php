<?php

namespace App\Models;

use App\Models\Agensi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Direktur extends Model
{
    use HasFactory;

    protected $table = 'direkturs';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nama_panjang',
        'email',
        'alamat',
        'tanggal_lahir',
        'no_hp',
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
        return $this->hasMany(Agensi::class);
    }
}
