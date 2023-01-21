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
            <h4 class="card-title">Agensi</h4>
            @if(auth()->user()->level == 1)
              <a href="{{ route('superadmin.agensi.create') }}" class="btn mb-1 btn-primary">Tambah</a>
              <a href="{{ route('superadmin.agensi.verification') }}" class="btn mb-1 btn-primary">Verfikasi</a>
            @endif
            @if(auth()->user()->level == 2)
              <a href="{{ route('admin.agensi.create') }}" class="btn mb-1 btn-primary">Tambah</a>
              <a href="{{ route('admin.agensi.verification') }}" class="btn mb-1 btn-primary">Verfikasi</a>
            @endif
            <div class="table-responsive">
                <table class="table header-border table-hover verticle-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Direktur</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Nama Usaha</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($agensi as $agensis)
                        @if($agensis->users->status_aktif == 1 or $agensis->users->status_aktif == 2)
                          <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $agensis->direkturs->nama_panjang }}</td>
                            @if($agensis->logo == null)
                              <td><img src="/image.jpg" alt="" width="100px"></td>
                            @else
                              <td><img src="/logo/{{ $agensis->logo }}" alt="" width="100px"></td>
                            @endif
                            <td>{{ $agensis->nama_usaha }}</td>
                            <td>{{ $agensis->users->email }}</td>
                            <td>
                              @if($agensis->users->status_aktif == 1)
                                <span class="label gradient-1 rounded">Enable</span>
                              @endif
                              @if($agensis->users->status_aktif == 2)
                                <span class="label gradient-2 rounded">Disable</span>
                              @endif
                            </td>
                            <td>
                              @if(auth()->user()->level == 1)
                                <form action="{{ route('superadmin.agensi.destroy', $agensis->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('superadmin.agensi.show', $agensis->id) }}" class="btn mb-1 btn-info">Show</a>
                                    <a href="{{ route('superadmin.agensi.edit', $agensis->id) }}" class="btn mb-1 btn-primary">Edit</a>
                                    <button type="submit" class="btn mb-1 btn-danger">Delete</button>
                                  </form>
                              @endif
                              @if(auth()->user()->level == 2)
                                <form action="{{ route('admin.agensi.destroy', $agensis->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('admin.agensi.show', $agensis->id) }}" class="btn mb-1 btn-info">Show</a>
                                    <a href="{{ route('admin.agensi.edit', $agensis->id) }}" class="btn mb-1 btn-primary">Edit</a>
                                    <button type="submit" class="btn mb-1 btn-danger">Delete</button>
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