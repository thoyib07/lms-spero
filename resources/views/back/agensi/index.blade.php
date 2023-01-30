@extends('back.templates.pages')
@section('title', 'Index')
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
              <a href="{{ route('superadmin.agensi.create') }}" class="btn mb-1 btn-primary"><i class="fa fa-plus color-muted"></i></a>
              <a href="{{ route('superadmin.agensi.verification') }}" class="btn mb-1 btn-primary"><i class="mdi mdi-file-document-box color-muted"></i></a>
            @elseif(auth()->user()->level == 2)
              <a href="{{ route('admin.agensi.create') }}" class="btn mb-1 btn-primary"><i class="fa fa-plus color-muted"></i></a>
              <a href="{{ route('admin.agensi.verification') }}" class="btn mb-1 btn-primary"><i class="mdi mdi-file-document-box color-muted"></i></a>
            @endif
            <div class="table-responsive">
                <table class="table header-border table-hover verticle-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Nama Usaha</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Direktur</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($agensi as $agensis)
                        @if($agensis->users->status_aktif == 1 and $agensis->status_verifikasi == 1)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              @if($agensis->logo == null)
                                <td><img src="/default.jpg" alt="" width="100px"></td>
                              @else
                                <td><img src="/logo/{{ $agensis->logo }}" alt="" width="100px"></td>
                              @endif
                              <td>{{ $agensis->nama_usaha }}</td>
                              <td>{{ $agensis->users->email }}</td>
                              <td>{{ $agensis->telepon }}</td>
                              <td>{{ $agensis->direkturs->nama_panjang }}</td>
                              <td>
                                @if(auth()->user()->level == 1)
                                  <form action="{{ route('superadmin.agensi.destroy', $agensis->id) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <a href="{{ route('superadmin.agensi.show', $agensis->id) }}" class="btn mb-1 btn-info"><i class="fa fa-exclamation-circle color-muted"></i></a>
                                      <a href="{{ route('superadmin.agensi.edit', $agensis->id) }}" class="btn mb-1 btn-primary"><i class="fa fa-pencil color-muted"></i></a>
                                      <button type="submit" class="btn mb-1 btn-danger"><i class="fa fa-close color-muted"></i></button>
                                  </form>
                                @elseif(auth()->user()->level == 2)
                                  <form action="{{ route('admin.agensi.destroy', $agensis->id) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <a href="{{ route('admin.agensi.show', $agensis->id) }}" class="btn mb-1 btn-info"><i class="fa fa-exclamation-circle color-muted"></i></a>
                                      <a href="{{ route('admin.agensi.edit', $agensis->id) }}" class="btn mb-1 btn-primary"><i class="fa fa-pencil color-muted"></i></a>
                                      <button type="submit" class="btn mb-1 btn-danger"><i class="fa fa-close color-muted"></i></button>
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