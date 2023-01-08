@extends('back.templates.create')
@section('title', 'Create Step Two')
@section('content')
<div class="form-input-content">
  <div class="card login-form mb-0">
      <div class="card-body pt-5">
          <a class="text-center" href="index.html"><h4>Create Step Two</h4></a>
          <form action="{{ route('agency.post-create-step-two') }}" method="POST" class="">
            @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Director Name</label>
                  <input type="text" disabled name="name" value="{{ $director->name ?? '' }}" class="form-control" placeholder="Name">
                  <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                </div>
                <div class="form-group col-md-6">
                    <label>Business Name</label>
                    <input type="text" name="business_name" value="{{ $agency->business_name ?? '' }}" class="form-control" placeholder="Business Name">
                    <span class="text-danger">@error('business_name'){{ $message }}@enderror</span>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Business Identification Number</label>
                  <input type="number" name="business_identification_number" value="{{ $agency->business_identification_number ?? '' }}" class="form-control" placeholder="Business Identification Number">
                  <span class="text-danger">@error('business_identification_number'){{ $message }}@enderror</span>
                </div>
                <div class="form-group col-md-6">
                  <label>Phone Number</label>
                  <input type="number" name="telephone_number" value="{{ $agency->telephone_number ?? '' }}" class="form-control" placeholder="Phone Number">
                  <span class="text-danger">@error('telephone_number'){{ $message }}@enderror</span>
                </div>
              </div>
              <div class="form-group">
                <label>Address</label>
                <textarea name="address" class="form-control h-150px" rows="3" id="comment" placeholder="Address">{{ $agency->address ?? '' }}</textarea>
                <span class="text-danger">@error('address'){{ $message }}@enderror</span>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Email</label>
                  <input type="email" name="email" value="{{ $agency->email ?? '' }}" class="form-control" placeholder="Email">
                  <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                </div>
                <div class="form-group col-md-6">
                  <label>Password</label>
                  <input type="text" name="password" value="{{ $agency->password ?? '' }}" class="form-control" placeholder="Password">
                  <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                </div>
              </div>
              <a href="{{ route('agency.create-step-one') }}" class="btn btn-dark">Back</a>
              <button type="submit" class="btn btn-dark">Next</button>
          </form>
      </div>
  </div>
</div>
@endsection