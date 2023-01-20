<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\Project;
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
            'status_aktif' => 1,
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
            'status_aktif' => $request->status_aktif,
        ]);

        return redirect()->route('agensi.lowongan.index')->with('success', 'Data successfully updated');
    }

    public function destroy($id){
        $lowongan = Lowongan::find($id);
        $lowongan->delete();
        return redirect()->route('agensi.lowongan.index')->with('success', 'Data deleted successfully');
    }
}
