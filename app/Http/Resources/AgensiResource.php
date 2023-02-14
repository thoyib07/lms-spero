<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AgensiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'direktur_id' => $this->direktur_id,
            'logo' => $this->logo,
            'nama_usaha' => $this->nama_usaha,
            'alamat' => $this->alamat,
            'nib' => $this->nib,
            'telepon' => $this->telepon,
            'status_verifikasi' => $this->status_verifikasi,
            'status_aktif' => $this->status_aktif,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
