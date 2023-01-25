@extends('back.templates.pages')
@section('title', isset($title) ? $title : 'Create')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield('title')</h4>
                <div class="basic-form">
                    <form action="{{ route('agensi.lowongan.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Project</label>
                            <input type="text" disabled name="project_id" value="{{ $lowongan->projects->judul_project }}" class="form-control" placeholder="Project">
                            <span class="text-danger">@error('project_id'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Skill Pekerjaan</label>
                            <input type="text" disabled name="skill_pekerjaan" value="{{ $lowongan->skill_pekerjaan }}" class="form-control" placeholder="Skill Pekerjaan">
                            <span class="text-danger">@error('skill_pekerjaan'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Syarat Pekerjaan</label>
                            <textarea disabled name="syarat_pekerjaan" class="form-control h-150px" rows="6" id="comment" placeholder="Syarat Pekerjaan">{{ $lowongan->syarat_pekerjaan }}</textarea>
                            <span class="text-danger">@error('syarat_pekerjaan'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Pekerjaan</label>
                            <textarea disabled name="deskripsi_pekerjaan" class="form-control h-150px" rows="6" id="comment" placeholder="Desktipsi Pekerjaan">{{ $lowongan->deskripsi_pekerjaan }}</textarea>
                            <span class="text-danger">@error('deskripsi_pekerjaan'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Minimal Pengalaman</label>
                            <div class="input-group">
                                <input type="number" disabled name="tahun_pengalaman" value="{{ $lowongan->tahun_pengalaman }}" class="form-control" placeholder="0">
                                <div class="input-group-append"><span class="input-group-text">Tahun Pengalaman</span></div>
                            </div>
                            <span class="text-danger">@error('tahun_pengalaman'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Level</label>
                          <input type="text" disabled name="level" value="{{ $lowongan->level }}" class="form-control" placeholder="Level">
                          <span class="text-danger">@error('level'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Client</label>
                            <input type="text" disabled name="client" value="{{ $lowongan->client }}" class="form-control" placeholder="Client">
                            <span class="text-danger">@error('client'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Kuota</label>
                                <input type="number" disabled name="kuota" value="{{ $lowongan->kuota }}" class="form-control" placeholder="Kuota">
                                <span class="text-danger">@error('kuota'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Gaji</label>
                                <input type="text" disabled name="gaji" value="{{ $lowongan->gaji }}" class="form-control" placeholder="Gaji">
                                <span class="text-danger">@error('gaji'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                          <label>Lokasi</label>
                          <textarea disabled name="lokasi" class="form-control h-150px" rows="6" id="comment" placeholder="Lokasi">{{ $lowongan->lokasi }}</textarea>
                          <span class="text-danger">@error('lokasi'){{ $message }}@enderror</span>
                        </div>
                        @if(auth()->user()->level == 1)
                            <a href="{{ route('superadmin.lowongan.index') }}" class="btn btn-dark">Back</a>
                        @endif
                        @if(auth()->user()->level == 2)
                            <a href="{{ route('admin.lowongan.index') }}" class="btn btn-dark">Back</a>
                        @endif
                        @if(auth()->user()->level == 3)
                            <a href="{{ route('agensi.lowongan.index') }}" class="btn btn-dark">Back</a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection