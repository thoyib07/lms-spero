@extends('back.templates.pages')
@section('title', 'Notifikasi')
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
              <a href="{{ route('superadmin.notifikasi.index') }}" class="btn mb-1 btn-primary"><i class="fa fa-close color-muted"></i></a>
            @elseif(auth()->user()->level == 2)
              <a href="{{ route('admin.notifikasi.index') }}" class="btn mb-1 btn-primary"><i class="fa fa-close color-muted"></i></a>
            @elseif(auth()->user()->level == 3)
              <a href="{{ route('agensi.notifikasi.index') }}" class="btn mb-1 btn-primary"><i class="fa fa-close color-muted"></i></a>
            @endif
            <div class="table-responsive">
                <table class="table header-border table-hover verticle-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $id = 0; ?>
                      @foreach($notifikasi as $notifikasis)
                        @if($notifikasis->created_by == auth()->user()->id and $notifikasis->status_aktif == 2)
                        <?php $id++; ?>
                          <tr>
                              <td>{{ $id }}</td>
                              <td>{{ $notifikasis->judul_notifikasi }}</td>
                              <td>{{ $notifikasis->keterangan }}</td>
                              <td>{{ $notifikasis->tanggal }}</td>
                              <td>{{ $notifikasis->created_at }}</td>
                              <td>
                                @if(auth()->user()->level == 1)
                                  <form action="{{ route('superadmin.notifikasi.pulihkan', $notifikasis->id) }}" method="POST">
                                      @csrf
                                      @method('PUT')
                                      <a href="{{ route('superadmin.notifikasi.show', $notifikasis->id) }}" class="btn mb-1 btn-info"><i class="fa fa-exclamation-circle color-muted"></i></a>
                                      <button type="submit" class="btn mb-1 btn-danger"><i class="fa fa-plus color-muted"></i></button>
                                  </form>
                                @elseif(auth()->user()->level == 2)
                                  <form action="{{ route('admin.notifikasi.pulihkan', $notifikasis->id) }}" method="POST">
                                      @csrf
                                      @method('PUT')
                                      <a href="{{ route('admin.notifikasi.show', $notifikasis->id) }}" class="btn mb-1 btn-info"><i class="fa fa-exclamation-circle color-muted"></i></a>
                                      <button type="submit" class="btn mb-1 btn-danger"><i class="fa fa-plus color-muted"></i></button>
                                  </form>
                                @elseif(auth()->user()->level == 3)
                                  <form action="{{ route('agensi.notifikasi.pulihkan', $notifikasis->id) }}" method="POST">
                                      @csrf
                                      @method('PUT')
                                      <a href="{{ route('agensi.notifikasi.show', $notifikasis->id) }}" class="btn mb-1 btn-info"><i class="fa fa-exclamation-circle color-muted"></i></a>
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