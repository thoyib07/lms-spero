@extends('back.templates.pages')
@section('title', isset($title) ? $title : 'Edit')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield('title')</h4>
                <div class="basic-form">
                    <form action="{{ route('agensi.project.update', $project->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Judul Project</label>
                            <input type="text" name="judul_project" value="{{ $project->judul_project }}" class="form-control" placeholder="Judul Project">
                            <span class="text-danger">@error('judul_project'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Deskripsi</label>
                          <textarea name="deskripsi" class="form-control h-150px" rows="6" id="comment" placeholder="Deskripsi">{{ $project->deskripsi }}</textarea>
                          <span class="text-danger">@error('deskripsi'){{ $message }}@enderror</span>
                        </div>
                        <a href="{{ route('agensi.project.index') }}" class="btn btn-dark">Back</a>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection