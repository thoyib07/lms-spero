@extends('layout.main')



@section('container')
<link rel="stylesheet" href=" {{ asset('../css/exam-vid.css')}}">
<!-- NAV REKAYASA -->
    <nav style="z-index: 2;" class="navbar navbar-expand-lg navbar-light bg-light position-relative w-100 py-3">
     <div class="container-fluid px-4 px-lg-5">
      <a class="navbar-brand" href="#"><img src="{{asset('../img/logo-baru.png')}} " class="w-75" alt=""></a>
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
              <button class="btn btn-outline-none btn-search" type="submit"><img src="{{asset('../img/search-icon.png')}} " alt=""></button>
            </form>
          </div>
        <div class="notification d-flex gap-3">
            <button type="button" class="btn btn-notif position-relative">
                <img class="" src="{{asset('../img/lonceng-logo.png')}} " alt="">
                <span class="position-absolute top-25 start-75 translate-middle p-2 bg-danger border border-light rounded-circle">
                  <span class="visually-hidden">New alerts</span>
                </span>
              </button>
              <button type="button" class="btn btn-notif position-relative">
                <img class="" src="{{asset('../img/profil-icon.png')}}" alt="">
                <span class="position-absolute top-25 start-75 translate-middle p-2 bg-danger border border-light rounded-circle">
                  <span class="visually-hidden">New alerts</span>
                </span>
              </button>
        </div>
      </div>
     </div>
    </nav>

    <section class="exam-vid mt-lg-5 mt-3 px-lg-5 px-2">
        <div class="row">
            <div class="col-md-12">
                <div class="row title__left d-flex">
                    <div class="col-sm-6 tl__left d-flex gap-3">
                        <div class="tll__img">
                            <img src="{{asset('../img/bg-senbud-list.png')}} " alt="" class="">
                        </div>
                        <div class="tll__title">
                            <h3 class="mb-0">{{ $examVid->judul_materi }}</h3>
                            <p class="mb-0">Materi 6</p>
                        </div>
                    </div>
                    <div class="col-sm-6 tl__right d-flex justify-content-sm-end justify-content-start gap-2 my-sm-0 my-2">
                        {{-- <div class="pdf__download">
                          <a class="btn btn-primary d-flex gap-2" href="#" role="button">
                            <div class="pdf__image ">
                              <img class="w-75" src="{{asset('../img/pdf-icon.png')}}" alt="">
                            </div>
                            <p class="mb-0">Unduh PDF</p>
                          </a>
                        </div> --}}
                        <div class="mulai">
                          <a class="btn btn-success" href="{{ route('pageChat', $examVid->id) }}" role="button"><p class="sm">Lanjut Pembelajaran</p></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-lg-5 mt-1">
              <div class="row d-flex right__content">
                <div class="col-md-6">
                  <div class="vid__instruction">
                    <video controls autoplay loop width="100%" height="100%">
                      <source src="{{asset('../img/Last Child - Tak Pernah Ternilai (Official Video) #TPT.mp4')}}" type="mp4" />
                      Browsermu tidak mendukung tag ini, upgrade donk!
                    </video>
                  </div>
                  <div class="exam mt-lg-2 mt-3">
                    <h4 class="text-start fw-bold">{{ $examVid->intruksi_2 }}</h4>
                    <p>{{ $examVid->penjelasan_2 }}</p>
                  </div>
                </div>
                <div class="col-md-6 right__exam">
                  <div class="instruction mt-lg-2 mt-3">
                    <h4 class=" fw-bold">{{ $examVid->intruksi_2 }}</h4>
                    <p>{{ $examVid->pertanyaan_studi_kasus }}</p>
                  </div>
                  <div class="form-floating mt-3">
                    <textarea  style="height: 50vh;" class="form-control"placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Jawaban</label>
                  </div>
                </div>
              </div>
            </div>
        </div>
       </section>

@endsection