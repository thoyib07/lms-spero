@extends('layout.main')



@section('container')
<link rel="stylesheet" href=" {{ asset('../css/dashboard_1-2.css')}}">
<nav style="z-index: 2;" class="navbar navbar-expand-lg navbar-light bg-light position-relative w-100 py-3">
    <div class="container-fluid px-4 px-lg-5">
      <a class="navbar-brand" href="#"><img src="{{asset('../img/spero-logo-removebg-preview-edit.png')}}" class="w-75" alt=""></a>
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
<center>
    <section class="homeExam mt-5 text-start">
      <div class="container">
        <div class="row">
          <div class="col-12 back_home">
            <a href="dashboard_1.html">
              <div class="back__he d-flex gap-2">
                <div class="bh__left">
                  <i class="fa fa-angle-left fs-5"></i>
                </div>
                <div class="bh__right">
                  <h3 class="mb-1">Kembali</h3>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-2">
            <center>
              <div class="ls__left">
                <img src="assets/img/senbud-icon.png" alt="">
              </div>
            </center>
          </div>
          <div class="col-md-6">
            <div class="left__side d-flex gap-5">
              <div class="is__right"> 
                <div class="isr__top px-auto">
                  <h1 class="mt-lg-0 mt-5">Seni Budaya</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti fuga id, dicta placeat eveniet enim iusto beatae recusandae deserunt illum et odio ullam cum sed.</p>
                </div>
                <div class="row d-flex right__desc">
                  <div class="col-md-5 col-6 ">
                    <div class="tcc__bottom d-flex">
                      <div class="tccb__content gap-2 ">
                        <div class="tccbl__left"><img src="assets/img/bg-left.png" alt="" style="width: 1.5rem;">
                        </div>
                        <div class="tccbl__right">
                              <p class="mt-1">15</p>
                        </div>
                      </div>
                      <div class="tccb__content gap-2">
                          <div class="tccbl__left"><img src="assets/img/bg-middle.png" alt="" style="width: 1.25rem;">
                          </div>
                          <div class="tccbl__right">
                                <p class="mt-1">10</p>
                          </div>
                      </div>
                      <div class="tccb__content gap-2" id="tccb__last">
                          <div class="tccbl__left"><img src="assets/img/bg-right.png" alt="" style="width: 1.25rem;">
                          </div>
                          <div class="tccbl__right">
                                <p class="mt-1">35</p>
                          </div>
                      </div>
                    </div> 
                  </div>
                  <div class="col-md-5 col-6">
                    <div class="tcc__right d-flex gap-2">
                      <div class="tccr__left mt-0">
                        <img src="assets/img/star-icon.png" alt="">
                      </div>
                      <div class="tccr__right d-flex gap-1 mt-3">
                        <h2>4.9</h2>
                        <p>/</p>
                        <p>5.0</p>
                      </div>
                    </div> 
                  </div>
                </div>
                <button type="button" class="btn btn-play-vid w-100">
                  <div class="btn__isi d-flex gap-2">
                    <div class="bi__left">
                      <img src="assets/img/play-vid-icon.png" alt="">
                    </div>
                    <div class="bi__right">
                      <H4 class="mb-1 text-white">Mulai Pembelajaran</H4>
                    </div>
                  </div>
                </button>

              </div>
            </div>
            <center>
              <img class="mt-5 w-75 d-none d-sm-block d-sm-none d-md-block" src="assets/img/dashboard-icon-2.png" alt="">
            </center>
          </div>
          
            <div class="col-md-4 col-10 mx-auto mt-4">
              <div class="right__side">
                <h1 class="mb-4 text-white">Materi Yang Telah Anda Selesaikan</h1>

                <div class="rs__content d-flex mt-2">
                  <div class="rsc__left">
                    <img src="assets/img/bg-senbud-list.png" alt="">
                  </div>
                  <!-- <div class="rsc__middle">
                    <h1 class="mb-0">Materi 5</h1>
                    <p class="mb-0">Anda Belum Mengikuti Materi Ini</p>
                  </div> -->
                  <div class="rsc__right">
                    <div class="form-check-reverse rscr d-flex">
                      <label class="form-check-label rsc__middle" for="reverseCheck1">
                        <h1 class="mb-0">Materi 5</h1>
                        <p class="mb-0">Anda Belum Mengikuti Materi Ini</p>
                      </label>
                      <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                    </div>
                  </div>
                </div>
                <div class="rs__content d-flex mt-2">
                  <div class="rsc__left">
                    <img src="assets/img/bg-senbud-list.png" alt="">
                  </div>
                  <!-- <div class="rsc__middle">
                    <h1 class="mb-0">Materi 5</h1>
                    <p class="mb-0">Anda Belum Mengikuti Materi Ini</p>
                  </div> -->
                  <div class="rsc__right">
                    <div class="form-check-reverse rscr d-flex">
                      <label class="form-check-label rsc__middle" for="reverseCheck1">
                        <h1 class="mb-0">Materi 5</h1>
                        <p class="mb-0">Anda Belum Mengikuti Materi Ini</p>
                      </label>
                      <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                    </div>
                  </div>
                </div>
                <div class="rs__content d-flex mt-2">
                  <div class="rsc__left">
                    <img src="assets/img/bg-senbud-list.png" alt="">
                  </div>
                  <!-- <div class="rsc__middle">
                    <h1 class="mb-0">Materi 5</h1>
                    <p class="mb-0">Anda Belum Mengikuti Materi Ini</p>
                  </div> -->
                  <div class="rsc__right">
                    <div class="form-check-reverse rscr d-flex">
                      <label class="form-check-label rsc__middle" for="reverseCheck1">
                        <h1 class="mb-0">Materi 5</h1>
                        <p class="mb-0">Anda Belum Mengikuti Materi Ini</p>
                      </label>
                      <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                    </div>
                  </div>
                </div>
                <div class="rs__content d-flex mt-2">
                  <div class="rsc__left">
                    <img src="assets/img/bg-senbud-list.png" alt="">
                  </div>
                  <!-- <div class="rsc__middle">
                    <h1 class="mb-0">Materi 5</h1>
                    <p class="mb-0">Anda Belum Mengikuti Materi Ini</p>
                  </div> -->
                  <div class="rsc__right">
                    <div class="form-check-reverse rscr d-flex">
                      <label class="form-check-label rsc__middle" for="reverseCheck1">
                        <h1 class="mb-0">Materi 5</h1>
                        <p class="mb-0">Anda Belum Mengikuti Materi Ini</p>
                      </label>
                      <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                    </div>
                  </div>
                </div>
                <div class="rs__content d-flex mt-2">
                  <div class="rsc__left">
                    <img src="assets/img/bg-senbud-list.png" alt="">
                  </div>
                  <!-- <div class="rsc__middle">
                    <h1 class="mb-0">Materi 5</h1>
                    <p class="mb-0">Anda Belum Mengikuti Materi Ini</p>
                  </div> -->
                  <div class="rsc__right">
                    <div class="form-check-reverse rscr d-flex">
                      <label class="form-check-label rsc__middle" for="reverseCheck1">
                        <h1 class="mb-0">Materi 5</h1>
                        <p class="mb-0">Anda Belum Mengikuti Materi Ini</p>
                      </label>
                      <input class="form-check-input" type="checkbox" value="" id="reverseCheck1">
                    </div>
                  </div>
                </div>

              </div>
            </div>
        </div>
      </div>
    </section>
</center>
@endsection