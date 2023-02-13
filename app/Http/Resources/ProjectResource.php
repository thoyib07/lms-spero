<?php

namespace App\Http\Resources;

use App\Http\Resources\ProjectResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            'agensi_id' => $this->agensi_id,
            'judul_project' => $this->judul_project,
            'deskripsi' => $this->deskripsi,
            'status_aktif' => $this->status_aktif,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
