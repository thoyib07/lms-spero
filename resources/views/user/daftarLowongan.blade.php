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
            <div class="row" id="rowDaftarLowongan">
                <div class="col-md-3 me-lg-5 me-2 left__content">
                    <h2>Filter Pencarianmu</h2>
                    <hr class="bg-dark border-2 border-top border-dark">
                    <div class="print_value mb-4">
                        <p id="value_list">Filter By :</p>
                    </div>
                    <div class="dl__filter" name="searchData" id="searchData">
                        <h3>Level Pekerjaan</h3>
                        <div class="form-check">
                            <input class="checkbox" type="checkbox" value="Sales" id="Sales">
                            <label class="form-check-label" for="Sales"> Sales</label>
                        </div>
                        <div class="form-check">
                            <input class="checkbox" type="checkbox" value="Team_Leader" id="Team_Leader">
                            <label class="form-check-label" for="Team_Leader"> Team Leader</label>
                        </div>
                        <div class="form-check">
                            <input class="checkbox" type="checkbox" value="Area_Koordinator" id="Area_Koordinator">
                            <label class="form-check-label" for="Area_Koordinator"> Area Koordinator</label>
                        </div>
                    </div>
                    <hr class="bg-dark border-2 border-top border-dark">
                    <div class="dl__filter">
                        <h3>Kota</h3>
                        <div class="form-check">
                            <input class="checkbox" type="checkbox" value="depok" id="depok">
                            <label class="form-check-label" for="depok">Depok, Indonesia</label>
                        </div>
                        <div class="form-check">
                            <input class="checkbox" type="checkbox" value="jakarta" id="jakarta">
                            <label class="form-check-label" for="jakarta">Jakarta, Indonesia</label>
                        </div>
                        <div class="form-check">
                            <input class="checkbox" type="checkbox" value="bandung" id="bandung">
                            <label class="form-check-label" for="bandung">Bandung, Indonesia</label>
                        </div>
                        <div class="form-check">
                            <input class="checkbox" type="checkbox" value="surabaya" id="surabaya">
                            <label class="form-check-label" for="surabaya">Surabaya, Indonesia</label>
                        </div>
                        <div class="form-check">
                            <input class="checkbox" type="checkbox" value="tangerang" id="tangerang">
                            <label class="form-check-label" for="tangerang">Tangerang, Indonesia</label>
                        </div>
                    </div>
                    <hr class="bg-dark border-2 border-top border-dark">
                    <div class="dl__filter">
                        <h3>Pengalaman</h3>
                        <div class="form-check">
                            <input class="checkbox" type="checkbox" value="1-3" id="1-3">
                            <label class="form-check-label" for="1-3">1-3 Tahun</label>
                        </div>
                        <div class="form-check">
                            <input class="checkbox" type="checkbox" value="3-5" id="3-5">
                            <label class="form-check-label" for="3-5">3-5 Tahun</label>
                        </div>
                        <div class="form-check">
                            <input class="checkbox" type="checkbox" value="5-10" id="5-10">
                            <label class="form-check-label" for="5-10">5-10 Tahun</label>
                        </div>
                        <div class="form-check">
                            <input class="checkbox" type="checkbox" value="lebih10" id="lebih10">
                            <label class="form-check-label" for="lebih10">Lebih Dari 10 Tahun</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-sm-0 mt-5">
                    <div class="row d-flex" id="par_daftarLowongan">
                        @foreach ($Lowongan as $item)
                        <a class="col-md-6 mt-3 " href=" {{ route('detailLowongan', $item->id) }}">
                            <div class="dl__content" id="daftarLowongan">
                                <div class="top__content d-flex align-items-center">
                                    <div class="tc__left">
                                        <img src="{{asset('../img/spero-under.png')}}" alt="">
                                    </div>
                                    <div class="tc__right mb-0">
                                        <h4>{{$item->level}}</h4>
                                        <p class="md">{{$item->client}}</p>
                                    </div>
                                </div>
                                <hr class="bg-dark border-2 border-top border-dark">
                                <div class="bottom__content">
                                    <div class="bc__location d-flex gap-2">
                                        <div class="bcl__left">
                                            <img src="{{asset('../img/location-icon.png')}}" alt="">
                                        </div>
                                        <div class="bcl__right">
                                            <h3 class="mb-0">{{$item->lokasi}}</h3>
                                        </div>
                                    </div>
                                    <div class="bc__gaji d-flex gap-2">
                                        <div class="bcl__left">
                                            <img src="{{asset('../img/dollar-icon.png')}}" alt="">
                                        </div>
                                        <div class="bcl__right">
                                            <h3 class="mb-0" id="gajinya">Rp. {{ number_format($item->gaji, 0,",",".") }}</h3>
                                        </div>
                                    </div>
                                    <div class="bc__pengalaman d-flex gap-2">
                                        <div class="bcl__left">
                                            <img src="{{asset('../img/pengalaman-icon.png')}}" alt="">
                                        </div>
                                        <div class="bcl__right">
                                            <h3 class="mb-0">Min {{$item->tahun_pengalaman}} Tahun Pengalaman</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



@section('custom__script')
    <script type="text/javascript">
    
   

    </script>
@endsection

@section('custom__script__filter')
    <script type="text/javascript" name="Filtering">
       var valueList =  document.getElementById('value_list');
       var text = [];
       var listArray = [];

       var checkBox = document.querySelectorAll('.checkbox');
       console.log(checkBox);

       for(var checkbox of checkBox){
        checkbox.addEventListener('click',function(){
            if(this.checked == true){
                listArray.push(this.value);
                valueList.innerHTML ='Filter By : ' + text + listArray.join(' , ')
            }else{
                //REMOVE VALUE FROM ARRAY 
                listArray = listArray.filter(e => e !== this.value);
                valueList.innerHTML ='Filter By : ' + text + listArray.join(' , ')
            }
        })
       }
    </script>
@endsection