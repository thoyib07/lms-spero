@extends('layout.main')



@section('container')
<link rel="stylesheet" href=" {{ asset('../css/daftarLowongan_2.css')}}">

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
              <button class="btn btn-outline-none btn-search" type="submit"><img src="{{asset('../img/search-icon.png')}} " alt=""></button>
            </form>
          </div>
        <div class="notification d-flex gap-3">
            <button type="button" class="btn btn-notif position-relative">
                <img class="" src="../img/lonceng-logo.png" alt="">
                <span class="position-absolute top-25 start-75 translate-middle p-2 bg-danger border border-light rounded-circle">
                  <span class="visually-hidden">New alerts</span>
                </span>
              </button>
              <button type="button" class="btn btn-notif position-relative">
                <img class="" src="../img/profil-icon.png" alt="">
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
            <div class="col-12 back_home mb-5">
              <div class="back__he d-flex gap-2">
                  <a href="/daftarLowongan">
                  <div class="bh__left">
                    <i class="fa fa-angle-left fs-5"></i>
                  </div>
                  <div class="bh__right">
                    <h3 class="mb-1">Kembali</h3>
                  </div>
                  </a>
                </div>
            </div>
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
                  <div class="row" id="par_lowonganDetail">
                    <div class="right__content" id="daftarLowongan2" data-numbl="test">
                      <div class="rc__top d-flex gap-3">
                        <div class="rct__left">
                          <img src="{{asset('../img/spero-under.png')}} " alt="">
                        </div>
                        <div class="rct__right w-100">
                          <h1 class="mb-1">{{$data->level}}</h1>
                          <p>{{$data->client}}</p>
                          <hr class="bg-dark border-2 border-top border-dark m-0">
                          <div class="rctr__middle mt-4 ">
                           <div class="row d-flex rctrm">
                            <div class="col-md-6 col-12">
                              <div class="m__left">
                                <div class="ml__content mt-1 d-flex gap-2">
                                  <h2 class="fs-6">Client :</h2>
                                  <p class="mb-1">{{$data->client}}</p>
                                </div>
                                <div class="ml__content mt-1 d-flex gap-2">
                                  <h2 class="fs-6">Project :</h2>
                                  <p class="mb-1">{{$data->projects->judul_project}}</p>
                                </div>
                                <div class="ml__content mt-1 d-flex gap-2">
                                  <h2 class="fs-6">Kuota Terisi :</h2>
                                  <p class="mb-1">{{$data->kuota}}</p>
                                  <img src="{{asset('')}} " alt="">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 col-12 mt-lg-0 mt-4">
                              <div class="m__right">
                                <div class="mr__content d-flex gap-2 mb-2">
                                  <div class="mrc__img mt-1"><img src="{{asset('../img/location-icon.png')}} " alt=""></div>
                                  <div class="mrc__p mt-0">
                                    <div class="skill__option d-flex gap-1 mt-1">
                                      {{$data->lokasi}}
                                    </div>
                                  </div>
                                </div>
                                <div class="mr__content mt-0 d-flex gap-2">
                                  <div class="mrc__img"><img src="{{asset('../img/dollar-icon.png')}} " alt=""></div>
                                  <div class="mrc__p">
                                    <p class="mb-2 mt-1">Rp. {{ number_format($data->gaji, 0,",",".") }}</p>
                                  </div>
                                </div>
                                <div class="mr__content mt-0 d-flex gap-2">
                                  <div class="mrc__img"><img src="{{asset('../img/pengalaman-icon.png')}} " alt=""></div>
                                  <div class="mrc__p">
                                    <p class="mt-1 ">Min {{$data->tahun_pengalaman}} Tahun Pengalaman</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                           </div>
                          </div>
                          <div class="rctr__bottom d-flex gap-3 mt-4">
                            <div class="bottom__left">
                              <a class="btn btn-dl" href="#" role="button">Daftar Lowongan</a>
                            </div>
                            <div class="bottom__right">
                              <a class="btn btn-outline-share d-flex gap-2" href="#" role="button">
                                <div class="br__left">
                                  <img class="w-75" src="../img/share-icon.png" alt="">
                                </div>
                                <p class="mb-0">Bagikan</p>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="bg-dark border-2 border-top border-dark m-0 mt-4">
                      <div class="rc__middle mt-3">
                        <h1>Skills Wajib</h1>
                        <div class="skill__option d-flex gap-3 mt-3">
                          <a class="btn btn-so" href="#" role="button">{{$data->skill_pekerjaan}}</a>
                        </div>
                      </div>
                      <hr class="bg-dark border-2 border-top border-dark m-0 mt-4">
                      <div class="rc__bottom mt-3">
                        <h1>Deskripsi Pekerjaan</h1>
                        <div class="rcb__list">
                          <ul>
                            <li id="desc_kerja">{{$data->deskripsi_pekerjaan}}</li>
                          </ul>
                        </div>
                      </div>
                      <hr class="bg-dark border-2 border-top border-dark m-0 mt-4">
                      <div class="rc__bottom mt-3">
                        <h1>Syarat Pekerjaan {{$data->sales}} (Chemical)</h1>
                        <div class="rcb__list">
                          <ul>
                            <li>{{$data->syarat_pekerjaan}}</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection

