@extends('back.templates.register')
@section('title', 'Register')
@section('content')
<div class="form-input-content">
  <div class="card login-form mb-0">
      <div class="card-body pt-4">
          <a class="text-center" href="index.html"><h4>Registrasi Direktur</h4></a>

          @if(Session::get('success'))
              <div class="alert alert-success alert-dismissible fade show">
                  {{ Session::get('success') }}
              </div>
          @endif

          <form action="{{ route('agensi.post-create-step-one') }}" method="POST">
            @csrf
            <label>Direktur</label>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama_panjang" value="{{ $direktur->nama_panjang ?? '' }}" class="form-control" placeholder="Nama">
                <span class="text-danger">@error('nama_panjang'){{ $message }}@enderror</span>
            </div>
            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" value="{{ $direktur->tanggal_lahir ?? '' }}" class="form-control">
              <span class="text-danger">@error('tanggal_lahir'){{ $message }}@enderror</span>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Email</label>
                <input type="email" name="email2" value="{{ $direktur->email ?? '' }}" class="form-control" placeholder="Email">
                <span class="text-danger">@error('email2'){{ $message }}@enderror</span>
              </div>
              <div class="form-group col-md-6">
                  <label>Nomor Handphone</label>
                  <input type="number" name="no_hp" value="{{ $direktur->no_hp ?? '' }}" class="form-control" placeholder="Nomor Handphone">
                  <span class="text-danger">@error('no_hp'){{ $message }}@enderror</span>
              </div>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat2" class="form-control h-150px" rows="4" id="comment" placeholder="Alamat">{{ $direktur->alamat ?? '' }}</textarea>
                <span class="text-danger">@error('alamat2'){{ $message }}@enderror</span>
              </div>
              <button type="submit" class="btn btn-dark">Next</button>
          </form>
      </div>
  </div>
</div>
@endsection