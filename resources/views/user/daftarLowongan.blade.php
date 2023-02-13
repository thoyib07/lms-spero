@extends('layout.main')



@section('container')
<link rel="stylesheet" href=" {{ asset('../css/daftarLowongan.css')}}">
<!-- NAV REKAYASA -->
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

    <section class="daftarLowongan mt-5 mx-auto">
        <div class="container daftarLowonganContainerx`">
            <div class="row">
                <div class="col-md-3 me-5 left__content">
                    <h2>Filter Pencarianmu</h2>
                    <hr class="bg-dark border-2 border-top border-dark">
                    <div class="dl__filter">
                        <h3>Level Pekerjaan</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault"> Sales</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault"> Team Leader</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault"> Area Koordinator</label>
                        </div>
                    </div>
                    <hr class="bg-dark border-2 border-top border-dark">
                    <div class="dl__filter">
                        <h3>Kota</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Depok, Indonesia</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Jakarta, Indonesia</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Bandung, Indonesia</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Surabaya, Indonesia</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Tangerang, Indonesia</label>
                        </div>
                    </div>
                    <hr class="bg-dark border-2 border-top border-dark">
                    <div class="dl__filter">
                        <h3>Pengalaman</h3>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">1-3 Tahun</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">3-5 Tahun</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">5-10 Tahun</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Lebih Dari 10 Tahun</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-sm-0 mt-5">
                    <div class="row d-flex gap-3">
                        <div class="col-md-5 dl__content" id="daftarLowongan">
                            <a href="/daftarLowongan-2">
                                <div class="top__content d-flex my-auto">
                                    <div class="tc__left">
                                        <img src="{{asset('../img/spero-under.png')}}" alt="">
                                    </div>
                                    <div class="tc__right my-auto mb-0">
                                        <h1>Sales (Chemical)</h1>
                                        <p>PT. Spero Mahakarya Nusantara</p>
                                    </div>
                                </div>
                                <hr class="bg-dark border-2 border-top border-dark">
                                <div class="bottom__content">
                                    <div class="bc__location d-flex gap-2">
                                        <div class="bcl__left">
                                            <img src="{{asset('../img/location-icon.png')}}" alt="">
                                        </div>
                                        <div class="bcl__right">
                                            <p>Depok</p>
                                        </div>
                                    </div>
                                    <div class="bc__gaji d-flex gap-2">
                                        <div class="bcl__left">
                                            <img src="{{asset('../img/dollar-icon.png')}}" alt="">
                                        </div>
                                        <div class="bcl__right">
                                            <p>Perusahaan Tidak Menampilkan Gaji</p>
                                        </div>
                                    </div>
                                    <div class="bc__pengalaman d-flex gap-2">
                                        <div class="bcl__left">
                                            <img src="{{asset('../img/pengalaman-icon.png')}}" alt="">
                                        </div>
                                        <div class="bcl__right">
                                            <p>1-3 Tahun Pengalaman</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection