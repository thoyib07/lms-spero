<?php

namespace App\Http\Controllers\Front;

use App\Models\PreTest;
use App\Models\PostTest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\Front\PostTestFrontController;
// use App\Http\Controllers\Front\PostTestFrontController;

class PostTestFrontController extends Controller
{
    public function index(){
        $PostTest = PostTest::first()->paginate(1);
        if ($PostTest) {
            return view("user.ulangan",compact('PostTest'));
        }else {
            return response()->json(['message'=>'Tidak Ada Data'], 200);
        }
        // return view("user.exam",compact('PostTest'));
        return view("user.ulangan",compact('PostTest'));
    }

    public function Pretest(){
        $Pretest = PreTest::first()->paginate(1);
        if ($Pretest) {
            return view("user.ulanganPre",compact('Pretest'));
        }else {
            return response()->json(['message'=>'Tidak Ada Data'], 200);
        }
        // return view("user.exam",compact('Pretest'));
        return view("user.ulanganPre",compact('Pretest'));
    }
    
    // public function index2(){
    //     $PostTest = PostTest::first()->get();
    //     if ($PostTest) {
    //         return view("user.exam",compact('PostTest'));
    //     }else {
    //         return response()->json(['message'=>'Tidak Ada Data'], 200);
    //     }
    //     // return view("user.exam",compact('PostTest'));
    //     return view("user.exam",compact('PostTest'));
    // }
}
