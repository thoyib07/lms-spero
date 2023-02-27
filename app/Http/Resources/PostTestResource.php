<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostTestResource extends JsonResource
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
            'materi_id' => $this->materi_id,
            'soal' => $this->soal,
            'jawaban_a' => $this->jawaban_a,
            'jawaban_b' => $this->jawaban_b,
            'jawaban_c' => $this->jawaban_c,
            'jawaban_d' => $this->jawaban_d,
            'jawaban_true' => $this->jawaban_true,
            'status_aktif' => $this->status_aktif,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
