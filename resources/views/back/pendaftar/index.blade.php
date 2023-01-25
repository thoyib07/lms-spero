@extends('back.templates.pages')
@section('title', 'Pendaftar')
@section('content')
<div class="row">
  <div class="col-lg-12">

    @if(Session::get('success'))
      <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Pendaftar</h4>
            @if(auth()->user()->level == 1)
                <a href="{{ route('superadmin.user.create') }}" class="btn mb-1 btn-primary"><i class="fa fa-plus color-muted"></i></a>
            @endif
            @if(auth()->user()->level == 2)
                <a href="{{ route('admin.user.create') }}" class="btn mb-1 btn-primary"><i class="fa fa-plus color-muted"></i></a>
            @endif
            <div class="table-responsive">
                <table class="table header-border table-hover verticle-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Panjang</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Email</th>
                            <th scope="col">KTP</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($pendaftar as $pendaftars)
                        @if($pendaftars->users->status_aktif == 1)
                          <tr>
                              <th>{{ $loop->iteration }}</th>
                              <td>{{ $pendaftars->nama_panjang }}</td>
                              <td>{{ $pendaftars->tanggal_lahir }}</td>
                              <td>{{ $pendaftars->users->email }}</td>
                              <td><img src="/ktp/{{ $pendaftars->ktp }}" alt="" width="100px"></td>
                              <td>
                                @if(auth()->user()->level == 1)
                                <form action="{{ route('superadmin.user.destroy', $pendaftars->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('superadmin.user.show', $pendaftars->id) }}" class="btn mb-1 btn-info"><i class="fa fa-exclamation-circle color-muted"></i></a>
                                    <a href="{{ route('superadmin.user.edit', $pendaftars->id) }}" class="btn mb-1 btn-primary"><i class="fa fa-pencil color-muted"></i></a>
                                    <button type="submit" class="btn mb-1 btn-danger"><i class="fa fa-close color-muted"></i></button>
                                </form>
                                @endif
                                @if(auth()->user()->level == 2)
                                <form action="{{ route('admin.user.destroy', $pendaftars->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('admin.user.show', $pendaftars->id) }}" class="btn mb-1 btn-info"><i class="fa fa-exclamation-circle color-muted"></i></a>
                                    <a href="{{ route('admin.user.edit', $pendaftars->id) }}" class="btn mb-1 btn-primary"><i class="fa fa-pencil color-muted"></i></a>
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