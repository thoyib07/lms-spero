@extends('back.templates.pages')
@section('title', 'Show')
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
                            <label>Judul Notifikasi</label>
                            <input type="text" disabled name="judul_notifikasi" value="{{ $notifikasi->judul_notifikasi }}" class="form-control" placeholder="Judul Notifikasi">
                            <span class="text-danger">@error('judul_notifikasi'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Keterangan</label>
                          <textarea disabled name="keterangan" class="form-control h-150px" rows="6" id="comment" placeholder="Keterangan">{{ $notifikasi->keterangan }}</textarea>
                          <span class="text-danger">@error('keterangan'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Tanggal</label>
                          <input type="date" disabled name="tanggal" value="{{ $notifikasi->tanggal }}" class="form-control" placeholder="Tanggal">
                          <span class="text-danger">@error('tanggal'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>Created By</label>
                            <input type="text" disabled name="created_by" value="{{ $notifikasi->created_by }}" class="form-control" placeholder="">
                            <span class="text-danger">@error('created_by'){{ $message }}@enderror</span>
                          </div>
                          <div class="form-group col-md-6">
                            <label>Updated By</label>
                            <input type="text" disabled name="updated_by" value="{{ $notifikasi->updated_by }}" class="form-control" placeholder="">
                            <span class="text-danger">@error('updated_by'){{ $message }}@enderror</span>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>Created At</label>
                            <input type="text" disabled name="created_at" value="{{ $notifikasi->created_at }}" class="form-control" placeholder="">
                            <span class="text-danger">@error('created_at'){{ $message }}@enderror</span>
                          </div>
                          <div class="form-group col-md-6">
                            <label>Updated At</label>
                            <input type="text" disabled name="updated_at" value="{{ $notifikasi->updated_at }}" class="form-control" placeholder="">
                            <span class="text-danger">@error('updated_at'){{ $message }}@enderror</span>
                          </div>
                        </div>
                        @if($notifikasi->status_aktif == 1)
                          @if(auth()->user()->level == 1)
                              <a href="{{ route('superadmin.notifikasi.index') }}" class="btn btn-dark">Back</a>
                          @elseif(auth()->user()->level == 2)
                              <a href="{{ route('admin.notifikasi.index') }}" class="btn btn-dark">Back</a>
                          @elseif(auth()->user()->level == 3)
                              <a href="{{ route('agensi.notifikasi.index') }}" class="btn btn-dark">Back</a>
                          @endif
                        @elseif($notifikasi->status_aktif == 2)
                          @if(auth()->user()->level == 1)
                              <a href="{{ route('superadmin.notifikasi.terhapus') }}" class="btn btn-dark">Back</a>
                          @elseif(auth()->user()->level == 2)
                              <a href="{{ route('admin.notifikasi.terhapus') }}" class="btn btn-dark">Back</a>
                          @elseif(auth()->user()->level == 3)
                              <a href="{{ route('agensi.notifikasi.terhapus') }}" class="btn btn-dark">Back</a>
                          @endif
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection