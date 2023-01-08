@extends('back.templates.create')
@section('title', 'Create Step Three')
@section('content')
<div class="form-input-content">
  <div class="card login-form mb-0">
      <div class="card-body pt-5">
          <a class="text-center" href="index.html"><h4>Create Step Three</h4></a>
          <form action="{{ route('agency.post-create-step-one') }}" method="POST" class="">
            @csrf
              <ul class="nav nav-pills mb-3">
                <li class="nav-item"><a href="#navpills-1" class="nav-link active show" data-toggle="tab" aria-expanded="false">Direcktor</a>
                </li>
                <li class="nav-item"><a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Agency</a>
                </li>
              </ul>
              <div class="tab-content br-n pn">
                <div id="navpills-1" class="tab-pane active show">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>Director Name</label>
                            <input type="text" disabled name="name" value="{{ $director->name ?? '' }}" class="form-control" placeholder="Director Name">
                            <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                          </div>
                          <div class="form-group col-md-6">
                            <label>Date Of Birth</label>
                            <input type="date" disabled name="date_of_birth" value="{{ $director->date_of_birth ?? '' }}" class="form-control" placeholder="">
                            <span class="text-danger">@error('date_of_birth'){{ $message }}@enderror</span>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="email" disabled name="email" value="{{ $director->email ?? '' }}" class="form-control" placeholder="Email">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                          </div>
                          <div class="form-group col-md-6">
                            <label>Phone Number</label>
                            <input type="number" disabled name="phone_number" value="{{ $director->phone_number ?? '' }}" class="form-control" placeholder="Phone Number">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Address</label>
                          <textarea name="address" disabled class="form-control h-150px" rows="3" id="comment" placeholder="Address">{{ $director->address ?? '' }}</textarea>
                          <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                        </div>
                        </div>
                    </div>
                </div>
                <div id="navpills-2" class="tab-pane">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-12 col-xl-12">
                          <div class="form-group">
                            <label>Business Name</label>
                              <input type="number" disabled name="business_name" value="{{ $agency->business_name ?? '' }}" class="form-control" placeholder="Business Name">
                              <span class="text-danger">@error('business_name'){{ $message }}@enderror</span>
                        </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label>Business Identification Number</label>
                              <input type="number" disabled name="business_identification_number" value="{{ $agency->business_identification_number ?? '' }}" class="form-control" placeholder="Business Name">
                              <span class="text-danger">@error('business_identification_number'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                              <label>Telephone Number</label>
                              <input type="number" disabled name="telephone_number" value="{{ $agency->telephone_number ?? '' }}" class="form-control" placeholder="Telephone Number">
                              <span class="text-danger">@error('telephone_number'){{ $message }}@enderror</span>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" disabled class="form-control h-150px" rows="3" id="comment" placeholder="Address">{{ $agency->address ?? '' }}</textarea>
                            <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label>Email</label>
                              <input type="email" disabled name="email" value="{{ $agency->email ?? '' }}" class="form-control" placeholder="Email">
                              <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                              <label>Password</label>
                              <input type="text" disabled name="password" value="{{ $agency->password ?? '' }}" class="form-control" placeholder="Password">
                              <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
              </div>
              <a href="{{ route('agency.create-step-two') }}" class="btn btn-dark">Back</a>
              <button type="submit" class="btn btn-dark">Next</button>
          </form>
      </div>
  </div>
</div>
@endsection