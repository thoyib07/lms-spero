@extends('back.templates.pages')
@section('title', isset($title) ? $title : 'Edit')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield('title')</h4>
                <div class="basic-form">
                    <form action="{{ route('superadmin.user.update', $pendaftar->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label>Nama Panjang</label>
                          <input type="text" name="nama_panjang" value="{{ $pendaftar->nama_panjang }}" class="form-control" placeholder="Nama Panjang">
                          <span class="text-danger">@error('nama_panjang'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" value="{{ $pendaftar->tanggal_lahir }}" class="form-control" placeholder="">
                            <span class="text-danger">@error('tanggal_lahir'){{ $message }}@enderror</span>
                          </div>
                          <div class="form-group col-md-6">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="">
                              <option value="Laki-laki" @if(old('jenis_kelamin') === 'Laki-laki') selected @endif>Laki-laki</option>
                              <option value="Perempuan" @if(old('jenis_kelamin') === 'Perempuan') selected @endif>Perempuan</option>
                            </select>
                            <span class="text-danger">@error('jenis_kelamin'){{ $message }}@enderror</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea name="alamat" class="form-control h-150px" rows="6" id="comment" placeholder="Alamat">{{ $pendaftar->alamat }}</textarea>
                          <span class="text-danger">@error('alamat'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>Kota</label>
                            <input type="text" name="kota" value="{{ $pendaftar->kota }}" class="form-control" placeholder="Kota">
                            <span class="text-danger">@error('kota'){{ $message }}@enderror</span>
                          </div>
                          <div class="form-group col-md-6">
                              <label>Provinsi</label>
                              <input type="text" name="provinsi" value="{{ $pendaftar->provinsi }}" class="form-control" placeholder="Provinsi">
                              <span class="text-danger">@error('provinsi'){{ $message }}@enderror</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Nomer Handphone</label>
                          <input type="text" name="no_hp" value="{{ $pendaftar->no_hp }}" class="form-control" placeholder="Nomer Handphone">
                          <span class="text-danger">@error('no_hp'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>KTP</label>
                          <input type="file" name="ktp" value="{{ $pendaftar->ktp }}" id="image" onchange="file(event)" class="form-control" placeholder="KTP">
                          <span class="text-danger">@error('ktp'){{ $message }}@enderror</span>
                        </div>
                        <ul>
                          <li>
                            <img src="/ktp/{{ $pendaftar->ktp }}" id="output" alt="" width="200px">
                          </li>
                        </ul>
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" name="email" value="{{ $pendaftar->users->email }}" class="form-control" placeholder="Email">
                          <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="text" name="password" value="{{ $pendaftar->users->password }}" class="form-control" placeholder="Password">
                          <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                        </div>
                        @if(auth()->user()->level == 1)
                            <a href="{{ route('superadmin.user.index') }}" class="btn btn-dark">Back</a>
                        @endif
                        @if(auth()->user()->level == 2)
                            <a href="{{ route('admin.user.index') }}" class="btn btn-dark">Back</a>
                        @endif
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  var file = function(event){
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  }
</script>
@endsection