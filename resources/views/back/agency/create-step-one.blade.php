@extends('back.templates.create')
@section('title', 'Create Step One')
@section('content')
<div class="form-input-content">
  <div class="card login-form mb-0">
      <div class="card-body pt-5">
          <a class="text-center" href="index.html"><h4>Create Step One</h4></a>
          <form action="{{ route('agency.post-create-step-one') }}" method="POST" class="">
            @csrf
              <div class="form-group">
                  <label>Director Name</label>
                  <input type="text" name="name" value="{{ $director->name ?? '' }}" class="form-control" placeholder="Name">
                  <span class="text-danger">@error('name'){{ $message }}@enderror</span>
              </div>
              <div class="form-group">
                  <label>Date Of Birth</label>
                  <input type="date" name="date_of_birth" value="{{ $director->date_of_birth ?? '' }}" class="form-control" placeholder="">
                  <span class="text-danger">@error('date_of_birth'){{ $message }}@enderror</span>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Email</label>
                  <input type="email" name="email" value="{{ $director->email ?? '' }}" class="form-control" placeholder="Email">
                  <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                </div>
                <div class="form-group col-md-6">
                  <label>Phone Number</label>
                  <input type="number" name="phone_number" value="{{ $director->phone_number ?? '' }}" class="form-control" placeholder="Phone Number">
                  <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                </div>
              </div>
              <div class="form-group">
                <label>Address</label>
                <textarea name="address" class="form-control h-150px" rows="3" id="comment" placeholder="Address">{{ $director->address ?? '' }}</textarea>
                <span class="text-danger">@error('address'){{ $message }}@enderror</span>
              </div>
              <button type="submit" class="btn btn-dark">Next</button>
          </form>
      </div>
  </div>
</div>
@endsection