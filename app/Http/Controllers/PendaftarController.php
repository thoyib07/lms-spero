<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pendaftar;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function register(){
        return view('back.pendaftar.register');
    }

    public function postregister(Request $request){
        $request->validate([
            'nama_panjang' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'no_hp' => 'required',
            'ktp' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $input_array_user = array(
            'level' => 4,
            'email' => $request['email'],
            'password' => $request['password'],
        );

        $user = User::create($input_array_user);

        if($ktp = $request->file('ktp')){
            $destination_path = 'ktp/';
            $ktp_foto = date('YmdHis') . "." . $ktp->getClientOriginalExtension();
            $ktp->move($destination_path, $ktp_foto);
        }

        $input_array_pendaftar = array(
            'user_id' => $user->id,
            'nama_panjang' => $request['nama_panjang'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'no_hp' => $request['no_hp'],
            'ktp' => $ktp_foto,
            'alamat' => $request['alamat'],
            'kota' => $request['kota'],
            'provinsi' => $request['provinsi'],
        );

        $user->pendaftars()->create($input_array_pendaftar);

        return redirect()->route('user.register');
    }

    public function index(){
        $pendaftar = Pendaftar::with('users')->paginate();
        return view('back.pendaftar.index', compact('pendaftar'));
    }

    public function create(){
        return view('back.pendaftar.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama_panjang' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'no_hp' => 'required',
            'ktp' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $input_array_user = array(
            'level' => 4,
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        );

        $user = User::create($input_array_user);

        $input_array_pendaftar = array(
            'user_id' => $user->id,
            'nama_panjang' => $request['nama_panjang'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'no_hp' => $request['no_hp'],
            'alamat' => $request['alamat'],
            'kota' => $request['kota'],
            'provinsi' => $request['provinsi'],
        );

        if($ktp = $request->file('ktp')){
            $destination_path = 'ktp/';
            $ktp_foto = date('YmdHis') . "." . $ktp->getClientOriginalExtension();
            $ktp->move($destination_path, $ktp_foto);
            $input_array_pendaftar['ktp'] = $ktp_foto;
        }

        $user->pendaftars()->create($input_array_pendaftar);

        if(auth()->user()->level == 1){
            return redirect()->route('superadmin.user.index')->with('success', 'Data added successfully');
        }elseif(auth()->user()->level == 2){
            return redirect()->route('admin.user.index')->with('success', 'Data added successfully');
        }
    }

    public function show($id){
        $pendaftar = Pendaftar::with('users')->find($id);
        return view('back.pendaftar.show', compact('pendaftar'));
    }

    public function edit($id){
        $pendaftar = Pendaftar::with('users')->find($id);
        return view('back.pendaftar.edit', compact('pendaftar'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_panjang' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'no_hp' => 'required',
            'ktp' => 'nullable',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $pendaftar = Pendaftar::find($id);

        if($ktp = $request->file('ktp')){
            $destination_path = 'ktp/';
            $ktp_foto = date('YmdHis') . "." . $ktp->getClientOriginalExtension();
            $ktp->move($destination_path, $ktp_foto);
            $pendaftar['ktp'] = $ktp_foto;
        }
        
        $pendaftar->update([
            'nama_panjang' => $request->nama_panjang,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
        ]);

        $pendaftar->users()->update([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if(auth()->user()->level == 1){
            return redirect()->route('superadmin.user.index')->with('success', 'Data successfully updated');
        }elseif(auth()->user()->level == 2){
            return redirect()->route('admin.user.index')->with('success', 'Data successfully updated');
        }
    }

    public function destroy($id){
        $pendaftar = Pendaftar::with('users')->find($id);
        $pendaftar->update([
            'status_aktif' => 2,
        ]);
        $pendaftar->users()->update([
            'status_aktif' => 2,
        ]);
        if(auth()->user()->level == 1){
            return redirect()->route('superadmin.user.index')->with('success', 'Data deleted successfully');
        }elseif(auth()->user()->level == 2){
            return redirect()->route('admin.user.index')->with('success', 'Data deleted successfully');
        }
    }
}
