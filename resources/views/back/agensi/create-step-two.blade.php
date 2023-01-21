@extends('back.templates.register')
@section('title', 'Register')
@section('content')
<div class="form-input-content">
  <div class="card login-form mb-0">
      <div class="card-body pt-5">
          <a class="text-center" href="index.html"><h4>Registrasi User</h4></a>
          <form action="{{ route('agensi.post-create-step-two') }}" method="POST">
            @csrf
              <label>Agensi</label>
              <div class="form-group">
                <label>Nama Usaha</label>
                <input type="text" name="nama_usaha" class="form-control" placeholder="Nama Usaha">
                <span class="text-danger">@error('nama_usaha'){{ $message }}@enderror</span>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Nomor Induk Berusaha</label>
                  <input type="number" name="nib" class="form-control" placeholder="Nomor Induk Berusaha">
                  <span class="text-danger">@error('nib'){{ $message }}@enderror</span>
                </div>
                <div class="form-group col-md-6">
                    <label>Telepon</label>
                    <input type="number" name="telepon" class="form-control" placeholder="Telepon">
                    <span class="text-danger">@error('telepon'){{ $message }}@enderror</span>
                </div>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control h-150px" rows="4" id="comment" placeholder="Alamat"></textarea>
                <span class="text-danger">@error('alamat'){{ $message }}@enderror</span>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Email">
                  <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                </div>
                <div class="form-group col-md-6">
                  <label>Password</label>
                  <input type="text" name="password" class="form-control" placeholder="Password">
                  <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                </div>
              </div>
              <a href="{{ route('agensi.create-step-one') }}" class="btn btn-dark">Back</a>
              <button type="submit" class="btn btn-dark">Next</button>
          </form>
      </div>
  </div>
</div>
@endsection