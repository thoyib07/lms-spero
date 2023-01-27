<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agensi;
use App\Models\Direktur;
use Illuminate\Http\Request;

class AgensiController extends Controller
{
    public function dashboard(){
        return view('back.agensi.dashboard');
    }

    public function settings(){
        return view('back.agensi.settings')->with('user', auth()->user());
    }

    public function verification(){
        $agensi = Agensi::with('users', 'direkturs')->paginate();
        return view('back.agensi.verification', compact('agensi'));
    }

    public function postverification($id){
        $agensi = Agensi::with('users', 'direkturs')->find($id);
        $agensi->users()->update([
            'status_aktif' => 1,
        ]);

        if(auth()->user()->level == 1){
            return redirect()->route('superadmin.agensi.verification')->with('success', 'Data verified successfully');
        }elseif(auth()->user()->level == 2){
            return redirect()->route('admin.agensi.verification')->with('success', 'Data verified successfully');
        }
    }

    public function show2($id){
        $agensi = Agensi::with('users', 'direkturs')->find($id);
        return view('back.agensi.show2', compact('agensi'));
    }

    public function createstepone(Request $request){
        $direktur = $request->session()->get('direktur');

        return view('back.agensi.create-step-one', compact('direktur'));
    }

    public function postcreatestepone(Request $request){
        $request->validate([
            'nama_panjang' => 'required',
            'email2' => 'required|email',
            'alamat2' => 'required',
            'tanggal_lahir' => 'required',
            'no_hp' => 'required',
        ]);

        $input_array_direktur = array(
            'nama_panjang' => $request['nama_panjang'],
            'email' => $request['email2'],
            'alamat' => $request['alamat2'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'no_hp' => $request['no_hp'],
            'status_aktif' => 1,
        );

        if(empty($request->session()->get('direktur'))){
            $direktur = Direktur::create($input_array_direktur);
            $direktur->fill($input_array_direktur);
            $request->session()->put('direktur', $direktur);
        }else{
            $direktur = $request->session()->get('direktur');
            $direktur->fill($input_array_direktur);
            $request->session()->put('direktur', $direktur);
        }

        return redirect()->route('agensi.create-step-two');
        return view('back.agensi.create-step-two', compact('direktur', 'agensi'));
    }

    public function createsteptwo(Request $request){
        $direktur = $request->session()->get('direktur');
        $agensi = $request->session()->get('agensi');

        return view('back.agensi.create-step-two', compact('direktur', 'agensi'));
    }

    public function postcreatesteptwo(Request $request){
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
            'nama_usaha' => 'required',
            'alamat' => 'required',
            'nib' => 'required',
            'telepon' => 'required',
        ]);

        if(empty($request->session()->get('agensi'))){
            $input_array_user = array(
                'level' => 2,
                'status_aktif' => 3,
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
            );
            $user = User::create($input_array_user);

            $direktur = $request->session()->get('direktur');
            $input_array_agensi = array(
                'user_id' => $user->id,
                'direktur_id' => $direktur->id,
                'nama_usaha' => $request['nama_usaha'],
                'alamat' => $request['alamat'],
                'nib' => $request['nib'],
                'telepon' => $request['telepon'],
            );

            $agensi = $user->agensis()->create($input_array_agensi);
            $agensi->fill($validate);
            $request->session()->put('agensi', $agensi);
        }else{
            $agensi = $request->session()->get('agensi');
            $agensi->fill($validate);
            $request->session()->put('agensi', $agensi);
        }

