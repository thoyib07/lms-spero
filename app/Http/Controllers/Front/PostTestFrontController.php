<?php

namespace App\Http\Controllers\Front;

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
    
    public function index2(){
        $PostTest = PostTest::first()->get();
        if ($PostTest) {
            return view("user.exam",compact('PostTest'));
        }else {
            return response()->json(['message'=>'Tidak Ada Data'], 200);
        }
        // return view("user.exam",compact('PostTest'));
        return view("user.exam",compact('PostTest'));
    }
}
