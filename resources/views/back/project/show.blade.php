@extends('back.templates.pages')
@section('title', isset($title) ? $title : 'Detail')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield('title')</h4>
                <div class="basic-form">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Judul Project</label>
                            <input type="text" disabled name="judul_project" value="{{ $project->judul_project }}" class="form-control" placeholder="Judul Project">
                            <span class="text-danger">@error('judul_project'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Deskripsi</label>
                          <textarea name="deskripsi" disabled class="form-control h-150px" rows="6" id="comment" placeholder="Address">{{ $project->deskripsi }}</textarea>
                          <span class="text-danger">@error('deskripsi'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Status</label>
                          <div class="form-group">
                              <label class="radio-inline mr-3">
                                  <input type="radio" disabled name="status_aktif" value="1" {{ $project->status_aktif == 1 ? 'checked' : '' }}>    Enable
                              </label>
                              <label class="radio-inline mr-3">
                                  <input type="radio" disabled name="status_aktif" value="2" {{ $project->status_aktif == 2 ? 'checked' : '' }}>    Disable
                              </label>
                          </div>
                        </div>
                        @if(auth()->user()->level == 1)
                            <a href="{{ route('superadmin.project.index') }}" class="btn btn-dark">Back</a>
                        @endif
                        @if(auth()->user()->level == 2)
                            <a href="{{ route('admin.project.index') }}" class="btn btn-dark">Back</a>
                        @endif
                        @if(auth()->user()->level == 3)
                            <a href="{{ route('agensi.project.index') }}" class="btn btn-dark">Back</a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection