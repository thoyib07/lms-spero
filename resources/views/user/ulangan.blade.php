@extends('layout.main')

@section('container')
<link rel="stylesheet" href=" {{ asset('../css/ulangan.css')}}">



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

   
<section id="exam" class="mt-5">
  <div class="container">
    {{ $PostTest->links('user.paginate_exam') }}
    <div class="col-md-12 title mt-3">
      <h3 id="pgggg">Soal Pilihan Ganda</h3>
    </div>
    <div class="mydivs">
     @foreach ($PostTest as $item)
       <div>
         <div class="row parent_exam" id="parent_exam">
           <div class="col-md-12 mt-5">
               <div class="pg__question d-flex gap-4">
                   <h4 class="mt-1">{{$item->id}}. </h4>
                   <p class="mb-1">{{$item->soal}}</p>
               </div>
           </div>
           <div class="col-md-12 px-lg-5 px-2">
              <div class="form-check">
                       <ol start="1" type="1">
                           <ul start="1" type="a" style="list-style: none">
                               <i>
                                   <li><input type="radio" name="pilihan" id="a">A. {{$item->jawaban_a}}</li>
                                   <li><input type="radio" name="pilihan" id="b">B. {{$item->jawaban_b}}</li>
                                   <li><input type="radio" name="pilihan" id="c">C. {{$item->jawaban_c}}</li>
                                   <li><input type="radio" name="pilihan" id="d">D. {{$item->jawaban_d}}</li>
                               </i>  
                           </ul>
                       </ol>
             `</div>
         </div>
       </div>
     @endforeach
    </div>
    
  </div>
</section>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

  <script type="text/javascript">
    
    // $(document).ready(function () {
    //   var divs = $('.mydivs>div');
    //   var now = 0; // currently shown div
    //   divs.hide().first().show();
    //   $("button[name=next]").click(function (e) {
    //       divs.eq(now).hide();
    //       now = (now + 1 < divs.length) ? now + 1 : 0;
    //       divs.eq(now).show(); // show next
    //   });
    //   $("button[name=prev]").click(function (e) {
    //       divs.eq(now).hide();
    //       now = (now > 0) ? now - 1 : divs.length - 1;
    //       divs.eq(now).show(); // or .css('display','block');
    //       //console.log(divs.length, now);
    //   });
    // });

  </script>
@endsection