@section('custom__script')
<script type="text/javascript">


// $(function() {
//   $.ajax({
//     type    :"GET",
//     url     :"{{env('APP_URL')}}/api/lowongan/id",
//     dataType:"json",
//     data    :{},
//     success: function (data) {
//       $.each(data.data, function(k, v) {
//           $("#par_lowonganDetail").prepend('<div class="right__content" id="daftarLowongan2"><div class="rc__top d-flex gap-3"><div class="rct__left"><img src="{{asset('../img/spero-under.png')}} " alt=""></div><div class="rct__right w-100"><h1 class="mb-1">'+v.level+'</h1><p>'+v.client+'</p><hr class="bg-dark border-2 border-top border-dark m-0"><div class="rctr__middle mt-4 "><div class="row d-flex rctrm"><div class="col-md-6 col-12"><div class="m__left"><div class="ml__content mt-1 d-flex gap-2"><h2 class="fs-6">Client:</h2><p class="mb-1">'+v.client+'</p></div><div class="ml__content mt-1 d-flex gap-2"><h2 class="fs-6">Project:</h2><p class="mb-1">'+v.judul_project+'</p></div><div class="ml__content mt-1 d-flex gap-2"><h2 class="fs-6">Kuota Terisi:</h2><p class="mb-1">'+v.kuota+'</p><img src="{{asset('')}} " alt=""></div></div></div><div class="col-md-6 col-12 mt-lg-0 mt-4"><div class="m__right"><div class="mr__content d-flex gap-2 mb-2"><div class="mrc__img mt-1"><img src="{{asset('../img/location-icon.png')}} " alt=""></div><div class="mrc__p mt-0"><div class="skill__option d-flex gap-1 mt-0"><a class="btn btn-so" href="#" role="button">Depok</a><a class="btn btn-so" href="#" role="button">Jakarta</a><a class="btn btn-so" href="#" role="button">Bandung</a></div></div></div><div class="mr__content mt-0 d-flex gap-2"><div class="mrc__img"><img src="{{asset('../img/dollar-icon.png')}} " alt=""></div><div class="mrc__p"><p class="mb-2 mt-1">'+v.gaji+'</p></div></div><div class="mr__content mt-0 d-flex gap-2"><div class="mrc__img"><img src="{{asset('../img/pengalaman-icon.png')}} " alt=""></div><div class="mrc__p"><p class="mb-n1 mt-1">'+v.tahun_pengalaman+'</p></div></div></div></div></div></div><div class="rctr__bottom d-flex gap-3 mt-4"><div class="bottom__left"><a class="btn btn-dl" href="#" role="button">Daftar Lowongan</a></div><div class="bottom__right"><a class="btn btn-outline-share d-flex gap-2" href="#" role="button"><div class="br__left"><img class="w-75" src="../img/share-icon.png" alt=""></div><p class="mb-0">Bagikan</p></a></div></div></div></div><hr class="bg-dark border-2 border-top border-dark m-0 mt-4"><div class="rc__middle mt-3"><h1>Skills Wajib</h1><div class="skill__option d-flex gap-3 mt-3"><a class="btn btn-so" href="#" role="button">Penjualan</a><a class="btn btn-so" href="#" role="button">Chemical Production</a><a class="btn btn-so" href="#" role="button">Sales</a><a class="btn btn-so" href="#" role="button">Account Manager</a><a class="btn btn-so" href="#" role="button">Sales Marketing</a></div></div><hr class="bg-dark border-2 border-top border-dark m-0 mt-4"><div class="rc__bottom mt-3"><h1>'+v.level+'</h1><div class="rcb__list"><ul><li>'+v.deskripsi_pekerjaan+'</li></ul></div></div><hr class="bg-dark border-2 border-top border-dark m-0 mt-4"><div class="rc__bottom mt-3"><h1>Syarat Pekerjaan Sales(Chemical)</h1><div class="rcb__list"><ul><li>'+v.syarat_pekerjaan+'</li></ul></div></div></div>');
//         });
//         console.log(data);
//     }
//     })
// });
</script>
@endsection