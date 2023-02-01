<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('back.admin.dashboard');
    }

    public function index(){
        $admin = Admin::with('users')->paginate();
        return view('back.admin.index', compact('admin'));
    }

    public function create(){
        return view('back.admin.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama_panjang' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $input_array_user = array(
            'level' => 2,
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        );

        $user = User::create($input_array_user);

        $input_array_admin = array(
            'user_id' => $user->id,
            'nama_panjang' => $request['nama_panjang'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'alamat' => $request['alamat'],
            'no_hp' => $request['no_hp'],
        );

        $user->admins()->create($input_array_admin);

        return redirect()->route('superadmin.admin.index')->with('success', 'Data added successfully');
    }

    public function show($id){
        $admin = Admin::with('users')->find($id);
        return view('back.admin.show', compact('admin'));
    }

    public function edit($id){
        $admin = Admin::with('users')->find($id);
        return view('back.admin.edit', compact('admin'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_panjang' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $admin = Admin::find($id);
        
        $admin->update([
            'nama_panjang' => $request->nama_panjang,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);
        $admin->users()->update([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('superadmin.admin.index')->with('success', 'Data successfully updated');
    }

    public function destroy($id){
        $admin = Admin::with('users')->find($id);
        
        $admin->update([
            'status_aktif' => 2,
        ]);
        $admin->users()->update([
            'status_aktif' => 2,
        ]);
        
        return redirect()->route('superadmin.admin.index')->with('success', 'Data deleted successfully');
    }
}
