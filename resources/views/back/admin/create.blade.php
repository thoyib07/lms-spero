@extends('back.templates.pages')
@section('title', isset($title) ? $title : 'Create')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield('title')</h4>
                <div class="basic-form">
                    <form action="{{ route('superadmin.admin.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                            <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Date Of Birth</label>
                          <input type="date" name="date_of_birth" class="form-control">
                          <span class="text-danger">@error('date_of_birth'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                          </div>
                          <div class="form-group col-md-6">
                              <label>Phone Number</label>
                              <input type="number" name="phone_number" class="form-control" placeholder="Phone Number">
                              <span class="text-danger">@error('phone_number'){{ $message }}@enderror</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Address</label>
                          <textarea name="address" class="form-control h-150px" rows="6" id="comment" placeholder="Address"></textarea>
                          <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="text" name="password" class="form-control" placeholder="Password">
                          <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                        </div>
                        <a href="{{ route('superadmin.admin.index') }}" class="btn btn-dark">Back</a>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection