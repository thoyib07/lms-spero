<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Agensi;
use App\Models\Pendaftar;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function dashboard(){
        $admin = Admin::count();
        $pendaftar = Pendaftar::count();
        $agensi = Agensi::count();
        return view('back.superadmin.dashboard', compact('admin', 'agensi', 'pendaftar'));
    }
}
