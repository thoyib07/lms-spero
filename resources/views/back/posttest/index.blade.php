@extends('back.templates.pages')
@section('title', 'PostTest')
@section('content')
<div class="row">
  <div class="col-lg-12">

    @if(Session::get('success'))
      <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">@yield('title')</h4>
            <a href="{{ route('agensi.posttest.create') }}" class="btn mb-1 btn-primary"><i class="fa fa-plus color-muted"></i></a>
            <div class="table-responsive">
                <table class="table header-border table-hover verticle-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Materi</th>
                            <th scope="col">Soal</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($posttest as $posttests)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $posttests->materis->judul_materi }}</td>
                              <td>{{ $posttests->soal }}</td>
                              <td>
                                <form action="{{ route('agensi.posttest.destroy', $posttests->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('agensi.posttest.show', $posttests->id) }}" class="btn mb-1 btn-info"><i class="fa fa-exclamation-circle color-muted"></i></a>
                                    <a href="{{ route('agensi.posttest.edit', $posttests->id) }}" class="btn mb-1 btn-primary"><i class="fa fa-pencil color-muted"></i></a>
                                    <button type="submit" class="btn mb-1 btn-danger"><i class="fa fa-close color-muted"></i></button>
                                  </form>
                              </td>
                          </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection