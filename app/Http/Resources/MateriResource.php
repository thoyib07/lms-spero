<?php

namespace App\Http\Resources;

// use App\Http\Resources\MateriResource;
use Illuminate\Http\Resources\Json\JsonResource;

class MateriResource extends JsonResource
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
            'lowongan_id' => $this->lowongan_id,
            'judul_materi' => $this->judul_materi,
            'video_1' => $this->video_1,
            'intruksi_1' => $this->intruksi_1,
            'penjelasan_1' => $this->penjelasan_1,
            'pertanyaan_1' => $this->pertanyaan_1,
            'file_pdf' => $this->file_pdf,
            'video_2' => $this->video_2,
            'intruksi_2' => $this->intruksi_2,
            'penjelasan_2' => $this->penjelasan_2,
            'instruksi_studi_kasus' => $this->instruksi_studi_kasus,
            'penjelasan_studi_kasus' => $this->penjelasan_studi_kasus,
            'pertanyaan_studi_kasus' => $this->pertanyaan_studi_kasus,
            'praktekkan' => $this->praktekkan,
            'instruksi_essay' => $this->instruksi_essay,
            'urutan_materi' => $this->urutan_materi,
            'status_aktif' => $this->status_aktif,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