        return redirect()->route('agensi.create-step-three');
    }

    public function createstepthree(Request $request){
        $direktur = $request->session()->get('direktur');
        $agensi = $request->session()->get('agensi');

        return view('back.agensi.create-step-three', compact('direktur', 'agensi'));
    }

    public function postcreatestepthree(Request $request){
        $direktur = $request->session()->get('direktur');
        $agensi = $request->session()->get('agensi');

        $direktur->save();
        $agensi->save();

        $request->session()->forget('direktur');
        $request->session()->forget('agensi');

        return redirect()->route('agensi.create-step-one')->with('success', 'Data added successfully, please wait for further notification');
    }

    public function index(){
        $agensi = Agensi::with('users', 'direkturs')->get();
        return view('back.agensi.index', compact('agensi'));
    }

    public function create(){
        return view('back.agensi.create');
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
            'nama_usaha' => 'required',
            'alamat' => 'required',
            'nib' => 'required',
            'telepon' => 'required',
            'nama_panjang' => 'required',
            'email2' => 'required|email',
            'alamat2' => 'required',
            'tanggal_lahir' => 'required',
            'no_hp' => 'required',
        ]);

        $input_array_user = array(
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'level' => 3,
            'status_aktif' => 1,
        );

        $user = User::create($input_array_user);

        $input_array_direktur = array(
            'nama_panjang' => $request['nama_panjang'],
            'email' => $request['email2'],
            'alamat' => $request['alamat2'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'no_hp' => $request['no_hp'],
            'status_aktif' => 1,
        );

        $direktur = Direktur::create($input_array_direktur);

        $input_array_agensi = array(
            'user_id' => $user->id,
            'direktur_id' => $direktur->id,
            'nama_usaha' => $request['nama_usaha'],
            'alamat' => $request['alamat'],
            'nib' => $request['nib'],
            'telepon' => $request['telepon'],
        );

        if($logo = $request->file('logo')){
            $destination_path = 'logo/';
            $logo_foto = date('YmdHis') . "." . $logo->getClientOriginalExtension();
            $logo->move($destination_path, $logo_foto);
            $input_array_agensi['logo'] = $logo_foto;
        }

        $user->agensis()->create($input_array_agensi);

        if(auth()->user()->level == 1){
            return redirect()->route('superadmin.agensi.index')->with('success', 'Data added successfully');
        }elseif(auth()->user()->level == 2){
            return redirect()->route('admin.agensi.index')->with('success', 'Data added successfully');
        }
    }

    public function show($id){
        $agensi = Agensi::with('users', 'direkturs')->find($id);
        return view('back.agensi.show', compact('agensi'));
    }

    public function edit($id){
        $agensi = Agensi::with('users', 'direkturs')->find($id);
        return view('back.agensi.edit', compact('agensi'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
            'logo' => 'nullable',
            'nama_usaha' => 'required',
            'alamat' => 'required',
            'nib' => 'required',
            'telepon' => 'required',
            'nama_panjang' => 'required',
            'email2' => 'required|email',
            'alamat2' => 'required',
            'tanggal_lahir' => 'required',
            'no_hp' => 'required',
        ]);

        $agensi = Agensi::find($id);

        if($logo = $request->file('logo')){
            $destination_path = 'logo/';
            $logo_foto = date('YmdHis') . "." . $logo->getClientOriginalExtension();
            $logo->move($destination_path, $logo_foto);
            $agensi['logo'] = $logo_foto;
        }

        $agensi->update([
            'nama_usaha' => $request->nama_usaha,
            'alamat' => $request->alamat,
            'nib' => $request->nib,
            'telepon' => $request->telepon,
        ]);

        $agensi->direkturs()->update([
            'nama_panjang' => $request->nama_panjang,
            'email' => $request['email2'],
            'alamat' => $request['alamat2'],
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_hp' => $request->no_hp,
        ]);

        $agensi->users()->update([
            'status_aktif' => $request->status_aktif,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if(auth()->user()->level == 1){
            return redirect()->route('superadmin.agensi.index')->with('success', 'Data successfully updated');
        }elseif(auth()->user()->level == 2){
            return redirect()->route('admin.agensi.index')->with('success', 'Data successfully updated');
        }
    }

    public function destroy($id){
        $agensi = Agensi::with('users', 'direkturs')->find($id);

        $agensi->update([
            'status_aktif' => 2,
        ]);
        $agensi->direkturs()->update([
            'status_aktif' => 2,
        ]);
        $agensi->users()->update([
            'status_aktif' => 2,
        ]);
        
        if(auth()->user()->level == 1){
            return redirect()->route('superadmin.agensi.index')->with('success', 'Data deleted successfully');
        }elseif(auth()->user()->level == 2){
            return redirect()->route('superadmin.agensi.index')->with('success', 'Data deleted successfully');
        }
    }
}
