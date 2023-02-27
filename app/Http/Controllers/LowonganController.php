<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\PreTest;
use App\Models\Project;
use App\Models\Lowongan;
use App\Models\PostTest;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    public function index(){
        $lowongan = Lowongan::with('projects')->paginate();
        return view('back.lowongan.index', compact('lowongan'));
    }

    public function create(){
        $project = Project::all();
        return view('back.lowongan.create', compact('project'));
    }

    public function store(Request $request){
        $request->validate([
            'project_id' => 'required',
            'level' => 'required',
            'client' => 'required',
            'kuota' => 'required',
            'lokasi' => 'required',
            'tahun_pengalaman' => 'required',
            'skill_pekerjaan' => 'required',
            'deskripsi_pekerjaan' => 'required',
            'syarat_pekerjaan' => 'required',
        ]);

        $input_array_lowongan = array(
            'project_id' => $request['project_id'],
            'level' => $request['level'],
            'client' => $request['client'],
            'kuota' => $request['kuota'],
            'lokasi' => $request['lokasi'],
            'gaji' => $request['gaji'],
            'tahun_pengalaman' => $request['tahun_pengalaman'],
            'skill_pekerjaan' => $request['skill_pekerjaan'],
            'deskripsi_pekerjaan' => $request['deskripsi_pekerjaan'],
            'syarat_pekerjaan' => $request['syarat_pekerjaan'],
        );

        Lowongan::create($input_array_lowongan);

        return redirect()->route('agensi.lowongan.index')->with('success', 'Data added successfully');
    }

    public function show($id){
        $lowongan = Lowongan::with('projects')->find($id);
        return view('back.lowongan.show', compact('lowongan'));
    }

    public function edit($id){
        $lowongan = Lowongan::with('projects')->find($id);
        return view('back.lowongan.edit', compact('lowongan'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'level' => 'required',
            'client' => 'required',
            'kuota' => 'required',
            'lokasi' => 'required',
            'tahun_pengalaman' => 'required',
            'skill_pekerjaan' => 'required',
            'deskripsi_pekerjaan' => 'required',
            'syarat_pekerjaan' => 'required',
        ]);

        $lowongan = Lowongan::find($id);
        $lowongan->update([
            'level' => $request->level,
            'client' => $request->client,
            'kuota' => $request->kuota,
            'lokasi' => $request->lokasi,
            'gaji' => $request->gaji,
            'tahun_pengalaman' => $request->tahun_pengalaman,
            'skill_pekerjaan' => $request->skill_pekerjaan,
            'deskripsi_pekerjaan' => $request->deskripsi_pekerjaan,
            'syarat_pekerjaan' => $request->syarat_pekerjaan,
        ]);

        return redirect()->route('agensi.lowongan.index')->with('success', 'Data successfully updated');
    }

    public function destroy($id){
        $lowongan = Lowongan::find($id);
        $materi = Materi::where('lowongan_id', $id)->first();

        $lowongan->update([
            'status_aktif' => 2,
        ]);

        $materi->update([
            'status_aktif' => 2,
        ]);

        return redirect()->route('agensi.lowongan.index')->with('success', 'Data deleted successfully');
    }

    public function terhapus(){
        $lowongan = Lowongan::all();
        return view('back.lowongan.terhapus', compact('lowongan'));
    }

    public function pulihkan($id){
        $lowongan = Lowongan::find($id);
        $materi = Materi::where('lowongan_id', $id)->first();
        
        $lowongan->update([
            'status_aktif' => 1,
        ]);

        $materi->update([
            'status_aktif' => 1,
        ]);

        return redirect()->route('agensi.lowongan.index')->with('success', 'Data deleted successfully');
    }
}
