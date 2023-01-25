@extends('back.templates.pages')
@section('title', 'Admin')
@section('content')
<div class="row">
  <div class="col-lg-12">

    @if(Session::get('success'))
      <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Admin</h4>
            <a href="{{ route('superadmin.admin.create') }}" class="btn mb-1 btn-primary"><i class="fa fa-plus color-muted"></i></a>
            <div class="table-responsive">
                <table class="table header-border table-hover verticle-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Panjang</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nomor Handphone</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($admin as $admins)
                        @if($admins->users->status_aktif == 1)
                          <tr>
                              <th>{{ $loop->iteration }}</th>
                              <td>{{ $admins->nama_panjang }}</td>
                              <td>{{ $admins->tanggal_lahir }}</td>
                              <td>{{ $admins->users->email }}</td>
                              <td>{{ $admins->no_hp }}</td>
                              <td>{{ $admins->alamat }}</td>
                              <td>
                                <form action="{{ route('superadmin.admin.destroy', $admins->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('superadmin.admin.show', $admins->id) }}" class="btn mb-1 btn-info"><i class="fa fa-exclamation-circle color-muted"></i></a>
                                    <a href="{{ route('superadmin.admin.edit', $admins->id) }}" class="btn mb-1 btn-primary"><i class="fa fa-pencil color-muted"></i></a>
                                    <button type="submit" class="btn mb-1 btn-danger"><i class="fa fa-close color-muted"></i></button>
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