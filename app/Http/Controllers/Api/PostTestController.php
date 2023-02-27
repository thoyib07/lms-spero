<?php

namespace App\Http\Controllers\Api;

use App\Models\PostTest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostTestResource;

class PostTestController extends Controller
{
    public function index(){
        $PostTest = PostTest::first()->get();
        return response()->json([
            'data' => PostTestResource::collection($PostTest),
            'message' => 'Berhasil',
            'success' => true,
        ]);
        return view("user.ulangan",compact('PostTest'));
    }
}
