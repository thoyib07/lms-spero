@extends('back.templates.pages')
@section('title', 'Materi')
@section('content')
<div class="row">
  <div class="col-lg-12">

    @if(Session::get('success'))
      <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">@yield('title')</h4>
            @if(auth()->user()->level == 1)
              <a href="{{ route('superadmin.materi.index') }}" class="btn mb-1 btn-primary"><i class="fa fa-close color-muted"></i></a>
            @elseif(auth()->user()->level == 2)
              <a href="{{ route('admin.materi.index') }}" class="btn mb-1 btn-primary"><i class="fa fa-close color-muted"></i></a>
            @elseif(auth()->user()->level == 3)
              <a href="{{ route('agensi.materi.index') }}" class="btn mb-1 btn-primary"><i class="fa fa-close color-muted"></i></a>
            @endif
            <div class="table-responsive">
                <table class="table header-border table-hover verticle-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul Materi</th>
                            <th scope="col">Video 1</th>
                            <th scope="col">Video 2</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $id = 0; ?>
                      @foreach($materi as $materis)
                        @if($materis->created_by == auth()->user()->id and $materis->status_aktif == 2)
                        <?php $id++; ?>
                          <tr>
                              <td>{{ $id }}</td>
                              <td>{{ $materis->judul_materi }}</td>
                              <td><video width="200" height="200" muted controls><source src="/video_1/{{ $materis->video_1 }}" type="video/mp4"></video></td>
                              <td><video width="200" height="200" muted controls><source src="/video_2/{{ $materis->video_2 }}" type="video/mp4"></video></td>
                              <td>{{ $materis->created_at }}</td>
                              <td>
                                @if(auth()->user()->level == 1)
                                  <form action="{{ route('superadmin.materi.pulihkan', $materis->id) }}" method="POST">
                                      @csrf
                                      @method('PUT')
                                      <a href="{{ route('superadmin.materi.show', $materis->id) }}" class="btn mb-1 btn-info"><i class="fa fa-exclamation-circle color-muted"></i></a>
                                      <button type="submit" class="btn mb-1 btn-danger"><i class="fa fa-plus color-muted"></i></button>
                                  </form>
                                @elseif(auth()->user()->level == 2)
                                  <form action="{{ route('admin.materi.pulihkan', $materis->id) }}" method="POST">
                                      @csrf
                                      @method('PUT')
                                      <a href="{{ route('admin.materi.show', $materis->id) }}" class="btn mb-1 btn-info"><i class="fa fa-exclamation-circle color-muted"></i></a>
                                      <button type="submit" class="btn mb-1 btn-danger"><i class="fa fa-plus color-muted"></i></button>
                                  </form>
                                @elseif(auth()->user()->level == 3)
                                  <form action="{{ route('agensi.materi.pulihkan', $materis->id) }}" method="POST">
                                      @csrf
                                      @method('PUT')
                                      <a href="{{ route('agensi.materi.show', $materis->id) }}" class="btn mb-1 btn-info"><i class="fa fa-exclamation-circle color-muted"></i></a>
                                      <button type="submit" class="btn mb-1 btn-danger"><i class="fa fa-plus color-muted"></i></button>
                                  </form>
                                @endif
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