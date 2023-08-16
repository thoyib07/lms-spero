@extends('layout.main')

@section('container')
<link rel="stylesheet" href=" {{ asset('../css/ulangan.css')}}">



<nav style="z-index: 2;" class="navbar navbar-expand-lg navbar-light bg-light position-relative w-100 py-3">
    <div class="container-fluid px-4 px-lg-5">
        <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/spero-logo-removebg-preview-edit.png')}}"
                class="w-75" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle dropdown-materi" href="#" id="navbarDropdownMenuLink"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <button class="btn btn-outline-none btn-search" type="submit"><img
                            src="{{ asset('assets/img/search-icon.png')}}" alt=""></button>
                </form>
            </div>
            <div class="notification d-flex gap-3">
                <button type="button" class="btn btn-notif position-relative">
                    <img class="" src="{{asset('assets/img/lonceng-logo.png')}}  " alt="">
                    <span
                        class="position-absolute top-25 start-75 translate-middle p-2 bg-danger border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                    </span>
                </button>
                <button type="button" class="btn btn-notif position-relative">
                    <img class="" src="{{asset('assets/img/profil-icon.png')}}" alt="">
                    <span
                        class="position-absolute top-25 start-75 translate-middle p-2 bg-danger border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                    </span>
                </button>
            </div>
        </div>
    </div>
</nav>


<section id="exam" class="mt-5">
    <div class="container">
        {{ $materiPostTest->links('user.paginate_exam') }}
        <div class="col-md-12 title mt-3">
            <h3 id="pgggg">Soal Pilihan Ganda</h3>
        </div>
        <div class="mydivs">
            @foreach ($materiPostTest as $item)
            <div>
                <div class="row parent_exam" id="parent_exam">
                    <div class="col-md-12 mt-1">
                        <div class="pg__question d-flex gap-2">
                            <h4>{{ $loop->iteration * $materiPostTest->currentPage() }}.</h4>
                            <p class="mb-1">{{$item->soal}}</p>
                        </div>
                    </div>
                    <div class="col-md-12 px-lg-0 px-2">
                        <div class="form-check ps-0">
                            <ol class="olExam" start="1" type="1">
                                <ul class="ulExam" start="1" type="a"
                                    style="list-style: none; padding: 0 1rem !important;">
                                    <i id="par_pilihan" data-id="{{isset($_GET['page']) ? $_GET['page'] : '1'}}">
                                        <li><input onchange="save_jawaban()" type="radio" name="soal.{{ $loop->iteration * $materiPostTest->currentPage() }}"
                                                value="{{$item->jawaban_a}}" class="me-3">A. {{$item->jawaban_a}}</li>
                                        <li><input onchange="save_jawaban()" type="radio" name="soal.{{ $loop->iteration * $materiPostTest->currentPage() }}"
                                                value="{{$item->jawaban_b}}" class="me-3">B. {{$item->jawaban_b}}</li>
                                        <li><input onchange="save_jawaban()" type="radio" name="soal.{{ $loop->iteration * $materiPostTest->currentPage() }}"
                                                value="{{$item->jawaban_c}}" class="me-3">C. {{$item->jawaban_c}}</li>
                                        <li><input onchange="save_jawaban()" type="radio" name="soal.{{ $loop->iteration * $materiPostTest->currentPage() }}"
                                                value="{{$item->jawaban_d}}" class="me-3">D. {{$item->jawaban_d}}</li>
                                    </i>
                                    <button id="saveBtn">Simpan Jawaban</button>
                                    {{-- <h1 id="nilai_benar">{{$item->jawaban_true}}</h1> --}}
                                </ul>
                            </ol>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>

{{-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
            // Load saved answers from local storage
            loadSavedAnswers();

            // Save button click event
            $('#saveBtn').on('click', function() {
                saveAnswers();
            });

            function saveAnswers() {
                // Loop through each question and store selected answers
                $('input[type="radio"]:checked').each(function() {
                    const question = $(this).attr('name');
                    const answer = $(this).val();
                    localStorage.setItem(question, answer);
                });
                // alert('Answers saved to local storage!');
            }

            function loadSavedAnswers() {
                // Loop through each question and load saved answers
                $('input[type="radio"]').each(function() {
                    const question = $(this).attr('name');
                    const savedAnswer = localStorage.getItem(question);
                    if (savedAnswer) {
                      // console.log(savedAnswer);
                        $(this).prop('checked', savedAnswer === $(this).val());
                    }
                });
            }
        });

