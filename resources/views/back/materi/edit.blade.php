@extends('back.templates.pages')
@section('title', isset($title) ? $title : 'Materi')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield('title')</h4>
                <div class="basic-form">
                    <form action="{{ route('agensi.materi.update', $materi->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label>Lowongan</label>
                          <input type="text" readonly name="lowongan_id" value="{{ $materi->lowongans->client }}" class="form-control" placeholder="Lowongan">
                          <span class="text-danger">@error('lowongan_id'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Judul Materi</label>
                          <input type="text" name="judul_materi" value="{{ $materi->judul_materi }}" class="form-control" placeholder="Judul Materi">
                          <span class="text-danger">@error('judul_materi'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Video 1</label>
                          <input type="file" name="video_1" id="video_1" value="{{ $materi->video_1 }}" class="form-control" placeholder="Video 1">
                          <span class="text-danger">@error('video_1'){{ $message }}@enderror</span>
                        </div>
                        <ul>
                          <li>
                            <video id="output_video_1" width="200" height="200" muted controls><source src="/video_1/{{ $materi->video_1 }}" type="video/mp4"></video>
                          </li>
                        </ul>
                        <div class="form-group">
                            <label>Intruksi 1</label>
                            <textarea name="intruksi_1" class="form-control h-150px" rows="6" id="comment" placeholder="Intruksi 1">{{ $materi->intruksi_1 }}</textarea>
                            <span class="text-danger">@error('intruksi_1'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Penjelasan 1</label>
                            <textarea name="penjelasan_1" class="form-control h-150px" rows="6" id="comment" placeholder="Penjelasan 1">{{ $materi->penjelasan_1 }}</textarea>
                            <span class="text-danger">@error('penjelasan_1'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Pertanyaan 1</label>
                            <textarea name="pertanyaan_1" class="form-control h-150px" rows="6" id="comment" placeholder="Pertanyaan 1">{{ $materi->pertanyaan_1 }}</textarea>
                            <span class="text-danger">@error('pertanyaan_1'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>PDF</label>
                          <input type="file" name="file_pdf" value="{{ $materi->file_pdf }}" class="form-control" placeholder="PDF">
                          <span class="text-danger">@error('file_pdf'){{ $message }}@enderror</span>
                          <ul>
                            <li>
                              <a href="/pdf/{{ $materi->file_pdf }}" target="_blank">{{ $materi->file_pdf }}</a>
                            </li>
                          </ul>
                        </div>
                        <div class="form-group">
                          <label>Video 2</label>
                          <input type="file" name="video_2" id="video_2" value="{{ $materi->video_2 }}" class="form-control" placeholder="Video 2">
                          <span class="text-danger">@error('video_2'){{ $message }}@enderror</span>
                        </div>
                        <ul>
                          <li>
                            <video id="output_video_2" width="200" height="200" muted controls><source src="/video_2/{{ $materi->video_2 }}" type="video/mp4"></video>
                          </li>
                        </ul>
                        <div class="form-group">
                            <label>Intruksi 2</label>
                            <textarea name="intruksi_2" class="form-control h-150px" rows="6" id="comment" placeholder="Intruksi 2">{{ $materi->intruksi_2 }}</textarea>
                            <span class="text-danger">@error('intruksi_2'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Penjelasan 2</label>
                            <textarea name="penjelasan_2" class="form-control h-150px" rows="6" id="comment" placeholder="Penjelasan 2">{{ $materi->penjelasan_2 }}</textarea>
                            <span class="text-danger">@error('penjelasan_2'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Instruksi Studi Kasus</label>
                            <textarea name="instruksi_studi_kasus" class="form-control h-150px" rows="6" id="comment" placeholder="Instruksi Studi Kasus">{{ $materi->instruksi_studi_kasus }}</textarea>
                            <span class="text-danger">@error('instruksi_studi_kasus'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Penjelasan Studi Kasus</label>
                            <textarea name="penjelasan_studi_kasus" class="form-control h-150px" rows="6" id="comment" placeholder="Penjelasan Studi Kasus">{{ $materi->penjelasan_studi_kasus }}</textarea>
                            <span class="text-danger">@error('penjelasan_studi_kasus'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Pertanyaan Studi Kasus</label>
                            <textarea name="pertanyaan_studi_kasus" class="form-control h-150px" rows="6" id="comment" placeholder="Pertanyaan Studi Kasus">{{ $materi->pertanyaan_studi_kasus }}</textarea>
                            <span class="text-danger">@error('pertanyaan_studi_kasus'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Praktekan</label>
                            <textarea name="praktekkan" class="form-control h-150px" rows="6" id="comment" placeholder="Praktekan">{{ $materi->praktekkan }}</textarea>
                            <span class="text-danger">@error('praktekkan'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Intruksi Essay</label>
                            <textarea name="instruksi_essay" class="form-control h-150px" rows="6" id="comment" placeholder="Intruksi Essay">{{ $materi->instruksi_essay }}</textarea>
                            <span class="text-danger">@error('instruksi_essay'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Urutan Materi</label>
                            <textarea name="urutan_materi" class="form-control h-150px" rows="6" id="comment" placeholder="Urutan Materi">{{ $materi->urutan_materi }}</textarea>
                            <span class="text-danger">@error('urutan_materi'){{ $message }}@enderror</span>
                        </div>
                        @if(auth()->user()->level == 1)
                            <a href="{{ route('superadmin.materi.index') }}" class="btn btn-dark">Back</a>
                        @endif
                        @if(auth()->user()->level == 2)
                            <a href="{{ route('admin.materi.index') }}" class="btn btn-dark">Back</a>
                        @endif
                        @if(auth()->user()->level == 3)
                            <a href="{{ route('agensi.materi.index') }}" class="btn btn-dark">Back</a>
                        @endif
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  document.getElementById("video_1").onchange = function(event) {
    let file = event.target.files[0];
    let blobURL = URL.createObjectURL(file);
    document.getElementById("output_video_1").src = blobURL;
  }

  document.getElementById("video_2").onchange = function(event) {
    let file = event.target.files[0];
    let blobURL = URL.createObjectURL(file);
    document.getElementById("output_video_2").src = blobURL;
  }
</script>
@endsection