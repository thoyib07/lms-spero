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
            <h4 class="card-title">@yield('title')</h4>
            <a href="{{ route('agensi.project.index') }}" class="btn mb-1 btn-primary"><i class="fa fa-close color-muted"></i></a>
            <div class="table-responsive">
                <table class="table header-border table-hover verticle-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul Project</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $id = 0; ?>
                      @foreach($project as $projects)
                        @if($projects->created_by == auth()->user()->id and $projects->status_aktif == 2)
                        <?php $id++; ?>
                          <tr>
                              <td>{{ $id }}</td>
                              <td>{{ $projects->judul_project }}</td>
                              <td>{!! $projects->deskripsi !!}</td>
                              <td>{{ $projects->created_at }}</td>
                              <td>
                                <form action="{{ route('agensi.project.pulihkan', $projects->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <a href="{{ route('agensi.project.show', $projects->id) }}" class="btn mb-1 btn-info"><i class="fa fa-exclamation-circle color-muted"></i></a>
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