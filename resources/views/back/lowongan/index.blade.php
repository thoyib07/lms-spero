@extends('back.templates.pages')
@section('title', 'Lowongan')
@section('content')
<div class="row">
  <div class="col-lg-12">

    @if(Session::get('success'))
      <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">@yield('title')</h4>
            @if(auth()->user()->level == 3)
              <a href="{{ route('agensi.lowongan.create') }}" class="btn mb-1 btn-primary"><i class="fa fa-plus color-muted"></i></a>
            @endif
            <div class="table-responsive">
                <table class="table header-border table-hover verticle-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Project</th>
                            <th scope="col">Client</th>
                            <th scope="col">Kuota</th>
                            <th scope="col">Level</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($lowongan as $lowongans)
                        @if($lowongans->created_by == (auth()->user()->level == 1 or auth()->user()->level == 2) or $lowongans->created_by == auth()->user()->id and $lowongans->status_aktif == 1)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $lowongans->projects->judul_project }}</td>
                              <td>{{ $lowongans->client }}</td>
                              <td>{{ $lowongans->kuota }}</td>
                              <td>{{ $lowongans->level }}</td>
                              <td>{{ $lowongans->lokasi }}</td>
                              <td>
                                <form action="{{ route('agensi.lowongan.destroy', $lowongans->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    @if(auth()->user()->level == 1)
                                      <a href="{{ route('superadmin.lowongan.show', $lowongans->id) }}" class="btn mb-1 btn-info"><i class="fa fa-exclamation-circle color-muted"></i></a>
                                    @elseif(auth()->user()->level == 2)
                                      <a href="{{ route('admin.lowongan.show', $lowongans->id) }}" class="btn mb-1 btn-info"><i class="fa fa-exclamation-circle color-muted"></i></a>
                                    @elseif(auth()->user()->level == 3)
                                      <a href="{{ route('agensi.lowongan.show', $lowongans->id) }}" class="btn mb-1 btn-info"><i class="fa fa-exclamation-circle color-muted"></i></a>
                                      <a href="{{ route('agensi.lowongan.edit', $lowongans->id) }}" class="btn mb-1 btn-primary"><i class="fa fa-pencil color-muted"></i></a>
                                      <button type="submit" class="btn mb-1 btn-danger"><i class="fa fa-close color-muted"></i></button>
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