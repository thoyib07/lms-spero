<?php

namespace App\Http\Controllers\Api;

use App\Models\Agensi;
use App\Models\Project;
use App\Models\Lowongan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AgensiResource;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\LowonganResource;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Controllers\Api\lowonganController;

class lowonganController extends Controller
{
    public function indexLowongan(){
        $Lowongan = Lowongan::latest()->get();
        return response()->json([
            'data' => LowonganResource::collection($Lowongan),
            'message' => 'Berhasil',
            'success' => true,  
        ]);
        return view("user.daftarLowongan",compact('Lowongan'));
    }
    
    public function index(){
        $Agensi = Agensi::all();
        $Project = Project::all();
        $Lowongan = Lowongan::all();
            $agensiCom = AgensiResource::collection($Agensi);
            $projectCom = ProjectResource::collection($Project);
            $lowonganCom = LowonganResource::collection($Lowongan);
            $combined = new Collection();
            return $combined->concat($agensiCom)->concat($projectCom)->concat($lowonganCom);
            return response()->json([
            'data' => collection($combined),
            'message' => 'Berhasil',
            'success' => true,  
            ]);
        return view("user.daftarLowongan",compact('combined'));

        // $agensi = Agensi::with('projects', 'projects.lowongans')->get();
        //     return response()->json(['agensi'=>$agensi]);
        //     return view("user.daftarLowongan",compact('agensi'));
    }
    
    public function show($id){
        $lowongan = Lowongan::find($id);
        $agensi = Agensi::find($id);
        $project = Project::find($id);
        if ($lowongan && $agensi && $project) {
            return response()->json(['lowongan'=>$lowongan, 'agensi'=>$agensi, 'project'=>$project], 200);
            return view("user.daftarLowongan",compact('lowongan','agensi', 'project'));
        } else{
            return response()->json(['message'=>'Tidak Ada Data'], 200);
        };
    }



}
