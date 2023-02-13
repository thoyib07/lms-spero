<?php

namespace App\Http\Resources;

use App\Models\Agensi;
use App\Models\Project;
use App\Models\Lowongan;
use App\Http\Resources\AgensiResource;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\LowonganResource;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Resources\Json\JsonResource;

class GetLowonganDataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return[
        //     $agensi = AgensiResource::collection(Agensi::all());
        //     $project = ProjectResource::collection(Project::all());
        //     $lowongan = LowonganResource::collection(Lowongan::all());
    
        //     $combinedResource = new Collection();
        //     return $combinedResource->concat($agensi)->concat($project)->concat($lowongan);
        // ];
    }
}
