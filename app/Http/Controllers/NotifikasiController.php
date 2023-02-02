<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function index(){
        $notifikasi = Notifikasi::all();
        return view('back.notifikasi.index', compact('notifikasi'));
    }

    public function terhapus(){
        $notifikasi = Notifikasi::all();
        return view('back.notifikasi.terhapus', compact('notifikasi'));
    }

    public function pulihkan($id){
        $notifikasi = Notifikasi::find($id);
        
        $notifikasi->update([
            'status_aktif' => 1,
        ]);

        if(auth()->user()->level == 1){
            return redirect()->route('superadmin.notifikasi.terhapus')->with('success', 'Data recovered successfully');
        }elseif(auth()->user()->level == 2){
            return redirect()->route('admin.notifikasi.terhapus')->with('success', 'Data recovered successfully');
        }elseif(auth()->user()->level == 3){
            return redirect()->route('agensi.notifikasi.terhapus')->with('success', 'Data recovered successfully');
        }
    }

    public function create(){
        return view('back.notifikasi.create');
    }

    public function store(Request $request){
        $request->validate([
            'judul_notifikasi' => 'required',
            'keterangan' => 'required',
            'tanggal' => 'required',
        ]);

        $input_array_notifikasi = array(
            'judul_notifikasi' => $request['judul_notifikasi'],
            'keterangan' => $request['keterangan'],
            'tanggal' => $request['tanggal'],
        );

        Notifikasi::create($input_array_notifikasi);

        if(auth()->user()->level == 1){
            return redirect()->route('superadmin.notifikasi.index')->with('success', 'Data added successfully');
        }elseif(auth()->user()->level == 2){
            return redirect()->route('admin.notifikasi.index')->with('success', 'Data added successfully');
        }elseif(auth()->user()->level == 3){
            return redirect()->route('agensi.notifikasi.index')->with('success', 'Data added successfully');
        }
    }

    public function show($id){
        $notifikasi = Notifikasi::find($id);
        return view('back.notifikasi.show', compact('notifikasi'));
    }

    public function edit($id){
        $notifikasi = Notifikasi::find($id);
        return view('back.notifikasi.edit', compact('notifikasi'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'judul_notifikasi' => 'required',
            'keterangan' => 'required',
            'tanggal' => 'required',
        ]);

        $notifikasi = Notifikasi::find($id);
        
        $notifikasi->update([
            'judul_notifikasi' => $request->judul_notifikasi,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
        ]);
        
        if(auth()->user()->level == 1){
            return redirect()->route('superadmin.notifikasi.index')->with('success', 'Data successfully updated');
        }elseif(auth()->user()->level == 2){
            return redirect()->route('admin.notifikasi.index')->with('success', 'Data successfully updated');
        }elseif(auth()->user()->level == 3){
            return redirect()->route('agensi.notifikasi.index')->with('success', 'Data successfully updated');
        }
    }

    public function destroy($id){
        $notifikasi = Notifikasi::find($id);
        
        $notifikasi->update([
            'status_aktif' => 2,
        ]);

        if(auth()->user()->level == 1){
            return redirect()->route('superadmin.notifikasi.index')->with('success', 'Data deleted successfully');
        }elseif(auth()->user()->level == 2){
            return redirect()->route('admin.notifikasi.index')->with('success', 'Data deleted successfully');
        }elseif(auth()->user()->level == 3){
            return redirect()->route('agensi.notifikasi.index')->with('success', 'Data deleted successfully');
        }
    }
}
