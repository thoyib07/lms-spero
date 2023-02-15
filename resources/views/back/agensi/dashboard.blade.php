@extends('back.templates.pages')
@section('title', 'Dashboard')
@section('content')
<div class="row">
  <div class="col-lg-3 col-sm-6">
      <div class="card gradient-1">
        <div class="card-body">
            <h3 class="card-title text-white">Project</h3>
            <div class="d-inline-block">
                <h2 class="text-white">{{ $project }}</h2>
                <p class="text-white mb-0">Jan - March 2019</p>
            </div>
            <span class="float-right display-5 opacity-5"><i class="fa fa-paperclip"></i></span>
        </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6">
      <div class="card gradient-2">
          <div class="card-body">
              <h3 class="card-title text-white">Lowongan</h3>
              <div class="d-inline-block">
                  <h2 class="text-white">{{ $lowongan }}</h2>
                  <p class="text-white mb-0">Jan - March 2019</p>
              </div>
              <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
          </div>
      </div>
  </div>
  <div class="col-lg-3 col-sm-6">
      <div class="card gradient-3">
          <div class="card-body">
              <h3 class="card-title text-white">Materi</h3>
              <div class="d-inline-block">
                  <h2 class="text-white">{{ $materi }}</h2>
                  <p class="text-white mb-0">Jan - March 2019</p>
              </div>
              <span class="float-right display-5 opacity-5"><i class="fa fa-book"></i></span>
          </div>
      </div>
  </div>
  <div class="col-lg-3 col-sm-6">
      <div class="card gradient-4">
          <div class="card-body">
              <h3 class="card-title text-white">Customer Satisfaction</h3>
              <div class="d-inline-block">
                  <h2 class="text-white">99%</h2>
                  <p class="text-white mb-0">Jan - March 2019</p>
              </div>
              <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
          </div>
      </div>
  </div>
</div>
@endsection