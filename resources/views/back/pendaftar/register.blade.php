@extends('back.templates.register')
@section('title', 'Register')
@section('content')
<div class="form-input-content">
  <div class="card login-form mb-0">
      <div class="card-body pt-5">
          <a class="text-center" href="index.html"><h4>Registrasi</h4></a>

          @if(Session::get('success'))
              <div class="alert alert-success alert-dismissible fade show">
                  {{ Session::get('success') }}
              </div>
          @endif

          <form action="{{ route('user.post-register') }}" method="POST" class="" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                <label>Nama Panjang</label>
                <input type="text" name="nama_panjang" class="form-control" placeholder="Nama Panjang">
                <span class="text-danger">@error('nama_panjang'){{ $message }}@enderror</span>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Tanggal Lahir</label>
                  <input type="date" name="tanggal_lahir" class="form-control" placeholder="">
                  <span class="text-danger">@error('tanggal_lahir'){{ $message }}@enderror</span>
                </div>
                <div class="form-group col-md-6">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin" id="">
                    <option selected disabled>Select</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                  <span class="text-danger">@error('jenis_kelamin'){{ $message }}@enderror</span>
                </div>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control h-150px" rows="3" id="comment" placeholder="Alamat"></textarea>
                <span class="text-danger">@error('alamat'){{ $message }}@enderror</span>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Kota</label>
                  <input type="text" name="kota" class="form-control" placeholder="Kota">
                  <span class="text-danger">@error('kota'){{ $message }}@enderror</span>
                </div>
                <div class="form-group col-md-6">
                    <label>Provinsi</label>
                    <input type="text" name="provinsi" class="form-control" placeholder="Provinsi">
                    <span class="text-danger">@error('provinsi'){{ $message }}@enderror</span>
                </div>
              </div>
              <div class="form-group">
                <label>Nomer Handphone</label>
                <input type="number" name="no_hp" class="form-control" placeholder="Nomer Handphone">
                <span class="text-danger">@error('no_hp'){{ $message }}@enderror</span>
              </div>
              <div class="form-group">
                <label>KTP</label>
                <input type="file" id="image" onchange="file(event)" name="ktp" class="form-control" placeholder="KTP">
                <span class="text-danger">@error('ktp'){{ $message }}@enderror</span>
              </div>
              <ul>
                <li><img src="" id="output" alt="" width="300px"></li>
              </ul>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email">
                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control" placeholder="Password">
                <span class="text-danger">@error('password'){{ $message }}@enderror</span>
              </div>
              <button type="submit" class="btn btn-dark">Next</button>
          </form>
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