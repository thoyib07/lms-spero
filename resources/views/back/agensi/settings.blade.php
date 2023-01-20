@extends('back.templates.pages')
@section('title', isset($title) ? $title : 'Edit')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield('title')</h4>
                <div class="basic-form">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" name="email"  value="{{ $user->email }}" class="form-control" placeholder="Email">
                          <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="text" name="password"  value="{{ $user->password }}" class="form-control" placeholder="Password">
                          <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                        </div>
                        <a href="{{ route('agensi.dashboard') }}" class="btn btn-dark">Back</a>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</script>
@endsection