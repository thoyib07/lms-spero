<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\PostTest;
use Illuminate\Http\Request;

class PostTestController extends Controller
{
    public function index(){
        $posttest = PostTest::with('materis')->paginate();
        return view('back.posttest.index', compact('posttest'));
    }

    public function create(){
        $materi = Materi::all();
        return view('back.posttest.create', compact('materi'));
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

        $input_array_post_test = array(
            'materi_id' => $request['materi_id'],
            'soal' => $request['soal'],
            'jawaban_a' => $request['jawaban_a'],
            'jawaban_b' => $request['jawaban_b'],
            'jawaban_c' => $request['jawaban_c'],
            'jawaban_d' => $request['jawaban_d'],
            'jawaban_true' => $request['jawaban_true'],
        );

        PostTest::create($input_array_post_test);

        return redirect()->route('agensi.posttest.index')->with('success', 'Data added successfully');
    }

    public function edit($id){
        $posttest = PostTest::with('materis')->find($id);
        return view('back.posttest.edit', compact('posttest'));
    }

    public function show($id){
        $posttest = PostTest::with('materis')->find($id);
        return view('back.posttest.show', compact('posttest'));
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

        $posttest = PostTest::find($id);
        $posttest->update([
            'soal' => $request->soal,
            'jawaban_a' => $request->jawaban_a,
            'jawaban_b' => $request->jawaban_b,
            'jawaban_c' => $request->jawaban_c,
            'jawaban_d' => $request->jawaban_d,
            'jawaban_true' => $request->jawaban_true,
        ]);

        return redirect()->route('agensi.posttest.index')->with('success', 'Data successfully updated');
    }

    public function destroy($id){
        $posttest = PostTest::find($id);

        $posttest->update([
            'status_aktif' => 2,
        ]);
        
        return redirect()->route('agensi.posttest.index')->with('success', 'Data deleted successfully');
    }
}
