@extends('layout.main')



@section('container')
<link rel="stylesheet" href=" {{ asset('../css/dashboard_1.css')}}">
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
              <button class="btn btn-outline-none btn-search" type="submit"><img src="../img/search-icon.png" alt=""></button>
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


    {{-- <section id="dashboard__content"> --}}
        <div class="container">
            <div class="row">
                <div class="col-md-8 top mt-5">
                 <h2 class="mb-4">Pengumuman</h2>
                    <div class="pengumuman__content mt-2">
                            <div class="pc__content mt-2">
                                <h4>Pembalajaran Semester Genap 2022/2023</h4>
                                <div class="pcc__c">
                                    <div class="c-left">
                                        <p>Pembelajaran Semester Genap 2022/2023 Akan Berjalan Pada 8 Agustus</p>
                                    </div>
                                    <div class="c-right">
                                        <p>25 Juni 2022</p>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <ul class="nav nav-pills mb-3 mt-5" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link daylist active" id="pills-senin-tab" data-bs-toggle="pill" data-bs-target="#pills-senin" type="button" role="tab" aria-controls="pills-senin" aria-selected="true">Senin</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link daylist" id="pills-selasa-tab" data-bs-toggle="pill" data-bs-target="#pills-selasa" type="button" role="tab" aria-controls="pills-selasa" aria-selected="false">Selasa</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link daylist" id="pills-rabu-tab" data-bs-toggle="pill" data-bs-target="#pills-rabu" type="button" role="tab" aria-controls="pills-rabu" aria-selected="false">Rabu</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link daylist" id="pills-kamis-tab" data-bs-toggle="pill" data-bs-target="#pills-kamis" type="button" role="tab" aria-controls="pills-kamis" aria-selected="false">Kamis</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link daylist" id="pills-jumat-tab" data-bs-toggle="pill" data-bs-target="#pills-jumat" type="button" role="tab" aria-controls="pills-jumat" aria-selected="false">Jumat</button>
                        </li>
                      </ul>
                      <hr class="bg-dark border-2 border-top border-dark">

                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-senin" role="tabpanel" aria-labelledby="pills-senin-tab">
                            <div class="row d-flex tc__mapel">
                                    <div class="col-md-4 mt-3 col-10">
                                        <a href="dashboard_1-2.html">
                                          <div class="tc__content ">
                                            <div class="tcc__top d-flex gap-3">
                                             <div class="tcc__left"><img src="{{asset('../img/matematica-icon.png')}} " alt=""></div>
                                             <div class="tcc__right">
                                                 <h3>Matematika</h3>
                                                 <p>07:00 - 08.40 WIB</p>
                                             </div>
                                            </div>
                                             <div class="tcc__bottom">
                                                 <div class="tccb__content gap-2 ">
                                                   <div class="tccbl__left"><img src="{{asset('../img/book-icon.png')}} " alt="" style="width: 1.5rem;">
                                                   </div>
                                                   <div class="tccbl__right">
                                                         <p >15</p>
                                                   </div>
                                                 </div>
                                                 <div class="tccb__content gap-2">
                                                     <div class="tccbl__left"><img src="{{asset('../img/check-icon.png')}} " alt="" style="width: 1.25rem;">
                                                     </div>
                                                     <div class="tccbl__right">
                                                           <p >10</p>
                                                     </div>
                                                 </div>
                                                 <div class="tccb__content gap-2" id="tccb__last">
                                                     <div class="tccbl__left"><img src="{{asset('../img/people-icon.png')}} " alt="" style="width: 1.25rem;">
                                                     </div>
                                                     <div class="tccbl__right">
                                                           <p >35</p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mt-3 col-10">
                                       <a href="">
                                        <div class="tc__content" style="background-color: #FF5057;">
                                          <div class="tcc__top d-flex gap-3">
                                           <div class="tcc__left"><img src="{{asset('../img/senibudaya-icon.png')}} " alt=""></div>
                                           <div class="tcc__right">
                                               <h3>Seni Budaya</h3>
                                               <p>07:00 - 08.40 WIB</p>
                                           </div>
                                          </div>
                                           <div class="tcc__bottom">
                                               <div class="tccb__content gap-2 ">
                                                 <div class="tccbl__left"><img src="{{asset('../img/book-icon.png')}}" alt="" style="width: 1.5rem;">
                                                 </div>
                                                 <div class="tccbl__right">
                                                       <p >15</p>
                                                 </div>
                                               </div>
                                               <div class="tccb__content gap-2">
                                                   <div class="tccbl__left"><img src="{{asset('../img/check-icon.png')}} " alt="" style="width: 1.25rem;">
                                                   </div>
                                                   <div class="tccbl__right">
                                                         <p >10</p>
                                                   </div>
                                               </div>
                                               <div class="tccb__content gap-2" id="tccb__last">
                                                   <div class="tccbl__left"><img src="{{asset('../img/people-icon.png')}} " alt="" style="width: 1.25rem;">
                                                   </div>
                                                   <div class="tccbl__right">
                                                         <p >35</p>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       </a>
                                    </div>
                                    <div class="col-md-4 mt-3 col-10">
                                        <a href="">
                                          <div class="tc__content" style="background-color: #F0AE00;">
                                            <div class="tcc__top d-flex gap-3">
                                             <div class="tcc__left"><img src="{{asset('../img/kimia-icon.png')}} " alt=""></div>
                                             <div class="tcc__right">
                                                 <h3>Kimia</h3>
                                                 <p>07:00 - 08.40 WIB</p>
                                             </div>
                                            </div>
                                             <div class="tcc__bottom">
                                                 <div class="tccb__content gap-2 ">
                                                   <div class="tccbl__left"><img src="{{asset('../img/book-icon.png')}} " alt="" style="width: 1.5rem;">
                                                   </div>
                                                   <div class="tccbl__right">
                                                         <p >15</p>
                                                   </div>
                                                 </div>
                                                 <div class="tccb__content gap-2">
                                                     <div class="tccbl__left"><img src="{{asset('../img/check-icon.png')}} " alt="" style="width: 1.25rem;">
                                                     </div>
                                                     <div class="tccbl__right">
                                                           <p >10</p>
                                                     </div>
                                                 </div>
                                                 <div class="tccb__content gap-2" id="tccb__last">
                                                     <div class="tccbl__left"><img src="{{asset('../img/people-icon.png')}} " alt="" style="width: 1.25rem;">
                                                     </div>
                                                     <div class="tccbl__right">
                                                           <p >35</p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mt-3 col-10">
                                        <a href="">
                                          <div class="tc__content" style="background-color: #01EEC3;">
                                            <div class="tcc__top d-flex gap-3">
                                             <div class="tcc__left"><img src="{{asset('')}} ../img/matematica-icon.png" alt=""></div>
                                             <div class="tcc__right">
                                                 <h3>Matematika</h3>
                                                 <p>07:00 - 08.40 WIB</p>
                                             </div>
                                            </div>
                                             <div class="tcc__bottom">
                                                 <div class="tccb__content gap-2 ">
                                                   <div class="tccbl__left"><img src="{{asset('../img/book-icon.png')}} " alt="" style="width: 1.5rem;">
                                                   </div>
                                                   <div class="tccbl__right">
                                                         <p >15</p>
                                                   </div>
                                                 </div>
                                                 <div class="tccb__content gap-2">
                                                     <div class="tccbl__left"><img src="{{asset('../img/check-icon.png')}} " alt="" style="width: 1.25rem;">
                                                     </div>
                                                     <div class="tccbl__right">
                                                           <p >10</p>
                                                     </div>
                                                 </div>
                                                 <div class="tccb__content gap-2" id="tccb__last">
                                                     <div class="tccbl__left"><img src="{{asset('../img/people-icon.png')}} " alt="" style="width: 1.25rem;">
                                                     </div>
                                                     <div class="tccbl__right">
                                                           <p >35</p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mt-3 col-10">
                                       <a href="">
                                        <div class="tc__content" style="background-color: #FF8F50;">
                                          <div class="tcc__top d-flex gap-3">
                                           <div class="tcc__left"><img src="{{asset('../img/senibudaya-icon.png')}} " alt=""></div>
                                           <div class="tcc__right">
                                               <h3>Seni Budaya</h3>
                                               <p>07:00 - 08.40 WIB</p>
                                           </div>
                                          </div>
                                           <div class="tcc__bottom">
                                               <div class="tccb__content gap-2 ">
                                                 <div class="tccbl__left"><img src="{{asset('../img/book-icon.png')}} " alt="" style="width: 1.5rem;">
                                                 </div>
                                                 <div class="tccbl__right">
                                                       <p >15</p>
                                                 </div>
                                               </div>
                                               <div class="tccb__content gap-2">
                                                   <div class="tccbl__left"><img src="{{asset('../img/check-icon.png')}} " alt="" style="width: 1.25rem;">
                                                   </div>
                                                   <div class="tccbl__right">
                                                         <p >10</p>
                                                   </div>
                                               </div>
                                               <div class="tccb__content gap-2" id="tccb__last">
                                                   <div class="tccbl__left"><img src="{{asset('../img/people-icon.png')}} " alt="" style="width: 1.25rem;">
                                                   </div>
                                                   <div class="tccbl__right">
                                                         <p >35</p>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       </a>
                                    </div>
                                    <div class="col-md-4 mt-3 col-10">
                                        <a href="">
                                          <div class="tc__content" style="background-color: #8600F0;">
                                            <div class="tcc__top d-flex gap-3">
                                             <div class="tcc__left"><img src="{{asset('../img/kimia-icon.png')}} " alt=""></div>
                                             <div class="tcc__right">
                                                 <h3>Kimia</h3>
                                                 <p>07:00 - 08.40 WIB</p>
                                             </div>
                                            </div>
                                             <div class="tcc__bottom">
                                                 <div class="tccb__content gap-2 ">
                                                   <div class="tccbl__left"><img src="{{asset('../img/book-icon.png')}} " alt="" style="width: 1.5rem;">
                                                   </div>
                                                   <div class="tccbl__right">
                                                         <p >15</p>
                                                   </div>
                                                 </div>
                                                 <div class="tccb__content gap-2">
                                                     <div class="tccbl__left"><img src="{{asset('../img/check-icon.png')}} " alt="" style="width: 1.25rem;">
                                                     </div>
                                                     <div class="tccbl__right">
                                                           <p >10</p>
                                                     </div>
                                                 </div>
                                                 <div class="tccb__content gap-2" id="tccb__last">
                                                     <div class="tccbl__left"><img src="{{asset('../img/people-icon.png')}} " alt="" style="width: 1.25rem;">
                                                     </div>
                                                     <div class="tccbl__right">
                                                           <p >35</p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mt-3 col-10">
                                        <a href="">
                                          <div class="tc__content" style="background-color: #5FA900;">
                                            <div class="tcc__top d-flex gap-3">
                                             <div class="tcc__left"><img src="{{asset('../img/matematica-icon.png')}} " alt=""></div>
                                             <div class="tcc__right">
                                                 <h3>Matematika</h3>
                                                 <p>07:00 - 08.40 WIB</p>
                                             </div>
                                            </div>
                                             <div class="tcc__bottom">
                                                 <div class="tccb__content gap-2 ">
                                                   <div class="tccbl__left"><img src="{{asset('../img/book-icon.png')}}" alt="" style="width: 1.5rem;">
                                                   </div>
                                                   <div class="tccbl__right">
                                                         <p >15</p>
                                                   </div>
                                                 </div>
                                                 <div class="tccb__content gap-2">
                                                     <div class="tccbl__left"><img src="{{asset('../img/check-icon.png')}} " alt="" style="width: 1.25rem;">
                                                     </div>
                                                     <div class="tccbl__right">
                                                           <p >10</p>
                                                     </div>
                                                 </div>
                                                 <div class="tccb__content gap-2" id="tccb__last">
                                                     <div class="tccbl__left"><img src="{{asset('../img/people-icon.png')}} " alt="" style="width: 1.25rem;">
                                                     </div>
                                                     <div class="tccbl__right">
                                                           <p >35</p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mt-3 col-10">
                                        <a href="">
                                          <div class="tc__content" style="background-color: #BDB600;">
                                            <div class="tcc__top d-flex gap-3">
                                             <div class="tcc__left"><img src="{{asset('../img/senibudaya-icon.png')}} " alt=""></div>
                                             <div class="tcc__right">
                                                 <h3>Seni Budaya</h3>
                                                 <p>07:00 - 08.40 WIB</p>
                                             </div>
                                            </div>
                                             <div class="tcc__bottom">
                                                 <div class="tccb__content gap-2 ">
                                                   <div class="tccbl__left"><img src="{{asset('../img/book-icon.png')}} " alt="" style="width: 1.5rem;">
                                                   </div>
                                                   <div class="tccbl__right">
                                                         <p >15</p>
                                                   </div>
                                                 </div>
                                                 <div class="tccb__content gap-2">
                                                     <div class="tccbl__left"><img src="{{asset('../img/check-icon.png')}} " alt="" style="width: 1.25rem;">
                                                     </div>
                                                     <div class="tccbl__right">
                                                           <p >10</p>
                                                     </div>
                                                 </div>
                                                 <div class="tccb__content gap-2" id="tccb__last">
                                                     <div class="tccbl__left"><img src="{{asset('../img/people-icon.png')}} " alt="" style="width: 1.25rem;">
                                                     </div>
                                                     <div class="tccbl__right">
                                                           <p >35</p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mt-3 col-10">
                                       <a href="">
                                        <div class="tc__content" style="background-color: #777570;">
                                          <div class="tcc__top d-flex gap-3">
                                           <div class="tcc__left"><img src="{{asset('../img/kimia-icon.png')}} " alt=""></div>
                                           <div class="tcc__right">
                                               <h3>Kimia</h3>
                                               <p>07:00 - 08.40 WIB</p>
                                           </div>
                                          </div>
                                           <div class="tcc__bottom">
                                               <div class="tccb__content gap-2 ">
                                                 <div class="tccbl__left"><img src="{{asset('../img/book-icon.png')}} " alt="" style="width: 1.5rem;">
                                                 </div>
                                                 <div class="tccbl__right">
                                                       <p >15</p>
                                                 </div>
                                               </div>
                                               <div class="tccb__content gap-2">
                                                   <div class="tccbl__left"><img src="{{asset('../img/check-icon.png')}} " alt="" style="width: 1.25rem;">
                                                   </div>
                                                   <div class="tccbl__right">
                                                         <p >10</p>
                                                   </div>
                                               </div>
                                               <div class="tccb__content gap-2" id="tccb__last">
                                                   <div class="tccbl__left"><img src="{{asset('../img/people-icon.png')}} " alt="" style="width: 1.25rem;">
                                                   </div>
                                                   <div class="tccbl__right">
                                                         <p >35</p>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       </a>
                                    </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="pills-selasa" role="tabpanel" aria-labelledby="pills-selasa-tab">SELASA</div>
                        <div class="tab-pane fade" id="pills-rabu" role="tabpanel" aria-labelledby="pills-rabu-tab">RABU</div>
                        <div class="tab-pane fade" id="pills-kamis" role="tabpanel" aria-labelledby="pills-kamis-tab">KAMIS</div>
                        <div class="tab-pane fade" id="pills-jumat" role="tabpanel" aria-labelledby="pills-jumat-tab">JUMAT</div>
                      </div>
                </div>






                <div class="col-md-4 mt-5">
                    <div class="right__top d-flex">
                        <div class="rt__left"><h2>Tugas</h2></div>
                        <div class="rt__right"><h1>13:48 WIB</h1></div>
                    </div>
                    <div class="right__bottom p-4">
                        <h2>Tugas Senin</h2>
                        <hr class="bg-dark border-2 border-top border-dark">
                        <div class="rb__belum px-4 py-2">
                            <h2 class="mb-4">Belum</h2>
                            <div class="rbb__content gap-3">
                                <div class="rbbc__left">
                                    <img src="{{asset('../img/cek-blue.png')}} " alt="">
                                </div>
                                <div class="rbbc__right">
                                    <h1>Matematika</h1>
                                    <div class="rbbcr gap-2">
                                        <div class="rbbcr__left">
                                            <p>Aljabar</p>
                                        </div>
                                        <div class="vr mt-1" style="border-left: 2px solid #000; height: 1rem;"></div>
                                        <div class="rbbcr__right">
                                            <p>9 Des - 12 Des</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rbb__content gap-3">
                                <div class="rbbc__left">
                                    <img src="{{asset('../img/cek-pink.png')}}" alt="">
                                </div>
                                <div class="rbbc__right">
                                    <h1>Seni Budaya</h1>
                                    <div class="rbbcr gap-2">
                                        <div class="rbbcr__left">
                                            <p>Seni Budaya</p>
                                        </div>
                                        <div class="vr mt-1" style="border-left: 2px solid #000; height: 1rem;"></div>
                                        <div class="rbbcr__right">
                                            <p>9 Des - 12 Des</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rbb__content gap-3">
                                <div class="rbbc__left">
                                    <img src="{{asset('../img/cek-yellow.png')}} " alt="">
                                </div>
                                <div class="rbbc__right">
                                    <h1>Kimia</h1>
                                    <div class="rbbcr gap-2">
                                        <div class="rbbcr__left">
                                            <p>Teori Atom</p>
                                        </div>
                                        <div class="vr mt-1" style="border-left: 2px solid #000; height: 1rem;"></div>
                                        <div class="rbbcr__right">
                                            <p>9 Des - 12 Des</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="bg-dark border-2 border-top border-dark">
                        <div class="rb__belum px-4 py-2">
                            <h2 class="mb-4">Sudah</h2>
                            <div class="rbb__content gap-3">
                                <div class="rbbc__left">
                                    <img src="{{asset('../img/cek-blue.png')}} " alt="">
                                </div>
                                <div class="rbbc__right">
                                    <h1>Matematika</h1>
                                    <div class="rbbcr gap-2">
                                        <div class="rbbcr__left">
                                            <p>Aljabar</p>
                                        </div>
                                        <div class="vr mt-1" style="border-left: 2px solid #000; height: 1rem;"></div>
                                        <div class="rbbcr__right">
                                            <p>9 Des - 12 Des</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rbb__content gap-3">
                                <div class="rbbc__left">
                                    <img src="{{asset('../img/cek-pink.png')}} " alt="">
                                </div>
                                <div class="rbbc__right">
                                    <h1>Seni Budaya</h1>
                                    <div class="rbbcr gap-2">
                                        <div class="rbbcr__left">
                                            <p>Seni Budaya</p>
                                        </div>
                                        <div class="vr mt-1" style="border-left: 2px solid #000; height: 1rem;"></div>
                                        <div class="rbbcr__right">
                                            <p>9 Des - 12 Des</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rbb__content gap-3">
                                <div class="rbbc__left">
                                    <img src="{{asset('../img/cek-yellow.png')}} " alt="">
                                </div>
                                <div class="rbbc__right">
                                    <h1>Kimia</h1>
                                    <div class="rbbcr gap-2">
                                        <div class="rbbcr__left">
                                            <p>Teori Atom</p>
                                        </div>
                                        <div class="vr mt-1" style="border-left: 2px solid #000; height: 1rem;"></div>
                                        <div class="rbbcr__right">
                                            <p>9 Des - 12 Des</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rb__img mt-5">
                           <center>
                            <img src="{{asset('../img/dashboard-icon.png')}} " alt="">
                           </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- </section> --}}
@endsection