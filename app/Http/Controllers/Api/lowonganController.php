<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class lowonganController extends Controller
{
    public function index(){
        $lowongan = Lowongan::latest()->get();
        return response()->json([
            'data' => LowonganResource::collection($lowongan),
            'message' => 'Berhasil',
            'success' => true,  
        ]);
        return view("user.lowongan",compact('lowongan'));
    }
}
