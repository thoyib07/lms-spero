<?php

namespace App\Http\Controllers\Front;

use App\Models\Materi;
use App\Models\Notifikasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class   materiFrontController extends Controller
{
    public function index(){
        $Materi = Materi::latest()->get();
            $Notifikasi = Notifikasi::latest()->get();
        
            // return view("user.exam",compact('Materi'));
            return view("user.lowongan",compact('Materi','Notifikasi'));
    }

    public function lowonganHomeExam($id){
        $Materi = Materi::find($id);
        if ($Materi) {
            return view("user.lowonganHomeExam",compact('Materi'));
        }else {
            return response()->json(['message'=>'Tidak Ada Data'], 200);
        }
        // return view("user.exam",compact('Materi'));
        return view("user.lowonganHomeExam",compact('Materi'));
    }
    // public function notifikasi(){
    //     $Notifikasi = Notifikasi::latest()->get();
    //         if ($Notifikasi) {
    //             return view("user.lowongan",compact('Notifikasi'));
    //         }else {
    //             return response()->json(['message'=>'Tidak Ada Data'], 200);
    //         }
    //         // return view("user.exam",compact('Notifikasi'));
    //         return view("user.lowongan",compact('Notifikasi'));
    // }
}
