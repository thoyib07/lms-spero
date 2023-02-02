@extends('back.templates.pages')
@section('title', 'Show')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield('title')</h4>
                <div class="basic-form">
                    <form action="" method="">
                        <div class="form-group">
                            <label>Nama Panjang</label>
                            <input type="text" disabled name="nama_panjang" value="{{ $admin->nama_panjang }}" class="form-control" placeholder="Nama Panjang">
                            <span class="text-danger">@error('nama_panjang'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <input type="date" disabled name="tanggal_lahir" value="{{ $admin->tanggal_lahir }}" class="form-control">
                          <span class="text-danger">@error('tanggal_lahir'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="email" disabled name="email" value="{{ $admin->users->email }}" class="form-control" placeholder="Email">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                          </div>
                          <div class="form-group col-md-6">
                              <label>Nomor Handphone</label>
                              <input type="number" disabled name="no_hp" value="{{ $admin->no_hp }}" class="form-control" placeholder="Nomor Handphone">
                              <span class="text-danger">@error('no_hp'){{ $message }}@enderror</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea disabled name="alamat" class="form-control h-150px" rows="6" id="comment" placeholder="Alamat">{{ $admin->alamat }}</textarea>
                          <span class="text-danger">@error('alamat'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" disabled name="password" value="{{ $admin->users->password }}" class="form-control" placeholder="Password">
                            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                        </div>
                        <a href="{{ route('superadmin.admin.index') }}" class="btn btn-dark">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection