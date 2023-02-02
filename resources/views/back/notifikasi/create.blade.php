@extends('back.templates.pages')
@section('title', 'Create')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield('title')</h4>
                <div class="basic-form">
                    <form action="{{ route('superadmin.notifikasi.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Judul Notifikasi</label>
                            <input type="text" name="judul_notifikasi" class="form-control" placeholder="Judul Notifikasi">
                            <span class="text-danger">@error('judul_notifikasi'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Keterangan</label>
                          <textarea name="keterangan" class="form-control h-150px" rows="6" id="comment" placeholder="Keterangan"></textarea>
                          <span class="text-danger">@error('keterangan'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Tanggal</label>
                          <input type="date" name="tanggal" class="form-control" placeholder="Tanggal">
                          <span class="text-danger">@error('tanggal'){{ $message }}@enderror</span>
                        </div>
                        @if(auth()->user()->level == 1)
                            <a href="{{ route('superadmin.notifikasi.index') }}" class="btn btn-dark">Back</a>
                        @elseif(auth()->user()->level == 2)
                            <a href="{{ route('admin.notifikasi.index') }}" class="btn btn-dark">Back</a>
                        @elseif(auth()->user()->level == 3)
                            <a href="{{ route('agensi.notifikasi.index') }}" class="btn btn-dark">Back</a>
                        @endif
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection