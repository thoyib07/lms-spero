@extends('back.templates.pages')
@section('title', 'Create')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield('title')</h4>
                <div class="basic-form">
                    <form action="{{ route('agensi.pretest.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Materi</label>
                            <select class="form-control" name="materi_id" id="">
                              <option selected disabled>Select</option>
                              @foreach ($materi as $materis)
                                @if($materis->status_aktif == 1)
                                    @if($materis->created_by == auth()->user()->id)
                                        <option value="{{ $materis->id }}">{{ $materis->judul_materi }}</option>
                                    @endif
                                @endif
                              @endforeach
                            </select>
                            <span class="text-danger">@error('materi_id'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Soal</label>
                            <textarea name="soal" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Soal"></textarea>
                            <span class="text-danger">@error('soal'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Jawaban A</label>
                            <input type="text" name="jawaban_a" class="form-control" placeholder="">
                            <span class="text-danger">@error('jawaban_a'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Jawaban B</label>
                            <input type="text" name="jawaban_b" class="form-control" placeholder="">
                            <span class="text-danger">@error('jawaban_b'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Jawaban C</label>
                            <input type="text" name="jawaban_c" class="form-control" placeholder="">
                            <span class="text-danger">@error('jawaban_c'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Jawaban D</label>
                            <input type="text" name="jawaban_d" class="form-control" placeholder="">
                            <span class="text-danger">@error('jawaban_d'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Jawaban Benar</label>
                            <input type="text" name="jawaban_true" class="form-control" placeholder="">
                            <span class="text-danger">@error('jawaban_true'){{ $message }}@enderror</span>
                        </div>
                        <a href="{{ route('agensi.lowongan.index') }}" class="btn btn-dark">Back</a>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="//cdn.ckeditor.com/4.20.1/basic/ckeditor.js"></script>
@endsection