@extends('back.templates.pages')
@section('title', 'Index')
@section('content')
<div class="row">
  <div class="col-lg-12">

    @if(Session::get('success'))
      <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button><strong>{{ Session::get('success') }}
      </div>
    @endif

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Hover Table</h4>
            <div class="table-responsive">
                <table class="table header-border table-hover verticle-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Director Name</th>
                            <th scope="col">Business Name</th>
                            <th scope="col">BIN</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telp.</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($post as $post)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $post->directors->name }}</td>
                            <td>{{ $post->business_name }}</td>
                            <td>{{ $post->business_identification_number }}</td>
                            <td>{{ $post->telephone_number }}</td>
                            <td>{{ $post->users->email }}</td>
                            <td>
                                <form action="{{ route('superadmin.admin.destroy', $post->id) }}" method="POST">
                                    <a href="{{ route('superadmin.admin.show', $post->id) }}" class="btn mb-1 btn-info">Show</a>
                                    <a href="{{ route('superadmin.admin.edit', $post->id) }}" class="btn mb-1 btn-primary">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn mb-1 btn-danger">Delete</button>
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