// $(document).ready(function() {
//   // Load saved answer from local storage on page load
//   var savedAnswer = localStorage.getItem("selectedAnswer");
//   if (savedAnswer) {
//     $("input[name='answer'][value='" + savedAnswer + "']").prop("checked", true);
//   }

//   // Handle save button click event
//   $("#saveButton").click(function() {
//     var selectedAnswer = $("input[name='answer']:checked").val();
//     if (selectedAnswer) {
//       localStorage.setItem("selectedAnswer", selectedAnswer);
//       alert("Answer saved: " + selectedAnswer);
//     } else {
//       alert("Please select an answer.");
//     }
//   });
// });


// $(document).ready(function() {
//   $(".radio-option").on("change", function() {
//     var selectedAnswer = $("input[name='answer']:checked").val();
//     localStorage.setItem("selectedAnswer", selectedAnswer);
//   });

//   // Check for previously selected answer and pre-fill the radio button on page load
//   var previousAnswer = localStorage.getItem("selectedAnswer");
//   if (previousAnswer) {
//     $("input[name='answer'][value='" + previousAnswer + "']").prop("checked", true);
//   }
// });



// $(document).ready(function() {
//   // Load previously selected answers from local storage if available
//   for (let i = 1; i <= 5; i++) {
//     const savedAnswer = localStorage.getItem(`question${i}`);
//     if (savedAnswer) {
//       $(`input[name=question${i}][value="${savedAnswer}"]`).prop("checked", true);
//     }
//   }

//   // Handle form submission
//   $("#quiz-form").submit(function(event) {
//     event.preventDefault(); // Prevent form submission

//     // Loop through each question and save selected answer to local storage
//     for (let i = 1; i <= 5; i++) {
//       const selectedAnswer = $(`input[name=question${i}]:checked`).val();
//       if (selectedAnswer) {
//         localStorage.setItem(`question${i}`, selectedAnswer);
//       }
//     }

//     alert("Answers saved to local storage!");
//   });
// });


    // document.addEventListener("DOMContentLoaded", function () {
    //     const form = document.getElementById("quiz-form");

    //     // Load stored values on page load
    //     loadRadioStates();

    //     form.addEventListener("submit", function (event) {
    //         event.preventDefault();

    //         // Save radio states to local storage
    //         saveRadioStates();

    //         // Process form submission or other actions
    //         // For example: form.submit();
    //     });

    //     function saveRadioStates() {
    //         const radioInputs = form.querySelectorAll("input[type='radio']");
    //         const radioStates = {};

    //         radioInputs.forEach(input => {
    //             if (input.checked) {
    //                 radioStates[input.name] = input.value;
    //             }
    //         });

    //         localStorage.setItem("radioStates", JSON.stringify(radioStates));
    //     }

    //     function loadRadioStates() {
    //         const radioStatesString = localStorage.getItem("radioStates");
    //         if (radioStatesString) {
    //             const radioStates = JSON.parse(radioStatesString);

    //             Object.keys(radioStates).forEach(question => {
    //                 const value = radioStates[question];
    //                 const input = form.querySelector(`input[name='${question}'][value='${value}']`);
    //                 if (input) {
    //                     input.checked = true;
    //                 }
    //             });
    //         }
    //     }
    // });


    // function save_jawaban(e){
    //   let val = $(e).val()
    //   let id = $(e).closest('#par_pilihan').attr('data-id')
    //   var simpanLocal = localStorage.setItem('data_jawaban_'+id, JSON.stringify(val));
    //   simpanLocal;

    //   const getLocal = localStorage.getItem("simpanLocal");
    //   const nilai_benar =  document.getElementByid('nilai_benar'.val);
    //   const nilai = ()

    //   if ($simpanLocal.val == $nilai_benar.val) {
    //     nilai.push=20;
    //   }else{
    //     nilai.push=0;
    //   }



    // }


    // function selesai(){
    //   const getData = localStorage.getItem("simpanLocal");
    //   console.log(getData);
    // }

    // function show_value(){
    //   let selected_radio = document.querySelector('input[name="pilihan"]:checked').value

    //   if (selected_radio.value) {
    //     radio:checked;
    //   }
    // }

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
