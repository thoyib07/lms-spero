<?php

namespace App\Http\Controllers\Front;

use App\Models\Materi;
use App\Models\PreTest;
use App\Models\PostTest;
use App\Models\Notifikasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class   materiFrontController extends Controller
{
    public function index(){
        $Materi = Materi::latest()->get();
            $Notifikasi = Notifikasi::latest()->get();

            return view("user.lowongan",compact('Materi','Notifikasi'));
    }

    public function lowonganHomeExam($id){
        $Materi = Materi::find($id);
        if ($Materi) {
            return view("user.lowonganHomeExam",compact('Materi'));
        }else {
            return response()->json(['message'=>'Tidak Ada Data'], 200);
        }
        return view("user.lowonganHomeExam",compact('Materi'));
    }

    public function ulanganIndex($id){
        $materiPostTest = PostTest::with('materis')->where('materi_id',$id)->paginate(1);
        if ($materiPostTest) {
            return view("user.ulangan",compact('materiPostTest'));
            // dd($materiPostTest);
        }else {
            return response()->json(['message'=>'Tidak Ada Data'], 200);
        }
        return view("user.ulangan",compact('materiPostTest'));
        // dd($materiPostTest);
    }
    
    public function nilaiUlanganIndex($id){
        $nilaiPostTest = Materi::find($id);
        if ($nilaiPostTest) {
            return view("user.exam__nilai",compact('nilaiPostTest'));
            // dd($nilaiPostTest);
        }else {
            return response()->json(['message'=>'Tidak Ada Data'], 200);
        }
        return view("user.exam__nilai",compact('nilaiPostTest'));
    }

    public function paginatePostTest($id){
        $paginatePostTest = Materi::find($id);
        if ($paginatePostTest) {
            return view("user.paginate_exam",compact('paginatePostTest'));
            // dd($paginatePostTest);
        }else {
            return response()->json(['message'=>'Tidak Ada Data'], 200);
        }
        return view("user.paginate_exam",compact('paginatePostTest'));
    }

    public function ulanganPreIndex($id){
        $materiPreTest = PreTest::with('materis')->where('materi_id',$id)->paginate(1);
        if ($materiPreTest) {
            return view("user.ulanganPre",compact('materiPreTest'));
            // dd($materiPreTest);
        }else {
            return response()->json(['message'=>'Tidak Ada Data'], 200);
        }
        return view("user.ulanganPre",compact('materiPreTest'));
        // dd($materiPreTest);
    }
    public function nilaiUlanganPreIndex($id){
        $nilaiPreTest = Materi::find($id);
        if ($nilaiPreTest) {
            return view("user.nilaiPretest",compact('nilaiPreTest'));
            // dd($nilaiPreTest);
        }else {
            return response()->json(['message'=>'Tidak Ada Data'], 200);
        }
        return view("user.nilaiPretest",compact('nilaiPreTest'));
    }

    public function examVid($id){
        $examVid = Materi::find($id);
        if ($examVid) {
            return view("user.exam__vid",compact('examVid'));
            // dd($examVid);
        }else {
            return response()->json(['message'=>'Tidak Ada Data'], 200);
        }
        return view("user.exam__vid",compact('examVid'));
    }

    public function pageChat($id){
        $pageChat = Materi::find($id);
        if ($pageChat) {
            return view("user.pageChat",compact('pageChat'));
            // dd($pageChat);
        }else {
            return response()->json(['message'=>'Tidak Ada Data'], 200);
        }
        return view("user.pageChat",compact('pageChat'));
    }
}
