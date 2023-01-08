<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agency;
use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AgencyController extends Controller
{
    public function dashboard(){
        return view('back.agency.dashboard');
    }

    public function index(){
        $post = Agency::with('users')->get();
        return view('back.agency.index', compact('post'));
    }

    public function register(){
        return view('back.agency.register');
    }

    public function postregister(Request $request){
        $request->validate([
            'name' => 'required',
            'date_of_birth' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'business_name' => 'required',
            'business_identification_number' => 'required',
            'telephone_number' => 'required',
            'password' => 'required',
        ]);

        $director = new Director();
        $director->name = $request->name;;
        $director->date_of_birth = $request->date_of_birth;
        $director->phone_number = $request->phone_number;
        $director->email = $request->email;
        $director->address = $request->address;
        $director->save();

        $user = new User();
        $user->level = 3;
        $user->status = 1;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $agency = new Agency();
        $agency->user_id = $user->id;
        $agency->director_id = $director->id;
        $agency->business_name = $request->business_name;
        $agency->business_identification_number = $request->business_identification_number;
        $agency->telephone_number = $request->telephone_number;
        $agency->address = $request->address;
        $agency->save();

        return redirect()->route('agency.register');
    }

    public function create(){
        return view('back.agency.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'date_of_birth' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'business_name' => 'required',
            'business_identification_number' => 'required',
            'telephone_number' => 'required',
            'password' => 'required',
        ]);

        $director = new Director();
        $director->name = $request->name;;
        $director->date_of_birth = $request->date_of_birth;
        $director->phone_number = $request->phone_number;
        $director->email = $request->email;
        $director->address = $request->address;
        $director->save();

        $user = new User();
        $user->level = 3;
        $user->status = 1;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $agency = new Agency();
        $agency->user_id = $user->id;
        $agency->director_id = $director->id;
        $agency->business_name = $request->business_name;
        $agency->business_identification_number = $request->business_identification_number;
        $agency->telephone_number = $request->telephone_number;
        $agency->address = $request->address;
        $agency->save();

        return redirect()->route('superadmin.agency.index');
    }
}
