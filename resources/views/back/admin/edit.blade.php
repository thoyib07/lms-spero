@extends('back.templates.pages')
@section('title', isset($title) ? $title : 'Create')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">@yield('title')</h4>
                <div class="basic-form">
                    <form action="{{ route('superadmin.admin.update', $admin->user_id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ $admin->name }}" class="form-control" placeholder="Name">
                            <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label>Date Of Birth</label>
                          <input type="date" name="date_of_birth" value="{{ $admin->date_of_birth }}" class="form-control">
                          <span class="text-danger">@error('date_of_birth'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="text" name="email" value="{{ $admin->users->email }}" class="form-control" placeholder="Email">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                          </div>
                          <div class="form-group col-md-6">
                              <label>Phone Number</label>
                              <input type="number" name="phone_number" value="{{ $admin->phone_number }}" class="form-control" placeholder="Phone Number">
                              <span class="text-danger">@error('phone_number'){{ $message }}@enderror</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Address</label>
                          <textarea name="address" class="form-control h-150px" rows="6" id="comment" placeholder="Address">{{ $admin->address }}</textarea>
                          <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" value="{{ $admin->users->status }}">
                            <option disabled>{{ $admin->users->status }}</option>
                            <option>1</option>
                            <option>2</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" value="{{ $admin->users->password }}" class="form-control" placeholder="Password">
                            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                        </div>
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