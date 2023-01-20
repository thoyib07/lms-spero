@extends('back.templates.pages')
@section('title', isset($title) ? $title : 'Show')
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
                            <input type="text" name="nama_panjang" disabled value="{{ $admin->nama_panjang }}" class="form-control" placeholder="Nama Panjang">
                            <span class="text-danger">@error('nama_panjang'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <input type="date" name="tanggal_lahir" disabled value="{{ $admin->tanggal_lahir }}" class="form-control">
                          <span class="text-danger">@error('tanggal_lahir'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="email" name="email" disabled value="{{ $admin->users->email }}" class="form-control" placeholder="Email">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                          </div>
                          <div class="form-group col-md-6">
                              <label>Nomor Handphone</label>
                              <input type="number" name="no_hp" disabled value="{{ $admin->no_hp }}" class="form-control" placeholder="Nomor Handphone">
                              <span class="text-danger">@error('no_hp'){{ $message }}@enderror</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea name="alamat" disabled class="form-control h-150px" rows="6" id="comment" placeholder="Alamat">{{ $admin->alamat }}</textarea>
                          <span class="text-danger">@error('alamat'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" disabled value="{{ $admin->users->password }}" class="form-control" placeholder="Password">
                            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <div class="form-group">
                                <label class="radio-inline mr-3">
                                    <input type="radio" disabled name="status_aktif" value="1" {{ $admin->users->status_aktif == 1 ? 'checked' : '' }}>    Enable
                                </label>
                                <label class="radio-inline mr-3">
                                    <input type="radio" disabled name="status_aktif" value="2" {{ $admin->users->status_aktif == 2 ? 'checked' : '' }}>    Disable
                                </label>
                            </div>
                          </div>
                        <a href="{{ route('superadmin.admin.index') }}" class="btn btn-dark">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection