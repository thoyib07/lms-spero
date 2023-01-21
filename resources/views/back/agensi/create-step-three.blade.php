@extends('back.templates.register')
@section('title', 'Register')
@section('content')
<div class="form-input-content">
  <div class="card login-form mb-0">
      <div class="card-body pt-5">
          <a class="text-center" href="index.html"><h4>Registrasi User</h4></a>
          <form action="{{ route('agensi.post-create-step-three') }}" method="POST">
            @csrf
              <a href="{{ route('agensi.create-step-two') }}" class="btn btn-dark">Back</a>
              <button type="submit" class="btn btn-dark">Submit</button>
          </form>
      </div>
  </div>
</div>
@endsection