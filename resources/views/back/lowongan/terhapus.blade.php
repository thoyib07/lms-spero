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
            <a href="{{ route('agensi.lowongan.index') }}" class="btn mb-1 btn-primary"><i class="fa fa-close color-muted"></i></a>
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
                      <?php $id = 0; ?>
                      @foreach($lowongan as $lowongans)
                        @if($lowongans->created_by == auth()->user()->id and $lowongans->status_aktif == 2)
                        <?php $id++; ?>
                          <tr>
                              <td>{{ $id }}</td>
                              <td>{{ $lowongans->projects->judul_project }}</td>
                              <td>{{ $lowongans->client }}</td>
                              <td>{{ $lowongans->kuota }}</td>
                              <td>{{ $lowongans->level }}</td>
                              <td>{{ $lowongans->lokasi }}</td>
                              <td>
                                <form action="{{ route('agensi.lowongan.pulihkan', $lowongans->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <a href="{{ route('agensi.lowongan.show', $lowongans->id) }}" class="btn mb-1 btn-info"><i class="fa fa-exclamation-circle color-muted"></i></a>
                                    <button type="submit" class="btn mb-1 btn-danger"><i class="fa fa-plus color-muted"></i></button>
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