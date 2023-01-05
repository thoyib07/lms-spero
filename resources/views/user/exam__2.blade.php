@extends('layout.main')



@section('container')
<link rel="stylesheet" href=" {{ asset('../css/exam.css')}}">

    <nav style="z-index: 2;" class="navbar navbar-expand-lg navbar-light bg-light position-relative w-100 py-3">
     <div class="container-fluid px-4 px-lg-5">
      <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/spero-logo-removebg-preview-edit.png')}}" class="w-75" alt=""></a>
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
              <button class="btn btn-outline-none btn-search" type="submit"><img src="{{ asset('assets/img/search-icon.png')}}" alt=""></button>
            </form>
          </div>
        <div class="notification d-flex gap-3">
            <button type="button" class="btn btn-notif position-relative">
                <img class="" src="{{asset('assets/img/lonceng-logo.png')}}  " alt="">
                <span class="position-absolute top-25 start-75 translate-middle p-2 bg-danger border border-light rounded-circle">
                  <span class="visually-hidden">New alerts</span>
                </span>
              </button>
              <button type="button" class="btn btn-notif position-relative">
                <img class="" src="{{asset('assets/img/profil-icon.png')}}" alt="">
                <span class="position-absolute top-25 start-75 translate-middle p-2 bg-danger border border-light rounded-circle">
                  <span class="visually-hidden">New alerts</span>
                </span>
              </button>
        </div>
      </div>
     </div>
    </nav>


    <section class="exam mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-end my-auto">
                    <a class="btn btn-next" href="/exam" role="button">
                        <div class="bn__isi d-flex gap-2">
                            <img class="rotasigambar" src="{{asset('../img/play-icon.png')}} " alt="">
                            <p class="mb-0">Kembali</p>
                        </div>
                    </a>
                    <a class="btn btn-next" href="/exam-nilai" role="button">
                        <div class="bn__isi d-flex gap-2">
                            <img src="{{ asset('../img/play-icon.png')}}" alt="">
                            <p class="mb-0">Selesai</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-12 title mt-3">
                    <h3>Soal Pilihan Ganda</h3>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="pg__question d-flex gap-4">
                        <h4 class="mt-1">1.</h4>
                        <p class="mb-1">Apa artinya karakter Melankolis?</p>
                    </div>
                </div>
                <div class="col-md-12 px-lg-5 px-2">
                    <div class="pg__answer d-flex gap-4 mt-3">
                        <div class="pa__left">
                            <h4 class="mb-0 text-center">A</h4>
                        </div>
                        <div class="pa__right">
                            <p class="mb-0">Berpikir negatif</p>
                        </div>
                    </div>
                    <div class="pg__answer d-flex gap-4 mt-3">
                        <div class="pa__left">
                            <h4 class="mb-0 text-center">B</h4>
                        </div>
                        <div class="pa__right">
                            <p class="mb-0">Pendendam</p>
                        </div>
                    </div>
                    <div class="pg__answer d-flex gap-4 mt-3">
                        <div class="pa__left">
                            <h4 class="mb-0 text-center">C</h4>
                        </div>
                        <div class="pa__right">
                            <p class="mb-0">Pemurung</p>
                        </div>
                    </div>
                    <div class="pg__answer d-flex gap-4 mt-3">
                        <div class="pa__left">
                            <h4 class="mb-0 text-center">D</h4>
                        </div>
                        <div class="pa__right">
                            <p class="mb-0">Perkasa</p>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('../img/login-icon-2.png')}}" class="icon__exam d-none d-sm-block" alt="">

                <!-- <div class="col-md-12">
                    <div class="row d-flex">
                        <div class="col-md-8">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                    <div class="row d-flex tc__mapel">
                                        <div class="col-md-12 mt-5">
                                            <div class="pg__question d-flex gap-4">
                                                <h4 class="mb-0">1.</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum necessitatibus magni dignissimos neque aperiam doloremque veritatis facilis omnis sed. Illo, fuga. Blanditiis beatae provident optio!</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 px-5">
                                            <div class="pg__answer d-flex gap-4 mt-3">
                                                <div class="pa__left">
                                                    <h4 class="mb-0 text-center">A</h4>
                                                </div>
                                                <div class="pa__right">
                                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste, repudiandae!</p>
                                                </div>
                                            </div>
                                            <div class="pg__answer d-flex gap-4 mt-3">
                                                <div class="pa__left">
                                                    <h4 class="mb-0 text-center">B</h4>
                                                </div>
                                                <div class="pa__right">
                                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste, repudiandae!</p>
                                                </div>
                                            </div>
                                            <div class="pg__answer d-flex gap-4 mt-3">
                                                <div class="pa__left">
                                                    <h4 class="mb-0 text-center">C</h4>
                                                </div>
                                                <div class="pa__right">
                                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste, repudiandae!</p>
                                                </div>
                                            </div>
                                            <div class="pg__answer d-flex gap-4 mt-3">
                                                <div class="pa__left">
                                                    <h4 class="mb-0 text-center">D</h4>
                                                </div>
                                                <div class="pa__right">
                                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste, repudiandae!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
    
                                <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">2</div>
                                <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">3</div>
                                <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">4</div>
                                <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">5</div>
                            </div>
                        </div>
                        <div class="col-md-1 outer">
                            <div class="inner"></div>
                        </div>
                        <div class="col-md-3">
                            <ul class="nav nav-pills mb-3 mt-5" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link daylist active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">1</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link daylist" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">2</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link daylist" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">3</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link daylist" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria-selected="false">4</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link daylist" id="pills-5-tab" data-bs-toggle="pill" data-bs-target="#pills-5" type="button" role="tab" aria-controls="pills-5" aria-selected="false">5</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                
            </div>
        </div>
    </section>
@endsection