@extends('layout.main')



@section('container')
<link rel="stylesheet" href=" {{ asset('../css/exam__nilai.css')}}">    
    
    <nav style="z-index: 2;" class="navbar navbar-expand-lg navbar-light bg-light position-relative w-100 py-3">
     <div class="container-fluid px-4 px-lg-5">
      <a class="navbar-brand" href="#"><img src="assets/img/spero-logo-removebg-preview-edit.png" class="w-75" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle dropdown-materi" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Materi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Daftar Lowongan</a>
          </li>
        </ul>
          <div class="search me-5">
            <form class="d-flex">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-none btn-search" type="submit"><img src="assets/img/search-icon.png" alt=""></button>
            </form>
          </div>
        <div class="notification d-flex gap-3">
            <button type="button" class="btn btn-notif position-relative">
                <img class="" src="assets/img/lonceng-logo.png" alt="">
                <span class="position-absolute top-25 start-75 translate-middle p-2 bg-danger border border-light rounded-circle">
                  <span class="visually-hidden">New alerts</span>
                </span>
              </button>
              <button type="button" class="btn btn-notif position-relative">
                <img class="" src="assets/img/profil-icon.png" alt="">
                <span class="position-absolute top-25 start-75 translate-middle p-2 bg-danger border border-light rounded-circle">
                  <span class="visually-hidden">New alerts</span>
                </span>
              </button>
        </div>
      </div>
     </div>
    </nav>

    <section class="presentase text-center">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="box">
                      <div class="percent my-auto">
                          <svg>
                              <circle cx="70" cy="70" r="70"></circle>
                              <circle cx="70" cy="70" r="70"></circle>
                          </svg>
                          <div class="number">
                              <h1 class="xl mb-0">98</h1>
                          </div>
                      </div>
                  </div>
                  <div class="desc">
                      <h2>Usaha Yang Bagus !</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, nobis!</p>
                  </div>
                  <a class="btn btn-next" href="/exam-vid" role="button">
                      <div class="bn__isi d-flex gap-2">
                          <p class="mb-0">selesai</p>
                      </div>
                  </a>
              
              </div>
          </div>
      </div>
    </section>

@endsection