<?php

namespace App\Http\Resources;

// use App\Http\Resources\LowonganResource;
use Illuminate\Http\Resources\Json\JsonResource;

class LowonganResource extends JsonResource
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
            'project_id' => $this->project_id,
            'level' => $this->level,
            'client' => $this->client,
            'kuota' => $this->kuota,
            'lokasi' => $this->lokasi,
            'tahun_pengalaman' => $this->tahun_pengalaman,
            'gaji' => $this->gaji,
            'skill_pekerjaan' => $this->skill_pekerjaan,
            'deskripsi_pekerjaan' => $this->deskripsi_pekerjaan,
            'syarat_pekerjaan' => $this->syarat_pekerjaan,
            'status_aktif' => $this->status_aktif,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
