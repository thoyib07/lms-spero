<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(){
        return view('back.admin.dashboard');
    }

    public function index(){
        $post = Admin::with('users')->get();
        return view('back.admin.index', compact('post'));
    }

    public function create(){
        return view('back.admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date_of_birth' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'address' => 'required',
            'password' => 'required',
        ]);

        $user = new User;
        $user->level = 2;
        $user->status = 1;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->created_by = Auth::id();
        $user->updated_by = Auth::id();

        $user->save();

        $admin = new Admin;
        $admin->user_id = $user->id;
        $admin->name = $request->name;
        $admin->date_of_birth = $request->date_of_birth;
        $admin->phone_number = $request->phone_number;
        $admin->address = $request->address;
        $admin->created_by = Auth::id();
        $admin->updated_by = Auth::id();

        $admin->save();

        return redirect()->route('superadmin.admin.index')->with('success', 'Data added successfully');
    }

    public function show($id)
    {
        $admin = Admin::find($id);
        return view('back.admin.show', compact('admin'));
    }

    public function edit(Admin $user_id)
    {
        // $admin = Admin::with('users')->find($user_id);
        $admin = Admin::join('users', 'admins.user_id', '=', 'users.id')->get()[0];
        //dd($admin);
        return view('back.admin.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'date_of_birth' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'address' => 'required',
            'status' => 'required',
            'password' => 'required',
        ]);

        // dd($request->post());

        // dd($id);

        // $user = User::find($id);
        // $user->level = 2;
        // $user->status = $request->status;
        // $user->email = $request->email;
        // $user->password = bcrypt($request->password);
        // $user->created_by = Auth::id();
        // $user->updated_by = Auth::id();
        // $user->save();

        $user = array(
            'level' => 2,
            'status' => $request->status,
            'email' => $request->email,
            'password' => $request->password,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
        );

        User::where('id', $id)->update($user);

        $admin = array(
            'name' => $request->name,
            'date_of_birth' => $request->date_of_birth,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'created_by' => Auth::id(),
            'updated_by' => Auth::id(),
        );

        Admin::where('user_id', $id)->update($admin);

        // $admin = Admin::find($id);
        // $admin->user_id = $user->id;
        // $admin->name = $request->name;
        // $admin->date_of_birth = $request->date_of_birth;
        // $admin->phone_number = $request->phone_number;
        // $admin->address = $request->address;
        // $admin->created_by = Auth::id();
        // $admin->updated_by = Auth::id();
        // $admin->save();

        return redirect()->route('superadmin.admin.index')->with('success', 'Data successfully updated');
    }
}
