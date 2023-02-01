<?php

namespace App\Http\Controllers;

use App\Models\Agensi;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index(){
        $project = Project::with('agensis')->paginate();
        return view('back.project.index', compact('project'));
    }

    public function create(){
        $agensi = Agensi::all();
        return view('back.project.create', compact('agensi'));
    }

    public function store(Request $request){
        $request->validate([
            'judul_project' => 'required',
            'deskripsi' => 'required',
        ]);

        $input_array_project = array(
            'agensi_id' => $request->agensi_id,
            'judul_project' => $request['judul_project'],
            'deskripsi' => $request['deskripsi'],
        );

        Project::create($input_array_project);

        return redirect()->route('agensi.project.index')->with('success', 'Data added successfully');
    }

    public function show($id){
        $project = Project::with('agensis')->find($id);
        return view('back.project.show', compact('project'));
    }

    public function edit($id){
        $project = Project::with('agensis')->find($id);
        return view('back.project.edit', compact('project'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'judul_project' => 'required',
            'deskripsi' => 'required',
        ]);

        $project = Project::find($id);
        $project->update([
            'judul_project' => $request->judul_project,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('agensi.project.index')->with('success', 'Data successfully updated');
    }

    public function destroy($id){
        $project = Project::find($id);

        $project->update([
            'status_aktif' => 2,
        ]);
        
        return redirect()->route('agensi.project.index')->with('success', 'Data deleted successfully');
    }

    public function terhapus(){
        $project = Project::with('agensis')->get();
        return view('back.project.terhapus', compact('project'));
    }

    public function pulihkan($id){
        $project = Project::find($id);
        
        $project->update([
            'status_aktif' => 1,
        ]);

        return redirect()->route('agensi.project.terhapus')->with('success', 'Data recovered successfully');
    }
}
