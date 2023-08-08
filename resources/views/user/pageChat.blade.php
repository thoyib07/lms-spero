@extends('layout.main')
@section('container')
<link rel="stylesheet" href=" {{ asset('css/pageChat.css')}}">

    
<!-- The Modal -->
<div id="bg"></div>
<div id="modal-kotak">
    <div id="atas">
                <iframe class="responsive-iframe" src="https://www.youtube.com/embed/UqA7zfsVlIg?list=RD0LxdzHBmCCM"
                    title="NDX AKA - Nemen HipHop Dangdut Version ( Official Lyric Video )" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>   
    </div>
    <div id="bawah">
        <button id="tombol-tutup">CLOSE</button>
    </div>
</div>	

<div class="Content px-4 px-lg-5">
    <div class="row">
        <div class="col mx-auto">
                <button id="tombol">
                    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/UqA7zfsVlIg?list=RD0LxdzHBmCCM"
                title="NDX AKA - Nemen HipHop Dangdut Version ( Official Lyric Video )" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
                </iframe>
                </button>
        </div>
        {{-- <button id="tombol">KLIK SAYA !!</button> --}}
    </div>
    <div class="row mt-3">
        <div class="col-md-7 col-sm-6 col-12">
            <div class="top_profile">
                <div class="tp_left d-flex align-items-center gap-4">
                    <div class="tpl_img">
                        <img src="{{asset('../img/genjehhhhhhhhhh.jpg')}} " alt="" class="">
                    </div>
                    <div class="tpl_title">
                        <p class="mb-0 fw-bold">Seni Budaya</p>
                        <p class="mb-0 ">Materi 6</p>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="button col-md-5 col-sm-6 col-12 mt-sm-0 mt-3 d-flex justify-content-start justify-content-md-center align-items-center gap-2">
            <a class="btn btn-outline-primary fw-semibold d-flex align-items-center gap-1" href="#" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <style>
                        svg {
                            fill: #e86017
                        }
                    </style>
                    <path
                        d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V304H176c-35.3 0-64 28.7-64 64V512H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM176 352h32c30.9 0 56 25.1 56 56s-25.1 56-56 56H192v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V448 368c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H192v48h16zm96-80h32c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H304c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H320v96h16zm80-112c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V432 368z" />
                </svg>
                <p class="mb-0">Unduh PDF</p>
            </a>
            <a class="btn btn-success fw-semibold" href="/dashboard" role="button">Selesai</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="left_content col-md-7 px-1">
            <img src="{{asset('../img/band1.jpg')}} " alt="" class="">
            <img src="{{asset('../img/band2.jpg')}} " alt="" class="">
            <img src="{{asset('../img/band3.jpg')}} " alt="" class="">
        </div>
        <div class="col-md-5 px-3 mt-3 mt-md-0 ">
            <div class="card_chat row d-flex justify-content-center ">
                <div class="col-md-12" id="people_list_comment">
                    <div class="headings d-flex justify-content-between align-items-center">
                        <span>5 Komentar</span>
                        <div class="buttons">
                            <span class="badge bg-white d-flex flex-row align-items-center">
                                <span class="text-primary">Comments "ON"</span>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="switchVal" checked>

                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="p-3 mt-2" id="all-komentar">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <small class="font-weight-bold">Hmm, This poster looks cool</small>
                        </div>
                        <p class="time_komen mb-0">2 days ago</p>
                        <div class="action d-flex justify-content-between mt-2 align-items-center">
                            <div class="reply m-0">
                                <a class="text-decoration-none text-black" href="">Balas</a>
                                <button id="btn-balasan" class="border-0">Lihat 1 Balasan</button>
                            </div>
                            <div class="icons align-items-center">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-check-circle-o check-icon"></i>
                            </div>
                        </div>
                        <div id="balasan" class="ps-5">
                           <div class="content-balasan mt-2">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="font-weight-bold">Hmm, This poster looks cool</small>
                            </div>  
                            <p class="time_komen mb-0">2 days ago</p>
                           </div>
                        </div>
                    </div>
                    <div class="p-3 mt-2" id="all-komentar">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <small class="font-weight-bold">Hmm, This poster looks cool</small>
                        </div>
                        <p class="time_komen mb-0">2 days ago</p>
                        <div class="action d-flex justify-content-between mt-2 align-items-center">
                            <div class="reply m-0">
                                <a class="text-decoration-none text-black" href="">Balas</a>
                                <button id="btn-balasan" class="border-0">Lihat 1 Balasan</button>
                            </div>
                            <div class="icons align-items-center">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-check-circle-o check-icon"></i>
                            </div>
                        </div>
                        <div id="balasan" class="ps-5">
                           <div class="content-balasan mt-2">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="font-weight-bold">Hmm, This poster looks cool</small>
                            </div>  
                            <p class="time_komen mb-0">2 days ago</p>
                           </div>
                        </div>
                    </div>
                    <div class="p-3 mt-2" id="all-komentar">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <small class="font-weight-bold">Hmm, This poster looks cool</small>
                        </div>
                        <p class="time_komen mb-0">2 days ago</p>
                        <div class="action d-flex justify-content-between mt-2 align-items-center">
                            <div class="reply m-0">
                                <a class="text-decoration-none text-black" href="">Balas</a>
                                <button id="btn-balasan" class="border-0">Lihat 1 Balasan</button>
                            </div>
                            <div class="icons align-items-center">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-check-circle-o check-icon"></i>
                            </div>
                        </div>
                        <div id="balasan" class="ps-5">
                           <div class="content-balasan mt-2">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="font-weight-bold">Hmm, This poster looks cool</small>
                            </div>  
                            <p class="time_komen mb-0">2 days ago</p>
                           </div>
                        </div>
                    </div>
                    <div class="p-3 mt-2" id="all-komentar">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <small class="font-weight-bold">Hmm, This poster looks cool</small>
                        </div>
                        <p class="time_komen mb-0">2 days ago</p>
                        <div class="action d-flex justify-content-between mt-2 align-items-center">
                            <div class="reply m-0">
                                <a class="text-decoration-none text-black" href="">Balas</a>
                                <button id="btn-balasan" class="border-0">Lihat 1 Balasan</button>
                            </div>
                            <div class="icons align-items-center">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-check-circle-o check-icon"></i>
                            </div>
                        </div>
                        <div id="balasan" class="ps-5">
                           <div class="content-balasan mt-2">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="font-weight-bold">Hmm, This poster looks cool</small>
                            </div>  
                            <p class="time_komen mb-0">2 days ago</p>
                           </div>
                        </div>
                    </div>
                    <div class="p-3 mt-2" id="all-komentar">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <small class="font-weight-bold">Hmm, This poster looks cool</small>
                        </div>
                        <p class="time_komen mb-0">2 days ago</p>
                        <div class="action d-flex justify-content-between mt-2 align-items-center">
                            <div class="reply m-0">
                                <a class="text-decoration-none text-black" href="">Balas</a>
                                <button id="btn-balasan" class="border-0">Lihat 1 Balasan</button>
                            </div>
                            <div class="icons align-items-center">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-check-circle-o check-icon"></i>
                            </div>
                        </div>
                        <div id="balasan" class="ps-5">
                           <div class="content-balasan mt-2">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="font-weight-bold">Hmm, This poster looks cool</small>
                            </div>  
                            <p class="time_komen mb-0">2 days ago</p>
                           </div>
                        </div>
                    </div>
                    <div class="p-3 mt-2" id="all-komentar">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <small class="font-weight-bold">Hmm, This poster looks cool</small>
                        </div>
                        <p class="time_komen mb-0">2 days ago</p>
                        <div class="action d-flex justify-content-between mt-2 align-items-center">
                            <div class="reply m-0">
                                <a class="text-decoration-none text-black" href="">Balas</a>
                                <button id="btn-balasan" class="border-0">Lihat 1 Balasan</button>
                            </div>
                            <div class="icons align-items-center">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-check-circle-o check-icon"></i>
                            </div>
                        </div>
                        <div id="balasan" class="ps-5">
                           <div class="content-balasan mt-2">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="font-weight-bold">Hmm, This poster looks cool</small>
                            </div>  
                            <p class="time_komen mb-0">2 days ago</p>
                           </div>
                        </div>
                    </div>
                    <div class="p-3 mt-2" id="all-komentar">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <small class="font-weight-bold">Hmm, This poster looks cool</small>
                        </div>
                        <p class="time_komen mb-0">2 days ago</p>
                        <div class="action d-flex justify-content-between mt-2 align-items-center">
                            <div class="reply m-0">
                                <a class="text-decoration-none text-black" href="">Balas</a>
                                <button id="btn-balasan" class="border-0">Lihat 1 Balasan</button>
                            </div>
                            <div class="icons align-items-center">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-check-circle-o check-icon"></i>
                            </div>
                        </div>
                        <div id="balasan" class="ps-5">
                           <div class="content-balasan mt-2">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="font-weight-bold">Hmm, This poster looks cool</small>
                            </div>  
                            <p class="time_komen mb-0">2 days ago</p>
                           </div>
                        </div>
                    </div>
                    <div class="p-3 mt-2" id="all-komentar">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <small class="font-weight-bold">Hmm, This poster looks cool</small>
                        </div>
                        <p class="time_komen mb-0">2 days ago</p>
                        <div class="action d-flex justify-content-between mt-2 align-items-center">
                            <div class="reply m-0">
                                <a class="text-decoration-none text-black" href="">Balas</a>
                                <button id="btn-balasan" class="border-0">Lihat 1 Balasan</button>
                            </div>
                            <div class="icons align-items-center">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-check-circle-o check-icon"></i>
                            </div>
                        </div>
                        <div id="balasan" class="ps-5">
                           <div class="content-balasan mt-2">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="font-weight-bold">Hmm, This poster looks cool</small>
                            </div>  
                            <p class="time_komen mb-0">2 days ago</p>
                           </div>
                        </div>
                    </div>
                    <div class="p-3 mt-2" id="all-komentar">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <small class="font-weight-bold">Hmm, This poster looks cool</small>
                        </div>
                        <p class="time_komen mb-0">2 days ago</p>
                        <div class="action d-flex justify-content-between mt-2 align-items-center">
                            <div class="reply m-0">
                                <a class="text-decoration-none text-black" href="">Balas</a>
                                <button id="btn-balasan" class="border-0">Lihat 1 Balasan</button>
                            </div>
                            <div class="icons align-items-center">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-check-circle-o check-icon"></i>
                            </div>
                        </div>
                        <div id="balasan" class="ps-5">
                           <div class="content-balasan mt-2">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="font-weight-bold">Hmm, This poster looks cool</small>
                            </div>  
                            <p class="time_komen mb-0">2 days ago</p>
                           </div>
                        </div>
                    </div>
                    <div class="p-3 mt-2" id="all-komentar">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <small class="font-weight-bold">Hmm, This poster looks cool</small>
                        </div>
                        <p class="time_komen mb-0">2 days ago</p>
                        <div class="action d-flex justify-content-between mt-2 align-items-center">
                            <div class="reply m-0">
                                <a class="text-decoration-none text-black" href="">Balas</a>
                                <button id="btn-balasan" class="border-0">Lihat 1 Balasan</button>
                            </div>
                            <div class="icons align-items-center">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-check-circle-o check-icon"></i>
                            </div>
                        </div>
                        <div id="balasan" class="ps-5">
                           <div class="content-balasan mt-2">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="font-weight-bold">Hmm, This poster looks cool</small>
                            </div>  
                            <p class="time_komen mb-0">2 days ago</p>
                           </div>
                        </div>
                    </div>
                    <div class="p-3 mt-2" id="all-komentar">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <small class="font-weight-bold">Hmm, This poster looks cool</small>
                        </div>
                        <p class="time_komen mb-0">2 days ago</p>
                        <div class="action d-flex justify-content-between mt-2 align-items-center">
                            <div class="reply m-0">
                                <a class="text-decoration-none text-black" href="">Balas</a>
                                <button id="btn-balasan" class="border-0">Lihat 1 Balasan</button>
                            </div>
                            <div class="icons align-items-center">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-check-circle-o check-icon"></i>
                            </div>
                        </div>
                        <div id="balasan" class="ps-5">
                           <div class="content-balasan mt-2">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="https://i.imgur.com/hczKIze.jpg" width="30"
                                    class="user-img rounded-circle mr-2">
                                <span><small class="font-weight-bold text-primary">james_olesenn</small> </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="font-weight-bold">Hmm, This poster looks cool</small>
                            </div>  
                            <p class="time_komen mb-0">2 days ago</p>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 bottom-0 p-3" id="people_comment">
                    <div class="d-flex gap-2">
                        <div class="profil_comment" style="flex-basis: 10%;">
                            <img src="{{asset('../img/genjehhhhhhhhhh.jpg')}} " alt="" class="">
                        </div>
                        <div class="form_comment" style="flex-basis: 90%;">
                            <div class="form-outline">
                                <div class="mb-0">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Tambahkan Komentar...."></textarea>
                                </div>
                                <button type="button" class="btn btn-success float-end mt-1">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


   {{-- Jquery --}}
   <script src="{{ asset('https://code.jquery.com/jquery-3.6.3.min.js')}} " integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="text/javascript"></script>
<script>
    $(document).ready(function(){
			$('#tombol').click(function(){
				$('#modal-kotak , #bg').fadeIn("slow");
			});
			$('#tombol-tutup').click(function(){
				$('#modal-kotak , #bg').fadeOut("slow");
			});
		}); 
</script>
   <script>
    $(document).ready(function(){
        $('#btn-balasan').click(function(){
            $('#balasan').toggle(500);
        })
    }) 

    jQuery($ => {
        $("#switchVal").on("input", function() {
        $("#all-komentar").toggle(250);
        });
    });
</script>
@endsection