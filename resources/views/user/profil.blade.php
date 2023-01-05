@extends('layout.main')



@section('container')
<link rel="stylesheet" href=" {{ asset('../css/profil.css')}}">    
    
    <nav style="z-index: 2;" class="navbar navbar-expand-lg navbar-light bg-light position-relative w-100 py-3">
     <div class="container-fluid px-4 px-lg-5">
      <a class="navbar-brand" href="#"><img src="{{asset('../img/spero-logo-removebg-preview-edit.png')}} " class="w-75" alt=""></a>
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
              <button class="btn btn-outline-none btn-search" type="submit"><img src="{{asset('')}} ../img/search-icon.png" alt=""></button>
            </form>
          </div>
        <div class="notification d-flex gap-3">
            <button type="button" class="btn btn-notif position-relative">
                <img class ="{{asset('../img/lonceng-logo.png')}}" src="" alt="">
                <span class="position-absolute top-25 start-75 translate-middle p-2 bg-danger border border-light rounded-circle">
                  <span class="visually-hidden">New alerts</span>
                </span>
              </button>
              <button type="button" class="btn btn-notif position-relative">
                <img class ="{{asset('../img/profil-icon.png')}}" src="" alt="">
                <span class="position-absolute top-25 start-75 translate-middle p-2 bg-danger border border-light rounded-circle">
                  <span class="visually-hidden">New alerts</span>
                </span>
              </button>
        </div>
      </div>
     </div>
    </nav>



    <section class="profil mt-5">
        <div class="container">
            <div class="row d-flex gap-2">
                <div class="col-md-8 left__content">
                    <div class="bg__atas">
                        <img src="{{asset('../img/kontak-rainbow.png')}} " alt="">
                        <a href="">
                            <button type="button" class="btn btn-up__cover mt-3">Upload Cover</button>
                        </a>
                    </div>
                    <div class="middle gap-2 ms-0 ms-lg-5">
                        <div class="m__left">
                            <img src="{{asset('../img/owl-profile.png')}} " alt="">
                        </div>
                        <div class="m__right">
                            <h2 class="fs-lg-2 fs-5 mt-5">Cadis Extrama Di Raizer</h2>
                            <p class="fs-lg-3 fs-5">UI/UX Designer</p>
                        </div>
                    </div>
                    <div class="bg__bottom mt-5">
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                            </div>
                            <div class="col-md-9">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email...">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                            </div>
                            <div class="col-md-9">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password...">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="exampleInputEmail1" class="form-label">No. Telp</label>
                            </div>
                            <div class="col-md-9">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan No Telp...">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-floating">
                                    <textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2"></label>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="right__content">
                        <h1 class="ms-3">Pilihan Bahasa</h1>
                    <hr class="bg-dark border-2 border-top border-dark m-0 mb-3">
                    <div class="language__option gap-2 mt-2 ms-2">
                        <div class="il__left">
                            <img src="{{asset('../img/indonesian-flag.png')}} " alt="">
                        </div>
                        <div class="il__right">
                            <h2 class="mb-0">Indonesia</h2>
                        </div>
                    </div>
                    <div class="language__option gap-2 mt-2 ms-2">
                        <div class="il__left">
                            <img src="{{asset('../img/english-flag.png')}} " alt="">
                        </div>
                        <div class="il__right">
                            <h2 class="mb-0">Inggris</h2>
                        </div>
                    </div>
                    </div>

                    <div class="left__content__profil mt-3">
                        <a href="/">
                            <button type="button" class="btn btn-primary w-100 gap-2 btn-logout">
                                <div class="left">
                                    <img src="{{asset('../img/profil-logout.png')}} " alt="" class="w-75">
                                </div>
                                <div class="right">
                                    <h2 class="mb-0">Logout</h2>
                                </div>
                            </button>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </section>

@endsection