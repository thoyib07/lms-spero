@extends('back.templates.login')
@section('title', 'Login')
@section('content')
<div class="form-input-content">
  <div class="card login-form mb-0">
      <div class="card-body pt-5">
          <a class="text-center" href="index.html"><h4>Login</h4></a>

            @if(Session::get('fail'))
              <div class="alert alert-danger alert-dismissible fade show">
                  {{ Session::get('fail') }}
              </div>
            @endif

          <form action="{{ route('postlogin') }}" method="POST" class="">
            @csrf
              <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Email">
                  <span class="text-danger">@error('email'){{ $message }}@enderror</span>
              </div>
              <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password">
                  <span class="text-danger">@error('password'){{ $message }}@enderror</span>
              </div>
              <button type="submit" class="btn login-form__btn submit w-100">Sign In</button>
          </form>
      </div>
  </div>
</div>
@endsection