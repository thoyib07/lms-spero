<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\PreTest;
use App\Models\Lowongan;
use App\Models\PostTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MateriController extends Controller
{
    public function index(){
        $materi = Materi::with('lowongans')->get();
        return view('back.materi.index', compact('materi'));
    }

    public function create(){
        $lowongan = Lowongan::all();
        return view('back.materi.create', compact('lowongan'));
    }

    public function store(Request $request){
        $request->validate([
            'lowongan_id' => 'required',
            'judul_materi' => 'required',
            'video_1' => 'required|url',
            'intruksi_1' => 'required',
            'penjelasan_1' => 'required',
            'pertanyaan_1' => 'required',
            'file_pdf' => 'required',
            'video_2' => 'required|url',
            'intruksi_2' => 'required',
            'penjelasan_2' => 'required',
            'instruksi_studi_kasus' => 'required',
            'penjelasan_studi_kasus' => 'required',
            'pertanyaan_studi_kasus' => 'required',
            'praktekkan' => 'required',
            'instruksi_essay' => 'required',
            'urutan_materi' => 'required',
            'soal_pretest' => 'required',
            'jawaban_a_pretest' => 'required',
            'jawaban_b_pretest' => 'required',
            'jawaban_c_pretest' => 'required',
            'jawaban_d_pretest' => 'required',
            'jawaban_true_pretest' => 'required',
            'soal_posttest' => 'required',
            'jawaban_a_posttest' => 'required',
            'jawaban_b_posttest' => 'required',
            'jawaban_c_posttest' => 'required',
            'jawaban_d_posttest' => 'required',
            'jawaban_true_posttest' => 'required',
        ]);

        $input_array_materi = array(
            'user_id' => Auth::id(),
            'lowongan_id' => $request['lowongan_id'],
            'judul_materi' => $request['judul_materi'],
            'video_1' => $request['video_1'],
            'intruksi_1' => $request['intruksi_1'],
            'penjelasan_1' => $request['penjelasan_1'],
            'pertanyaan_1' => $request['pertanyaan_1'],
            'video_2' => $request['video_2'],
            'intruksi_2' => $request['intruksi_2'],
            'penjelasan_2' => $request['penjelasan_2'],
            'instruksi_studi_kasus' => $request['instruksi_studi_kasus'],
            'penjelasan_studi_kasus' => $request['penjelasan_studi_kasus'],
            'pertanyaan_studi_kasus' => $request['pertanyaan_studi_kasus'],
            'praktekkan' => $request['praktekkan'],
            'instruksi_essay' => $request['instruksi_essay'],
            'urutan_materi' => $request['urutan_materi'],
        );

        if($file_pdf = $request->file('file_pdf')){
            $destination_path = 'pdf/';
            $var_file_pdf = date('YmdHis') . "." . $file_pdf->getClientOriginalExtension();
            $file_pdf->move($destination_path, $var_file_pdf);
            $input_array_materi['file_pdf'] = $var_file_pdf;
        }

        $materi = Materi::create($input_array_materi);

        if($request['soal_pretest'] > 0){
            foreach($request['soal_pretest'] as $pretest => $pretests){
                $input_array_pretest = array(
                    'materi_id' => $materi->id,
                    'soal' => $request['soal_pretest'][$pretest],
                    'jawaban_a' => $request['jawaban_a_pretest'][$pretest],
                    'jawaban_b' => $request['jawaban_b_pretest'][$pretest],
                    'jawaban_c' => $request['jawaban_c_pretest'][$pretest],
                    'jawaban_d' => $request['jawaban_d_pretest'][$pretest],
                    'jawaban_true' => $request['jawaban_true_pretest'][$pretest],
                );
                PreTest::create($input_array_pretest);
            }
        }

        if($request['soal_posttest'] > 0){
            foreach($request['soal_posttest'] as $posttest => $posttests){
                $input_array_posttest = array(
                    'materi_id' => $materi->id,
                    'soal' => $request['soal_posttest'][$posttest],
                    'jawaban_a' => $request['jawaban_a_posttest'][$posttest],
                    'jawaban_b' => $request['jawaban_b_posttest'][$posttest],
                    'jawaban_c' => $request['jawaban_c_posttest'][$posttest],
                    'jawaban_d' => $request['jawaban_d_posttest'][$posttest],
                    'jawaban_true' => $request['jawaban_true_posttest'][$posttest],
                );
                PostTest::create($input_array_posttest);
            }
        }

        if(auth()->user()->level == 1){
            return redirect()->route('superadmin.materi.index')->with('success', 'Data added successfully');
        }elseif(auth()->user()->level == 2){
            return redirect()->route('admin.materi.index')->with('success', 'Data added successfully');
        }elseif(auth()->user()->level == 3){
            return redirect()->route('agensi.materi.index')->with('success', 'Data added successfully');
        }
    }

    public function show($id){
        $materi = Materi::with('lowongans')->find($id);
        return view('back.materi.show', compact('materi'));
    }

    public function edit($id){
        $materi = Materi::with('lowongans')->find($id);
        return view('back.materi.edit', compact('materi'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'judul_materi' => 'required',
            'video_1' => 'required|url',
            'intruksi_1' => 'required',
            'penjelasan_1' => 'required',
            'pertanyaan_1' => 'required',
            'file_pdf' => 'nullable',
            'video_2' => 'required|url',
            'intruksi_2' => 'required',
            'penjelasan_2' => 'required',
            'instruksi_studi_kasus' => 'required',
            'penjelasan_studi_kasus' => 'required',
            'pertanyaan_studi_kasus' => 'required',
            'praktekkan' => 'required',
            'instruksi_essay' => 'required',
            'urutan_materi' => 'required',
        ]);

        $materi    = Materi::with('pre_tests', 'post_tests')->find($id);
        $preTests  = $materi->pre_tests;
        $postTests = $materi->post_tests;

        if($file_pdf = $request->file('file_pdf')){
            $destination_path = 'pdf/';
            $var_file_pdf = date('YmdHis') . "." . $file_pdf->getClientOriginalExtension();
            $file_pdf->move($destination_path, $var_file_pdf);
            $materi['file_pdf'] = $var_file_pdf;
        }

        $materi->update([
            'judul_materi' => $request->judul_materi,
            'video_1' => $request['video_1'],
            'intruksi_1' => $request->intruksi_1,
            'penjelasan_1' => $request->penjelasan_1,
            'pertanyaan_1' => $request->pertanyaan_1,
            'video_2' => $request['video_2'],
            'intruksi_2' => $request->intruksi_2,
            'penjelasan_2' => $request->penjelasan_2,
            'instruksi_studi_kasus' => $request->instruksi_studi_kasus,
            'penjelasan_studi_kasus' => $request->penjelasan_studi_kasus,
            'pertanyaan_studi_kasus' => $request->pertanyaan_studi_kasus,
            'praktekkan' => $request->praktekkan,
            'instruksi_essay' => $request->instruksi_essay,
            'urutan_materi' => $request->urutan_materi,
        ]);

        /* Joy Nyoba */
        foreach ($preTests as $key => $preTest) {
            $preTest->soal         = $request->soal_pretest[$key];
            $preTest->jawaban_a    = $request->jawaban_a_pretest[$key];
            $preTest->jawaban_b    = $request->jawaban_b_pretest[$key];
            $preTest->jawaban_c    = $request->jawaban_c_pretest[$key];
            $preTest->jawaban_d    = $request->jawaban_d_pretest[$key];
            $preTest->jawaban_true = $request->jawaban_true_pretest[$key];
            
            $preTest->save();
        }
        
        foreach ($postTests as $key => $postTest) {
            $postTest->soal         = $request->soal_posttest[$key];
            $postTest->jawaban_a    = $request->jawaban_a_posttest[$key];
            $postTest->jawaban_b    = $request->jawaban_b_posttest[$key];
            $postTest->jawaban_c    = $request->jawaban_c_posttest[$key];
            $postTest->jawaban_d    = $request->jawaban_d_posttest[$key];
            $postTest->jawaban_true = $request->jawaban_true_posttest[$key];
            
            $postTest->save();
        }
        /* /Joy Nyoba */

        if(auth()->user()->level == 1){
            return redirect()->route('superadmin.materi.index')->with('success', 'Data successfully updated');
        }elseif(auth()->user()->level == 2){
            return redirect()->route('admin.materi.index')->with('success', 'Data successfully updated');
        }elseif(auth()->user()->level == 3){
            return redirect()->route('agensi.materi.index')->with('success', 'Data successfully updated');
        }
    }

    public function destroy($id){
        $materi = Materi::find($id);
        $pretest = PreTest::where('materi_id', $id)->first();
        $posttest = PostTest::where('materi_id', $id)->first();
        
        $materi->update([
            'status_aktif' => 2,
        ]);

        $pretest->update([
            'status_aktif' => 2,
        ]);

        $posttest->update([
            'status_aktif' => 2,
        ]);

        if(auth()->user()->level == 1){
            return redirect()->route('superadmin.materi.index')->with('success', 'Data deleted successfully');
        }elseif(auth()->user()->level == 2){
            return redirect()->route('admin.materi.index')->with('success', 'Data deleted successfully');
        }elseif(auth()->user()->level == 3){
            return redirect()->route('agensi.materi.index')->with('success', 'Data deleted successfully');
        }
    }

    public function terhapus(){
        $materi = Materi::all();
        return view('back.materi.terhapus', compact('materi'));
    }

    public function pulihkan($id){
        $materi = Materi::find($id);
        $pretest = PreTest::where('materi_id', $id)->first();
        $posttest = PostTest::where('materi_id', $id)->first();
        
        $materi->update([
            'status_aktif' => 1,
        ]);

        $pretest->update([
            'status_aktif' => 1,
        ]);

        $posttest->update([
            'status_aktif' => 1,
        ]);

        if(auth()->user()->level == 1){
            return redirect()->route('superadmin.materi.terhapus')->with('success', 'Data recovered successfully');
        }elseif(auth()->user()->level == 2){
            return redirect()->route('admin.materi.terhapus')->with('success', 'Data recovered successfully');
        }elseif(auth()->user()->level == 3){
            return redirect()->route('agensi.materi.terhapus')->with('success', 'Data recovered successfully');
        }
    }
}
