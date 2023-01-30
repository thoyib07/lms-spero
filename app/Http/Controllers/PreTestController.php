<?php

namespace App\Http\Controllers;

use App\Models\PreTest;
use Illuminate\Http\Request;

class PreTestController extends Controller
{
    public function index(){
        $pretest = PreTest::with('materis')->paginate();
        return view('back.pretest.index', compact('pretest'));
    }
}
