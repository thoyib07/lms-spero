@extends('back.templates.pages')
@section('title', 'Edit')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield('title')</h4>
                <div class="basic-form">
                    <form action="{{ route('agensi.lowongan.update', $lowongan->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Skill Pekerjaan</label>
                            <textarea name="skill_pekerjaan" class="form-control h-150px" rows="6" id="comment" placeholder="Skill Pekerjaan">{{ $lowongan->skill_pekerjaan }}</textarea>
                            <span class="text-danger">@error('skill_pekerjaan'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Syarat Pekerjaan</label>
                            <textarea name="syarat_pekerjaan" class="form-control h-150px" rows="6" id="comment" placeholder="Syarat Pekerjaan">{{ $lowongan->syarat_pekerjaan }}</textarea>
                            <span class="text-danger">@error('syarat_pekerjaan'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi Pekerjaan</label>
                            <textarea name="deskripsi_pekerjaan" class="form-control h-150px" rows="6" id="comment" placeholder="Desktipsi Pekerjaan">{{ $lowongan->deskripsi_pekerjaan }}</textarea>
                            <span class="text-danger">@error('deskripsi_pekerjaan'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select class="form-control" name="level" id="">
                              <option value="Sales" @if (old('level') == "Sales") {{ 'selected' }} @endif>Sales</option>
                              <option value="Team Leader" @if (old('level') == "Team Leader") {{ 'selected' }} @endif>Team Leader</option>
                              <option value="Area Koordinator" @if (old('level') == "Area Koordinator") {{ 'selected' }} @endif>Area Koordinator</option>
                            </select>
                            <span class="text-danger">@error('level'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label>Minimal Pengalaman</label>
                            <div class="input-group">
                                <input type="number" name="tahun_pengalaman" value="{{ $lowongan->tahun_pengalaman }}" class="form-control" placeholder="0">
                                <div class="input-group-append"><span class="input-group-text">Tahun Pengalaman</span></div>
                            </div>
                            <span class="text-danger">@error('tahun_pengalaman'){{ $message }}@enderror</span>
                        </div>
                        
                        <div class="form-group">
                            <label>Client</label>
                            <input type="text" name="client" value="{{ $lowongan->client }}" class="form-control" placeholder="Client">
                            <span class="text-danger">@error('client'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Kuota</label>
                                <input type="number" name="kuota" value="{{ $lowongan->kuota }}" class="form-control" placeholder="Kuota">
                                <span class="text-danger">@error('kuota'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Gaji</label>
                                <input type="text" name="gaji" value="{{ $lowongan->gaji }}" class="form-control" placeholder="Gaji">
                                <span class="text-danger">@error('gaji'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                          <label>Lokasi</label>
                          <textarea name="lokasi" class="form-control h-150px" rows="6" id="comment" placeholder="Lokasi">{{ $lowongan->lokasi }}</textarea>
                          <span class="text-danger">@error('lokasi'){{ $message }}@enderror</span>
                        </div>
                        <a href="{{ route('agensi.lowongan.index') }}" class="btn btn-dark">Back</a>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection