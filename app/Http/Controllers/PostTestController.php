<?php

namespace App\Http\Controllers;

use App\Models\PostTest;
use Illuminate\Http\Request;

class PostTestController extends Controller
{
    public function index(){
        $posttest = PostTest::with('materis')->paginate();
        return view('back.posttest.index', compact('posttest'));
    }
}
