<?php

namespace App\Http\Controllers\Api;

use App\Models\Materi;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MateriResource;
// use App\Http\Controllers\Api\materiController;

class materiController extends Controller
{
    public function index(){
        $Materi = Materi::latest()->get();
        return response()->json([
            'data' => MateriResource::collection($Materi),
            'message' => 'Berhasil',
            'success' => true,  
        ]);
        return view("user.lowongan",compact('Materi'));
    }
}
