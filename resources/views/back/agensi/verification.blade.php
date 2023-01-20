@extends('back.templates.pages')
@section('title', 'Verifikasi')
@section('content')
<div class="row">
  <div class="col-lg-12">

    @if(Session::get('success'))
      <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Verifikasi</h4>
            @if(auth()->user()->level == 1)
              <a href="{{ route('superadmin.agensi.index') }}" class="btn mb-1 btn-primary">Back</a>
            @endif
            @if(auth()->user()->level == 2)
              <a href="{{ route('admin.agensi.index') }}" class="btn mb-1 btn-primary">Back</a>
            @endif
            <div class="table-responsive">
                <table class="table header-border table-hover verticle-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Direktur</th>
                            <th scope="col">Nama Usaha</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">NIB</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($agensi as $agensis)
                        @if($agensis->users->status_aktif == 3)
                          <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $agensis->direkturs->nama_panjang }}</td>
                            <td>{{ $agensis->nama_usaha }}</td>
                            <td>{{ $agensis->users->email }}</td>
                            <td>{{ $agensis->telepon }}</td>
                            <td>{{ $agensis->nib }}</td>
                            <td>
                              @if(auth()->user()->level == 1)
                                <form action="{{ route('superadmin.agensi.postverification', $agensis->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <a href="{{ route('superadmin.agensi.show2', $agensis->id) }}" class="btn mb-1 btn-info">Show</a>
                                    <button type="submit" class="btn mb-1 btn-danger">Verification</button>
                                </form>
                              @endif
                              @if(auth()->user()->level == 2)
                                <form action="{{ route('admin.agensi.postverification', $agensis->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <a href="{{ route('admin.agensi.show2', $agensis->id) }}" class="btn mb-1 btn-info">Show</a>
                                    <button type="submit" class="btn mb-1 btn-danger">Verification</button>
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