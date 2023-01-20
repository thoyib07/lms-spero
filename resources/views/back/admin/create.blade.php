@extends('back.templates.pages')
@section('title', isset($title) ? $title : 'Create')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield('title')</h4>
                <div class="basic-form">
                    <form action="{{ route('superadmin.admin.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama Panjang</label>
                            <input type="text" name="nama_panjang" class="form-control" placeholder="Nama Panjang">
                            <span class="text-danger">@error('nama_panjang'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <input type="date" name="tanggal_lahir" class="form-control">
                          <span class="text-danger">@error('tanggal_lahir'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                          </div>
                          <div class="form-group col-md-6">
                              <label>Nomer Handphone</label>
                              <input type="number" name="no_hp" class="form-control" placeholder="Nomer Handphone">
                              <span class="text-danger">@error('no_hp'){{ $message }}@enderror</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <textarea name="alamat" class="form-control h-150px" rows="6" id="comment" placeholder="Alamat"></textarea>
                          <span class="text-danger">@error('alamat'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="text" name="password" class="form-control" placeholder="Password">
                          <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                        </div>
                        <a href="{{ route('superadmin.admin.index') }}" class="btn btn-dark">Back</a>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection