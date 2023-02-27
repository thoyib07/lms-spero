@extends('layout.main')
{{-- <style>
    .form-section{
        display: none;
    }
    .form-section .current{
        display: inline;
    }
</style> --}}



@section('container')
<link rel="stylesheet" href=" {{ asset('../css/exam.css')}}">
<link rel="stylesheet" href=" {{ asset('../js/exam.js')}}">

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
                    <button class="btn btn-next" id="previous" type="button">
                        <div class="bn__isi d-flex gap-2">
                            <img class="rotasigambar" src="{{asset('../img/play-icon.png')}} " alt="">
                            <p class="mb-0">Kembali</p>
                        </div>
                    </button>
                    <button  class="btn btn-next next" id="next" type="button">
                        <div class="bn__isi d-flex gap-2">
                            <img src="{{ asset('../img/play-icon.png')}}" alt="">
                            <p class="mb-0">Selanjutnya</p>
                        </div>
                    </button>
                    <button class="btn btn-next" id="submit">
                        <div class="bn__isi d-flex gap-2">
                            <img src="{{ asset('../img/play-icon.png')}}" alt="">
                            <p class="mb-0">Selesai</p>
                        </div>
                    </button> 
                </div>
                <div class="col-md-12 title mt-3">
                    <h3 id="pgggg">Soal Pilihan Ganda</h3>
                </div>
                @foreach ($PostTest as $item)
                    <div class="row parent_exam" id="parent_exam">
                                <div class="col-md-12 mt-5">
                                    <div class="pg__question d-flex gap-4">
                                        <h4 class="mt-1">{{$item->id}}. </h4>
                                        <p class="mb-1">{{$item->soal}}</p>
                                    </div>
                                </div>
                                <div class="col-md-12 px-lg-5 px-2">
                                    <div class="form-check">
                                        <form id="form1" name="form1" method="post" action="">
                                            <ol start="1" type="1">
                                                <ul start="1" type="a" style="list-style: none">
                                                    <i>
                                                        <li><input type="radio" name="NO1" id="a">A. {{$item->jawaban_a}}</li>
                                                        <li><input type="radio" name="NO1" id="b">B. {{$item->jawaban_b}}</li>
                                                        <li><input type="radio" name="NO1" id="c">C. {{$item->jawaban_c}}</li>
                                                        <li><input type="radio" name="NO1" id="d">D. {{$item->jawaban_d}}</li>
                                                    </i>  
                                                </ul>
                                        </form>
                                </div>
                    </div>
                @endforeach
                
                {{-- <img src="{{ asset('../img/login-icon-2.png')}}" class="icon__exam d-none d-sm-block" alt=""> --}}

                {{-- <div class="col-md-12">
                    <div class="row d-flex">
                      @foreach ($PostTest as $item)
                        <div class="col-md-8">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-{{ $item->id }}" role="tabpanel" aria-labelledby="pills-{{ $item->id }}-tab">
                                  <div class="row parent_exam" id="parent_exam">
                                    <div class="col-md-12 mt-5">
                                        <div class="pg__question d-flex gap-4">
                                            <h4 class="mt-1">{{$item->id}}. </h4>
                                            <p class="mb-1">{{$item->soal}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 px-lg-5 px-2">
                                        <div class="form-check">
                                            <form id="form1" name="form1" method="post" action="">
                                                <ol start="1" type="1">
                                                    <br>
                                                    <ul start="1" type="a" style="list-style: none">
                                                        <i>
                                                            <li><input type="radio" name="NO1" id="a">A. {{$item->jawaban_a}}</li>
                                                            <li><input type="radio" name="NO1" id="b">B. {{$item->jawaban_b}}</li>
                                                            <li><input type="radio" name="NO1" id="c">C. {{$item->jawaban_c}}</li>
                                                            <li><input type="radio" name="NO1" id="d">D. {{$item->jawaban_d}}</li>
                                                        </i>  
                                                    </ul>
                                                    <br>
                                            </form>
                                    </div>
                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 outer">
                            <div class="inner"></div>
                        </div>
                      @endforeach
                      @foreach ($PostTest as $item)
                        <div class="col-md-3">
                            <ul class="nav nav-pills mb-3 mt-5" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link daylist active" id="pills-{{ $item->id }}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{ $item->id }}" type="button" role="tab" aria-controls="pills-{{ $item->id }}" aria-selected="true">{{ $item->id }}</button>
                                </li>
                            </ul>
                        </div>
                      @endforeach
                    </div>
                </div> --}}
                
            </div>
        </div>
    </section>
    

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js">

      $(document).ready(function(){
        $('#previous').click(function(){
          $('#pgggg').hide();
        });
        $('#next').click(function(){
          $('#pgggg').show();
        });
      })

      // $('body').on('click', 'button#next', function(){ 
      //   var visisbleContainer = $('div[id^=parent_exam]:visible');
      //   visisbleContainer.next().show();
      //   visisbleContainer.hide(); 
      // });

// $(document).ready(function(){
//     $(".parent_exam").each(function(e) {
//         if (e != 0)
//             $(this).hide();
//     });

//     $("#next").click(function(){
//         if ($(".parent_exam:visible").next().length != 0)
//             $(".parent_exam:visible").next().show().prev().hide();
//         else {
//             $(".parent_exam:visible").hide();
//             $(".parent_exam:first").show();
//         }
//         return false;
//     });

//     $("#previous").click(function(){
//         if ($(".parent_exam:visible").prev().length != 0)
//             $(".parent_exam:visible").prev().show().next().hide();
//         else {
//             $(".parent_exam:visible").hide();
//             $(".parent_exam:last").show();
//         }
//         return false;
//     });
// });

// $('.parent_exam').hide();
// $(document).on('click','.next', function(e){
//    e.preventDefault();
//    $(this).next('.parent_exam');
// });

// var x = document.getElementsByClassName("parent_exam");
//   x[n].style.display = "block";
//   // ... and fix the Previous/Next buttons:
//   if (n == 0) {
//     document.getElementById("previous").style.display = "none";
//   } else {
//     document.getElementById("previous").style.display = "inline";
//   }
//   if (n == (x.length - 1)) {
//     document.getElementById("submit").innerHTML = "Submit";
//   } else {
//     document.getElementById("next").innerHTML = "Next";
//   }
//   // ... and run a function that displays the correct step indicator:
//   fixStepIndicator(n)

//   function nextPrev(n) {
//   // This function will figure out which tab to display
//   var x = document.getElementsByClassName("parent_exam");
//   // Exit the function if any field in the current tab is invalid:
//   if (n == 1 && !validateForm()) return false;
//   // Hide the current tab:
//   x[currentTab].style.display = "none";
//   // Increase or decrease the current tab by 1:
//   currentTab = currentTab + n;
//   // if you have reached the end of the form... :
//   if (currentTab >= x.length) {
//     //...the form gets submitted:
//     document.getElementById("submit").submit();
//     return false;
//   }
//   // Otherwise, display the correct tab:
//   showTab(currentTab);
// }

// function validateForm() {
//   // This function deals with validation of the form fields
//   var x, y, i, valid = true;
//   x = document.getElementsByClassName("parent_exam");
//   y = x[currentTab].getElementsByTagName("li");
//   // A loop that checks every input field in the current tab:
//   for (i = 0; i < y.length; i++) {
//     // If a field is empty...
//     if (y[i].value == "") {
//       // add an "invalid" class to the field:
//       y[i].className += " invalid";
//       // and set the current valid status to false:
//       valid = false;
//     }
//   }
//   // If the valid status is true, mark the step as finished and valid:
//   if (valid) {
//     document.getElementsByClassName("step")[currentTab].className += " finish";
//   }
//   return valid; // return the valid status
// }

// function fixStepIndicator(n) {
//   // This function removes the "active" class of all steps...
//   var i, x = document.getElementsByClassName("step");
//   for (i = 0; i < x.length; i++) {
//     x[i].className = x[i].className.replace(" active", "");
//   }
//   //... and adds the "active" class to the current step:
//   x[n].className += " active";
// }






        // var currentTab = 0; // Current tab is set to be the first tab (0)
        // showTab(currentTab); // Display the current tab

        // function showTab(n) {
        //   // This function will display the specified tab of the form ...
        //   var x = document.getElementsByClassName("tab");
        //   x[n].style.display = "block";
        //   // ... and fix the Previous/Next buttons:
        //   if (n == 0) {
        //     document.getElementById("previous").style.display = "none";
        //   } else {
        //     document.getElementById("previous").style.display = "inline";
        //   }
        //   if (n == (x.length - 1)) {
        //     document.getElementById("submit").innerHTML = "Submit";
        //   } else {
        //     document.getElementById("next").innerHTML = "Next";
        //   }
        //   // ... and run a function that displays the correct step indicator:
        //   fixStepIndicator(n)
        // }





        // $(function(){
        //     var $sections=$('#parent_exam');
    
        //     function navigateTo(index){
        //         $sections.removeClass('current').eq(index).addClass('current');
    
        //         $('#previous').toggle(index>0);
        //         var atTheEnd = index >= $sections.length - 1;
    
        //         $('#next').toggle(!atTheEnd);    
        //         $('.form-navigation [type=submit]').toggle(atTheEnd);    
        //     }
    
        //     function curindex(){
        //         return $sections.index($sections.filter('.current'));
        //     }
    
        //     $('#previous').click(function(){
        //         navigateTo(curindex()-1);
        //     });
    
        //     $('#next').click(function(){
        //         $('.form-section').parsley().whenValidate({
        //             group:'block-'+curindex()
        //         }).done(function(){
        //             navigateTo(curindex()+1);
        //         });
        //     });
    
        //     $sections.each(function(index,section){
        //         $(section).find(':input').attr('data-parsley-group', 'block-'+index);
        //     });        
    
        //     navigateTo(0);
        // })
    </script>
@endsection
