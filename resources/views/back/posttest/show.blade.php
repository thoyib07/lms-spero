@extends('back.templates.pages')
@section('title', 'Edit')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield('title')</h4>
                <div class="basic-form">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Soal</label>
                            <textarea disabled name="soal" class="ckeditor form-control h-150px" rows="6" id="comment" placeholder="Soal">{{ $posttest->soal }}</textarea>
                            <span class="text-danger">@error('soal'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Jawaban A</label>
                            <input type="text" disabled name="jawaban_a" value="{{ $posttest->jawaban_a }}" class="form-control" placeholder="">
                            <span class="text-danger">@error('jawaban_a'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Jawaban B</label>
                            <input type="text" disabled name="jawaban_b" value="{{ $posttest->jawaban_b }}" class="form-control" placeholder="">
                            <span class="text-danger">@error('jawaban_b'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Jawaban C</label>
                            <input type="text" disabled name="jawaban_c" value="{{ $posttest->jawaban_c }}" class="form-control" placeholder="">
                            <span class="text-danger">@error('jawaban_c'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Jawaban D</label>
                            <input type="text" disabled name="jawaban_d" value="{{ $posttest->jawaban_d }}" class="form-control" placeholder="">
                            <span class="text-danger">@error('jawaban_d'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Jawaban Benar</label>
                            <input type="text" disabled name="jawaban_true" value="{{ $posttest->jawaban_true }}" class="form-control" placeholder="">
                            <span class="text-danger">@error('jawaban_true'){{ $message }}@enderror</span>
                        </div>
                        <a href="{{ route('agensi.posttest.index') }}" class="btn btn-dark">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="//cdn.ckeditor.com/4.20.1/basic/ckeditor.js"></script>
@endsection