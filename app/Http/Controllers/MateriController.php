<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Lowongan;
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
            'video_1' => 'required',
            'intruksi_1' => 'required',
            'penjelasan_1' => 'required',
            'pertanyaan_1' => 'required',
            'file_pdf' => 'required',
            'video_2' => 'required',
            'intruksi_2' => 'required',
            'penjelasan_2' => 'required',
            'instruksi_studi_kasus' => 'required',
            'penjelasan_studi_kasus' => 'required',
            'pertanyaan_studi_kasus' => 'required',
            'praktekkan' => 'required',
            'instruksi_essay' => 'required',
            'urutan_materi' => 'required',
        ]);

        $input_array_materi = array(
            'user_id' => Auth::id(),
            'lowongan_id' => $request['lowongan_id'],
            'judul_materi' => $request['judul_materi'],
            'intruksi_1' => $request['intruksi_1'],
            'penjelasan_1' => $request['penjelasan_1'],
            'pertanyaan_1' => $request['pertanyaan_1'],
            'intruksi_2' => $request['intruksi_2'],
            'penjelasan_2' => $request['penjelasan_2'],
            'instruksi_studi_kasus' => $request['instruksi_studi_kasus'],
            'penjelasan_studi_kasus' => $request['penjelasan_studi_kasus'],
            'pertanyaan_studi_kasus' => $request['pertanyaan_studi_kasus'],
            'praktekkan' => $request['praktekkan'],
            'instruksi_essay' => $request['instruksi_essay'],
            'urutan_materi' => $request['urutan_materi'],
        );

        if($video_1 = $request->file('video_1')){
            $destination_path = 'video_1/';
            $var_video_1 = date('YmdHis') . "." . $video_1->getClientOriginalExtension();
            $video_1->move($destination_path, $var_video_1);
            $input_array_materi['video_1'] = $var_video_1;
        }
        
        if($file_pdf = $request->file('file_pdf')){
            $destination_path = 'pdf/';
            $var_file_pdf = date('YmdHis') . "." . $file_pdf->getClientOriginalExtension();
            $file_pdf->move($destination_path, $var_file_pdf);
            $input_array_materi['file_pdf'] = $var_file_pdf;
        }

        if($video_2 = $request->file('video_2')){
            $destination_path = 'video_2/';
            $var_video_2 = date('YmdHis') . "." . $video_2->getClientOriginalExtension();
            $video_2->move($destination_path, $var_video_2);
            $input_array_materi['video_2'] = $var_video_2;
        }

        Materi::create($input_array_materi);

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
            'video_1' => 'nullable',
            'intruksi_1' => 'required',
            'penjelasan_1' => 'required',
            'pertanyaan_1' => 'required',
            'file_pdf' => 'nullable',
            'video_2' => 'nullable',
            'intruksi_2' => 'required',
            'penjelasan_2' => 'required',
            'instruksi_studi_kasus' => 'required',
            'penjelasan_studi_kasus' => 'required',
            'pertanyaan_studi_kasus' => 'required',
            'praktekkan' => 'required',
            'instruksi_essay' => 'required',
            'urutan_materi' => 'required',
        ]);

        $materi = Materi::find($id);

        if($video_1 = $request->file('video_1')){
            $destination_path = 'video_1/';
            $var_video_1 = date('YmdHis') . "." . $video_1->getClientOriginalExtension();
            $video_1->move($destination_path, $var_video_1);
            $materi['video_1'] = $var_video_1;
        }
        
        if($file_pdf = $request->file('file_pdf')){
            $destination_path = 'pdf/';
            $var_file_pdf = date('YmdHis') . "." . $file_pdf->getClientOriginalExtension();
            $file_pdf->move($destination_path, $var_file_pdf);
            $materi['file_pdf'] = $var_file_pdf;
        }

        if($video_2 = $request->file('video_2')){
            $destination_path = 'video_2/';
            $var_video_2 = date('YmdHis') . "." . $video_2->getClientOriginalExtension();
            $video_2->move($destination_path, $var_video_2);
            $materi['video_2'] = $var_video_2;
        }
        
        $materi->update([
            'judul_materi' => $request->judul_materi,
            'intruksi_1' => $request->intruksi_1,
            'penjelasan_1' => $request->penjelasan_1,
            'pertanyaan_1' => $request->pertanyaan_1,
            'intruksi_2' => $request->intruksi_2,
            'penjelasan_2' => $request->penjelasan_2,
            'instruksi_studi_kasus' => $request->instruksi_studi_kasus,
            'penjelasan_studi_kasus' => $request->penjelasan_studi_kasus,
            'pertanyaan_studi_kasus' => $request->pertanyaan_studi_kasus,
            'praktekkan' => $request->praktekkan,
            'instruksi_essay' => $request->instruksi_essay,
            'urutan_materi' => $request->urutan_materi,
        ]);

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
        $materi->update([
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
}