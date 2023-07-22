<?php

namespace App\Http\Controllers\Front;

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

class LowonganFrontController extends Controller
{
    public function indexLowongan(){
        $Lowongan = Lowongan::first()->get();
        if ($Lowongan) {
            return view("user.daftarLowongan",compact('Lowongan'));
        } else{
            return response()->json(['message'=>'Tidak Ada Data'], 200);
        };

        return view("user.daftarLowongan",compact('Lowongan'));
    }
    // public function index(){
    //     $Agensi = Agensi::all();
    //     $Project = Project::all();
    //     $Lowongan = Lowongan::all();
    //         $agensiCom = AgensiResource::collection($Agensi);
    //         $projectCom = ProjectResource::collection($Project);
    //         $lowonganCom = LowonganResource::collection($Lowongan);
    //         $combined = new Collection();
    //         return $combined->concat($agensiCom)->concat($projectCom)->concat($lowonganCom);
    //         return response()->json([
    //         'data' => collection($combined),
    //         'message' => 'Berhasil',
    //         'success' => true,  
    //         ]);
    //     return view("user.daftarLowongan",compact('combined'));

    //     // $agensi = Agensi::with('projects', 'projects.lowongans')->get();
    //     //     return response()->json(['agensi'=>$agensi]);
    //     //     return view("user.daftarLowongan",compact('agensi'));
    // }
    
    public function show($id){
        // $lowongan = Lowongan::find($id);
        // $agensi = Agensi::find($id);
        // $project = Project::find($id);
        $data = Lowongan::with(['projects.agensis'])->where('id',$id)->first();
        // dd($data);
        if ($data) {
            return view("user.daftarLowongan_2",compact('data'));
        } else{
            return response()->json(['message'=>'Tidak Ada Data'], 200);
        };
    }



}
