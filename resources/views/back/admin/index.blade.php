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
            <h4 class="card-title">Admin</h4>
            <div class="nav nav-pills">
              <a href="{{ route('superadmin.admin.create') }}" class="btn mb-1 btn-primary">Add New</a>
              </li>
            </div>
            <div class="table-responsive">
                <table class="table header-border table-hover verticle-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Date Of Birth</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($post as $post)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->users->email }}</td>
                            <td>{{ $post->date_of_birth }}</td>
                            <td>{{ $post->address }}</td>
                            <td>
                                <form action="{{ route('superadmin.admin.destroy', $post->user_id) }}" method="POST">
                                    <a href="{{ route('superadmin.admin.show', $post->user_id) }}" class="btn mb-1 btn-info">Show</a>
                                    <a href="{{ route('superadmin.admin.edit', $post->user_id) }}" class="btn mb-1 btn-primary">Edit</a>
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