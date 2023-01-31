@extends('back.templates.pages')
@section('title', 'PreTest')
@section('content')
<div class="row">
  <div class="col-lg-12">

    @if(Session::get('success'))
      <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">@yield('title')</h4>
            <a href="{{ route('agensi.pretest.create') }}" class="btn mb-1 btn-primary"><i class="fa fa-plus color-muted"></i></a>
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
                      <?php $id = 0; ?>
                      @foreach($pretest as $pretests)
                        @if($pretests->created_by == auth()->user()->id and $pretests->status_aktif == 1)
                        <?php $id++; ?>
                          <tr>
                              <td>{{ $id }}</td>
                              <td>{{ $pretests->materis->judul_materi }}</td>
                              <td>{!! $pretests->soal !!}</td>
                              <td>
                                <a href="{{ route('agensi.pretest.show', $pretests->id) }}" class="btn mb-1 btn-info"><i class="fa fa-exclamation-circle color-muted"></i></a>
                                <a href="{{ route('agensi.pretest.edit', $pretests->id) }}" class="btn mb-1 btn-primary"><i class="fa fa-pencil color-muted"></i></a>
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