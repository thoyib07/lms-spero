@extends('back.templates.pages')
@section('title', 'Project')
@section('content')
<div class="row">
  <div class="col-lg-12">

    @if(Session::get('success'))
      <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Project</h4>
            @if(auth()->user()->level == 3)
              <a href="{{ route('agensi.project.create') }}" class="btn mb-1 btn-primary">Tambah</a>
            @endif
            <div class="table-responsive">
                <table class="table header-border table-hover verticle-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul Project</th>
                            <th scope="col">Deskripsi</th>
                            @if(auth()->user()->level == 1 or auth()->user()->level == 2)
                              <th scope="col">Agensi</th>
                            @endif
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($project as $projects)
                        @if($projects->created_by == (auth()->user()->level == 1 or auth()->user()->level == 2) or $projects->created_by == auth()->user()->id)
                          <tr>
                              <th>{{ $loop->iteration }}</th>
                              <td>{{ $projects->judul_project }}</td>
                              <td>{{ $projects->deskripsi }}</td>
                              @if(auth()->user()->level == 1 or auth()->user()->level == 2)
                                <td>{{ $projects->agensis->nama_usaha }}</td>
                              @endif
                              <td>
                                @if($projects->status_aktif == 1)
                                  <span class="label gradient-1 rounded">Enable</span>
                                @endif
                                @if($projects->status_aktif == 2)
                                  <span class="label gradient-2 rounded">Disable</span>
                                @endif
                              </td>
                              <td>
                                <form action="{{ route('agensi.project.destroy', $projects->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    @if(auth()->user()->level == 1)
                                      <a href="{{ route('superadmin.project.show', $projects->id) }}" class="btn mb-1 btn-info">Show</a>
                                    @endif
                                    @if(auth()->user()->level == 2)
                                      <a href="{{ route('admin.project.show', $projects->id) }}" class="btn mb-1 btn-info">Show</a>
                                    @endif
                                    @if(auth()->user()->level == 3)
                                      <a href="{{ route('agensi.project.show', $projects->id) }}" class="btn mb-1 btn-info">Show</a>
                                      <a href="{{ route('agensi.project.edit', $projects->id) }}" class="btn mb-1 btn-primary">Edit</a>
                                      <button type="submit" class="btn mb-1 btn-danger">Delete</button>
                                    @endif
                                  </form>
                              </td>
                          </tr>
                        @endif
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection