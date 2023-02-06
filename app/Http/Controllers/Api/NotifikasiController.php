<?php

namespace App\Http\Controllers\Api;

use App\Models\Notifikasi;
use App\Http\Controllers\Controller;
use App\Http\Resources\NotifikasiResource;
use App\Http\Controllers\Api\NotifikasiController;

class NotifikasiController extends Controller
{
    // public function index(Request $request) {
    //     $notifikasi = DB::table('notifikasis')
    //       ->where('id', $request->id)
    //       ->get();
    //   if ($notifikasi) {
    //       $view = view('user.lowongan', [
    //      'proc' => $notifikasi
    //           ])->render();
      
    //       return response()->json(['view'=> $view, 'proc' => '$notifikasi']);
    //    }
    //   }
    public function index(){


        // $notifikasi = Notifikasi::latest()->get();
        //     if ($notifikasi) {
        //         $view = view('user.lowongan', ['proc' => $notifikasi])->render();
        //         return response()->json(['view'=> $view, 'proc' => '$notifikasi']);
        //     } else{
        //         echo 'gaada data';
        //     }
        
        // return response()->json($notifikasi);
        // return view('user.lowongan', compact('notifikasi'));

        $notifikasi = Notifikasi::latest()->get();
        return response()->json([
            'data' => NotifikasiResource::collection($notifikasi),
            'message' => 'Berhasil',
            'success' => true,  
        ]);
        return view("user.lowongan",compact('notifikasi'));
    }
}
