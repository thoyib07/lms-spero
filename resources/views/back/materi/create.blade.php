@extends('back.templates.pages')
@section('title', isset($title) ? $title : 'Materi')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield('title')</h4>
                <div class="basic-form">
                    <form action="{{ route('agensi.materi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Lowongan</label>
                            <select class="form-control" name="lowongan_id" id="">
                              <option selected disabled>Select</option>
                              @foreach ($lowongan as $lowongans)
                                @if(auth()->user()->level == 1 or auth()->user()->level == 2)
                                    @if($lowongans->status_aktif == 1)
                                        <option value="{{ $lowongans->id }}">Project {{ $lowongans->projects->judul_project }} dengan client {{ $lowongans->client }}</option>
                                    @endif
                                @elseif(auth()->user()->level == 3)
                                    @if($lowongans->created_by == auth()->user()->id and $lowongans->status_aktif == 1)
                                        <option value="{{ $lowongans->id }}">Project {{ $lowongans->projects->judul_project }} dengan client {{ $lowongans->client }}</option>
                                    @endif
                                @endif
                              @endforeach
                            </select>
                            <span class="text-danger">@error('lowongan_id'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Judul Materi</label>
                          <input type="text" name="judul_materi" class="form-control" placeholder="Judul Materi">
                          <span class="text-danger">@error('judul_materi'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Video 1</label>
                          <input type="text" name="video_1" class="form-control" placeholder="Video 1">
                          <span class="text-danger">@error('video_1'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Intruksi 1</label>
                            <textarea name="intruksi_1" class="form-control h-150px" rows="6" id="comment" placeholder="Intruksi 1"></textarea>
                            <span class="text-danger">@error('intruksi_1'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Penjelasan 1</label>
                            <textarea name="penjelasan_1" class="form-control h-150px" rows="6" id="comment" placeholder="Penjelasan 1"></textarea>
                            <span class="text-danger">@error('penjelasan_1'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Pertanyaan 1</label>
                            <textarea name="pertanyaan_1" class="form-control h-150px" rows="6" id="comment" placeholder="Pertanyaan 1"></textarea>
                            <span class="text-danger">@error('pertanyaan_1'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>PDF</label>
                          <input type="file" name="file_pdf" class="form-control" placeholder="PDF">
                          <span class="text-danger">@error('file_pdf'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Video 2</label>
                          <input type="text" name="video_2" class="form-control" placeholder="Video 2">
                          <span class="text-danger">@error('video_2'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Intruksi 2</label>
                            <textarea name="intruksi_2" class="form-control h-150px" rows="6" id="comment" placeholder="Intruksi 2"></textarea>
                            <span class="text-danger">@error('intruksi_2'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Penjelasan 2</label>
                            <textarea name="penjelasan_2" class="form-control h-150px" rows="6" id="comment" placeholder="Penjelasan 2"></textarea>
                            <span class="text-danger">@error('penjelasan_2'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Instruksi Studi Kasus</label>
                            <textarea name="instruksi_studi_kasus" class="form-control h-150px" rows="6" id="comment" placeholder="Instruksi Studi Kasus"></textarea>
                            <span class="text-danger">@error('instruksi_studi_kasus'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Penjelasan Studi Kasus</label>
                            <textarea name="penjelasan_studi_kasus" class="form-control h-150px" rows="6" id="comment" placeholder="Penjelasan Studi Kasus"></textarea>
                            <span class="text-danger">@error('penjelasan_studi_kasus'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Pertanyaan Studi Kasus</label>
                            <textarea name="pertanyaan_studi_kasus" class="form-control h-150px" rows="6" id="comment" placeholder="Pertanyaan Studi Kasus"></textarea>
                            <span class="text-danger">@error('pertanyaan_studi_kasus'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Praktekan</label>
                            <textarea name="praktekkan" class="form-control h-150px" rows="6" id="comment" placeholder="Praktekan"></textarea>
                            <span class="text-danger">@error('praktekkan'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Intruksi Essay</label>
                            <textarea name="instruksi_essay" class="form-control h-150px" rows="6" id="comment" placeholder="Intruksi Essay"></textarea>
                            <span class="text-danger">@error('instruksi_essay'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Urutan Materi</label>
                            <textarea name="urutan_materi" class="form-control h-150px" rows="6" id="comment" placeholder="Urutan Materi"></textarea>
                            <span class="text-danger">@error('urutan_materi'){{ $message }}@enderror</span>
                        </div>

                        <h4 class="card-title">Pretest</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates facilis molestias quos impedit recusandae nesciunt maiores accusantium, voluptatum cumque ea eaque ipsum. Iusto rem id laboriosam repudiandae laborum dolores reiciendis!</p>
                        <div class="form-group">
                            <label>Soal 1</label>
                            <textarea name="soal_pretest[]" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Soal"></textarea>
                            <span class="text-danger">@error('soal'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jawaban A</label>
                                <input type="text" name="jawaban_a_pretest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_a'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jawaban B</label>
                                <input type="text" name="jawaban_b_pretest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_b'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jawaban C</label>
                                <input type="text" name="jawaban_c_pretest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_c'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jawaban D</label>
                                <input type="text" name="jawaban_d_pretest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_d'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jawaban Benar</label>
                            <input type="text" name="jawaban_true_pretest[]" class="form-control" placeholder="">
                            <span class="text-danger">@error('jawaban_true'){{ $message }}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label>Soal 2</label>
                            <textarea name="soal_pretest[]" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Soal"></textarea>
                            <span class="text-danger">@error('soal'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jawaban A</label>
                                <input type="text" name="jawaban_a_pretest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_a'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jawaban B</label>
                                <input type="text" name="jawaban_b_pretest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_b'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jawaban C</label>
                                <input type="text" name="jawaban_c_pretest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_c'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jawaban D</label>
                                <input type="text" name="jawaban_d_pretest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_d'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jawaban Benar</label>
                            <input type="text" name="jawaban_true_pretest[]" class="form-control" placeholder="">
                            <span class="text-danger">@error('jawaban_true'){{ $message }}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label>Soal 3</label>
                            <textarea name="soal_pretest[]" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Soal"></textarea>
                            <span class="text-danger">@error('soal'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jawaban A</label>
                                <input type="text" name="jawaban_a_pretest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_a'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jawaban B</label>
                                <input type="text" name="jawaban_b_pretest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_b'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jawaban C</label>
                                <input type="text" name="jawaban_c_pretest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_c'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jawaban D</label>
                                <input type="text" name="jawaban_d_pretest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_d'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jawaban Benar</label>
                            <input type="text" name="jawaban_true_pretest[]" class="form-control" placeholder="">
                            <span class="text-danger">@error('jawaban_true'){{ $message }}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label>Soal 4</label>
                            <textarea name="soal_pretest[]" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Soal"></textarea>
                            <span class="text-danger">@error('soal'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jawaban A</label>
                                <input type="text" name="jawaban_a_pretest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_a'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jawaban B</label>
                                <input type="text" name="jawaban_b_pretest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_b'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jawaban C</label>
                                <input type="text" name="jawaban_c_pretest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_c'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jawaban D</label>
                                <input type="text" name="jawaban_d_pretest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_d'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jawaban Benar</label>
                            <input type="text" name="jawaban_true_pretest[]" class="form-control" placeholder="">
                            <span class="text-danger">@error('jawaban_true'){{ $message }}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label>Soal 5</label>
                            <textarea name="soal_pretest[]" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Soal"></textarea>
                            <span class="text-danger">@error('soal'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jawaban A</label>
                                <input type="text" name="jawaban_a_pretest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_a'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jawaban B</label>
                                <input type="text" name="jawaban_b_pretest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_b'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jawaban C</label>
                                <input type="text" name="jawaban_c_pretest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_c'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jawaban D</label>
                                <input type="text" name="jawaban_d_pretest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_d'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jawaban Benar</label>
                            <input type="text" name="jawaban_true_pretest[]" class="form-control" placeholder="">
                            <span class="text-danger">@error('jawaban_true'){{ $message }}@enderror</span>
                        </div>

                        <h4 class="card-title">Posttest</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste laboriosam odio veritatis eum vero delectus, iure repudiandae deserunt minus nulla odit error voluptas quas minima itaque animi magni officia nostrum!</p>
                        <div class="form-group">
                            <label>Soal 1</label>
                            <textarea name="soal_posttest[]" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Soal"></textarea>
                            <span class="text-danger">@error('soal'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jawaban A</label>
                                <input type="text" name="jawaban_a_posttest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_a'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jawaban B</label>
                                <input type="text" name="jawaban_b_posttest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_b'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jawaban C</label>
                                <input type="text" name="jawaban_c_posttest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_c'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jawaban D</label>
                                <input type="text" name="jawaban_d_posttest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_d'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jawaban Benar</label>
                            <input type="text" name="jawaban_true_posttest[]" class="form-control" placeholder="">
                            <span class="text-danger">@error('jawaban_true'){{ $message }}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label>Soal 4</label>
                            <textarea name="soal_posttest[]" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Soal"></textarea>
                            <span class="text-danger">@error('soal'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jawaban A</label>
                                <input type="text" name="jawaban_a_posttest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_a'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jawaban B</label>
                                <input type="text" name="jawaban_b_posttest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_b'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jawaban C</label>
                                <input type="text" name="jawaban_c_posttest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_c'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jawaban D</label>
                                <input type="text" name="jawaban_d_posttest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_d'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jawaban Benar</label>
                            <input type="text" name="jawaban_true_posttest[]" class="form-control" placeholder="">
                            <span class="text-danger">@error('jawaban_true'){{ $message }}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label>Soal 3</label>
                            <textarea name="soal_posttest[]" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Soal"></textarea>
                            <span class="text-danger">@error('soal'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jawaban A</label>
                                <input type="text" name="jawaban_a_posttest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_a'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jawaban B</label>
                                <input type="text" name="jawaban_b_posttest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_b'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jawaban C</label>
                                <input type="text" name="jawaban_c_posttest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_c'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jawaban D</label>
                                <input type="text" name="jawaban_d_posttest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_d'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jawaban Benar</label>
                            <input type="text" name="jawaban_true_posttest[]" class="form-control" placeholder="">
                            <span class="text-danger">@error('jawaban_true'){{ $message }}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label>Soal 4</label>
                            <textarea name="soal_posttest[]" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Soal"></textarea>
                            <span class="text-danger">@error('soal'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jawaban A</label>
                                <input type="text" name="jawaban_a_posttest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_a'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jawaban B</label>
                                <input type="text" name="jawaban_b_posttest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_b'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jawaban C</label>
                                <input type="text" name="jawaban_c_posttest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_c'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jawaban D</label>
                                <input type="text" name="jawaban_d_posttest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_d'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jawaban Benar</label>
                            <input type="text" name="jawaban_true_posttest[]" class="form-control" placeholder="">
                            <span class="text-danger">@error('jawaban_true'){{ $message }}@enderror</span>
                        </div>

                        <div class="form-group">
                            <label>Soal 5</label>
                            <textarea name="soal_posttest[]" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Soal"></textarea>
                            <span class="text-danger">@error('soal'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jawaban A</label>
                                <input type="text" name="jawaban_a_posttest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_a'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jawaban B</label>
                                <input type="text" name="jawaban_b_posttest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_b'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Jawaban C</label>
                                <input type="text" name="jawaban_c_posttest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_c'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jawaban D</label>
                                <input type="text" name="jawaban_d_posttest[]" class="form-control" placeholder="">
                                <span class="text-danger">@error('jawaban_d'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jawaban Benar</label>
                            <input type="text" name="jawaban_true_posttest[]" class="form-control" placeholder="">
                            <span class="text-danger">@error('jawaban_true'){{ $message }}@enderror</span>
                        </div>

                        @if(auth()->user()->level == 1)
                            <a href="{{ route('superadmin.materi.index') }}" class="btn btn-dark">Back</a>
                        @elseif(auth()->user()->level == 2)
                            <a href="{{ route('admin.materi.index') }}" class="btn btn-dark">Back</a>
                        @elseif(auth()->user()->level == 3)
                            <a href="{{ route('agensi.materi.index') }}" class="btn btn-dark">Back</a>
                        @endif
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection