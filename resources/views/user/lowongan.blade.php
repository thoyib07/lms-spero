@extends('layout.main')



@section('container')
<link rel="stylesheet" href=" {{ asset('../css/lowongan.css')}}">
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

    <!-- DASHBOARD -->
    <section id="dashboard__content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 top mt-5">
                 <h2 class="mb-4">Pengumuman</h2>
                    <div class="pengumuman__content mt-2">
                        <div class="pc__content mt-2" id="place__notifikasi">
                          {{-- @foreach ($Notifikasi as $item)
                            <h4>{{$item->judul_notifikasi}}</h4> 
                            <div class="pcc__c"> 
                              <div class="c-left"> 
                                <p>{{$item->keterangan}}</p>
                              </div>
                              <div class="c-right"> 
                                <p>{{$item->tanggal}}</p>
                              </div>
                            </div>
                          @endforeach --}}
                        
                        
                        </div>
                    </div>

                    <ul class="nav nav-pills mb-3 mt-5" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link daylist active" id="pills-materiSales-tab" data-bs-toggle="pill" data-bs-target="#pills-materiSales" type="button" role="tab" aria-controls="pills-materiSales" aria-selected="true">Materi Sales</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link daylist" id="pills-materiTeamLeader-tab" data-bs-toggle="pill" data-bs-target="#pills-materiTeamLeader" type="button" role="tab" aria-controls="pills-materiTeamLeader" aria-selected="false">Materi Team Leader</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link daylist" id="pills-materiAreaKoordinator-tab" data-bs-toggle="pill" data-bs-target="#pills-materiAreaKoordinator" type="button" role="tab" aria-controls="pills-materiAreaKoordinator" aria-selected="false">Materi Area Koordinator</button>
                        </li>
                      </ul>
                      <hr class="bg-dark border-2 border-top border-dark">

                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-materiSales" role="tabpanel" aria-labelledby="pills-materiSales-tab">
                          <div class="row d-flex tc__mapel" >
                            <div class="col-md-4 mt-3 col-10" id="mapel">
                              @foreach ($Materi  as $item)
                                <a href="/lowonganHomeExam">
                                  <div class="tc__content ">
                                    <div class="tcc__top d-flex gap-3">
                                    <div class="tcc__left"><img src="{{ asset('../img/matematica-icon.png')}}  " alt=""></div>
                                    <div class="tcc__right">
                                        <h3>{{$item->judul_materi}}</h3>
                                        <p>07:00 - 08.40 WIB</p>
                                    </div>
                                    </div>
                                    <div class="tcc__bottom">
                                        <div class="tccb__content gap-2 ">
                                          <div class="tccbl__left"><img src="{{ asset('../img/book-icon.png')}}  " alt="" style="width: 1.5rem;">
                                          </div>
                                          <div class="tccbl__right">
                                                <p >15</p>
                                          </div>
                                        </div>
                                        <div class="tccb__content gap-2">
                                            <div class="tccbl__left"><img src="{{ asset('../img/check-icon.png')}}  " alt="" style="width: 1.25rem;">
                                            </div>
                                            <div class="tccbl__right">
                                                  <p >10</p>
                                            </div>
                                        </div>
                                        <div class="tccb__content gap-2" id="tccb__last">
                                            <div class="tccbl__left"><img src="{{ asset('../img/people-icon.png')}}  " alt="" style="width: 1.25rem;">
                                            </div>
                                            <div class="tccbl__right">
                                                  <p >35</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                              @endforeach
                            </div>
                    </div>
                        </div>
                        <div class="tab-pane fade" id="pills-materiTeamLeader" role="tabpanel" aria-labelledby="pills-materiTeamLeader-tab">SELASA</div>
                        <div class="tab-pane fade" id="pills-materiAreaKoordinator" role="tabpanel" aria-labelledby="pills-materiAreaKoordinator-tab">RABU</div>
                      </div>
                </div>

                <div class="col-md-4 mt-5">
                    <div class="right__top d-flex">
                        <div class="rt__left"><h2>Tugas</h2></div>
                        <div class="rt__right"><h1>13:48 WIB</h1></div>
                    </div>
                    <div class="right__bottom p-4">
                        <h2>Informasi</h2>
                        <hr class="bg-dark border-2 border-top border-dark">
                        <div class="rb__belum py-2">
                            <h2 class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, similique incidunt non cupiditate illo tempore perferendis reiciendis repudiandae? Dicta, officia ducimus facilis laborum placeat commodi libero reprehenderit soluta aliquid molestiae saepe fugit consectetur inventore dolores labore. Numquam tempora nesciunt repudiandae magnam nobis vel consequuntur. Quo explicabo suscipit enim ullam eum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, iusto nesciunt a sit mollitia, officia eligendi odit nam numquam adipisci provident ullam. Inventore, rerum itaque?</h2>
                        </div>
                        <center>
                            <img src="{{ asset('../img/Roket-lowongan.png')}} " alt="">
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom__script')
<script type="text/javascript">
$(function() {
  $.ajax({
    type    :"GET",
    url     :"{{env('APP_URL')}}/api/notifikasi",
    dataType:"json",
    data    :{},
    success: function (data) {
      $.each(data.data, function(k, v) {
          $("#place__notifikasi").prepend(' <h4>'+v.judul_notifikasi+'</h4> <div class="pcc__c"> <div class="c-left"> <p>'+v.keterangan+'</p></div><div class="c-right"> <p>'+v.tanggal+'</p></div></div>');
        });
    }
    })
});
</script>
@endsection