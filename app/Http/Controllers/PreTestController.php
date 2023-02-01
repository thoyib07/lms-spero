<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\PreTest;
use Illuminate\Http\Request;

class PreTestController extends Controller
{
    public function index(){
        $pretest = PreTest::with('materis')->paginate();
        return view('back.pretest.index', compact('pretest'));
    }

    public function create(){
        $materi = Materi::all();
        return view('back.pretest.create', compact('materi'));
    }

    public function store(Request $request){
        $request->validate([
            'materi_id' => 'required',
            'soal' => 'required',
            'jawaban_a' => 'required',
            'jawaban_b' => 'required',
            'jawaban_c' => 'required',
            'jawaban_d' => 'required',
            'jawaban_true' => 'required',
        ]);

        $input_array_pre_test = array(
            'materi_id' => $request['materi_id'],
            'soal' => $request['soal'],
            'jawaban_a' => $request['jawaban_a'],
            'jawaban_b' => $request['jawaban_b'],
            'jawaban_c' => $request['jawaban_c'],
            'jawaban_d' => $request['jawaban_d'],
            'jawaban_true' => $request['jawaban_true'],
        );

        PreTest::create($input_array_pre_test);

        return redirect()->route('agensi.pretest.index')->with('success', 'Data added successfully');
    }

    public function show($id){
        $pretest = PreTest::with('materis')->find($id);
        return view('back.pretest.show', compact('pretest'));
    }

    public function edit($id){
        $pretest = PreTest::with('materis')->find($id);
        return view('back.pretest.edit', compact('pretest'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'soal' => 'required',
            'jawaban_a' => 'required',
            'jawaban_b' => 'required',
            'jawaban_c' => 'required',
            'jawaban_d' => 'required',
            'jawaban_true' => 'required',
        ]);

        $pretest = PreTest::find($id);
        $pretest->update([
            'soal' => $request->soal,
            'jawaban_a' => $request->jawaban_a,
            'jawaban_b' => $request->jawaban_b,
            'jawaban_c' => $request->jawaban_c,
            'jawaban_d' => $request->jawaban_d,
            'jawaban_true' => $request->jawaban_true,
        ]);

        return redirect()->route('agensi.pretest.index')->with('success', 'Data successfully updated');
    }

    public function destroy($id){
        $pretest = PreTest::find($id);

        $pretest->update([
            'status_aktif' => 2,
        ]);
        
        return redirect()->route('agensi.pretest.index')->with('success', 'Data deleted successfully');
    }
}
