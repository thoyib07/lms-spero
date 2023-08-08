@extends('layout.main')



@section('container')
<link rel="stylesheet" href=" {{ asset('../css/lowongan_exam.css')}}">


<center>
    <section class="homeExam text-start" style="transform: translateY(7rem)">
        <div class="px-4 px-lg-5">
            <div class="row">
                <div class="col-12 back_home">
                    <a href="/dashboard" style="display: inline-block;">
                        <div class="back__he d-flex gap-2">
                            <div class="bh__left">
                              <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512" style=""><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
                            </div>
                            <div class="bh__right">
                                <h3 class="mb-0">Kembali</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-2">
                    <center>
                        <div class="ls__left">
                            <img src="{{asset ('../img/senbud-icon.png')}}  " alt="">
                        </div>
                    </center>
                </div>
                <div class="col-md-5 col-12">
                    <div class="left__side d-flex justify-content-center justify-content-md-start gap-5">
                        <div class="is__right">
                            <div class="isr__top px-auto">
                                <h1 class="mt-md-0 mt-5 mapel">{{$Materi->judul_materi}}</h1>
                                <p class="desc__mapel my-3">{{$Materi->intruksi_1}}</p>
                            </div>
                            <div class="row d-flex right__desc">
                                <div class="col-md-5 col-6 ">
                                    <div class="tcc__bottom d-flex">
                                        <div class="tccb__content gap-2 ">
                                            <div class="tccbl__left"><img src="{{asset ('../img/bg-left.png')}}  "
                                                    alt="" style="width: 1.5rem;">
                                            </div>
                                            <div class="tccbl__right">
                                                <p class="mt-1">15</p>
                                            </div>
                                        </div>
                                        <div class="tccb__content gap-2">
                                            <div class="tccbl__left"><img src="{{asset ('../img/bg-middle.png')}}  "
                                                    alt="" style="width: 1.25rem;">
                                            </div>
                                            <div class="tccbl__right">
                                                <p class="mt-1">10</p>
                                            </div>
                                        </div>
                                        <div class="tccb__content gap-2" id="tccb__last">
                                            <div class="tccbl__left"><img src="{{asset ('../img/bg-right.png')}}  "
                                                    alt="" style="width: 1.25rem;">
                                            </div>
                                            <div class="tccbl__right">
                                                <p class="mt-1">35</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-6">
                                    <div class="tcc__right d-flex align-items-center gap-1">
                                        <div class="tccr__left mt-0">
                                            <img style="width: calc(50% + 1vmax);" src="{{asset ('../img/star-icon.png')}}  " alt="">
                                        </div>
                                        <div class="tccr__right d-flex align-items-center">
                                            <h3 class="mb-0">4.9</>
                                            <h3 class="mb-0">/</>
                                            <h3 class="mb-0">5.0</>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-play-vid w-100 mt-3">
                                <a href="/ulangan" class="btn__isi d-flex gap-2 text-decoration-none">
                                    <div class="bi__left">
                                        <img src="{{asset ('../img/play-vid-icon.png')}}" alt="" style="width: 75%;">
                                    </div>
                                    <div class="bi__right">
                                        <h4 class="mb-0 text-white">Mulai Pembelajaran</h4>
                                    </div>
                                </a>
                            </button>
                        </div>
                    </div>
                    <center>
                        <img class="mt-5 w-75 d-none d-sm-block d-sm-none d-md-block"
                            src="{{asset ('../img/dashboard-icon-2.png')}}" alt="">
                    </center>
                </div>

                <div class="col-md-5 mt-3 mt-md-0">
                  <div class="right_content text-white p-sm-4 p-3 p-xl-5 fw-bold" style="background-color: #6b859b; border-radius: 1rem;">
                    <h4>Materi yang Telah Anda selesaikan</h4>
                    <div class="for_content mt-3  p-3  d-flex justify-content-between align-items-center">
                      <div class="fc_left" style="flex-basis: 20%;">
                        <img src="{{asset ('../img/senbud-icon.png')}}" alt="">
                      </div>
                      <div class="fc_middle" style="flex-basis: 80%;">
                        <h4 class="mb-0">Materi 5</h4>
                        <p class="sm fw-light mb-0">Anda belum mengikuti Materi Ini</p>
                      </div>
                      <div class="fc_right d-flex justify-content-end" style="flex-basis: 20%;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="fill:#fbff00;"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM224 192V320c0 17.7-14.3 32-32 32s-32-14.3-32-32V192c0-17.7 14.3-32 32-32s32 14.3 32 32zm128 0V320c0 17.7-14.3 32-32 32s-32-14.3-32-32V192c0-17.7 14.3-32 32-32s32 14.3 32 32z"/></svg>
                      </div>
                    </div>
                    <div class="for_content mt-3  p-3  d-flex justify-content-between align-items-center">
                      <div class="fc_left" style="flex-basis: 20%;">
                        <img src="{{asset ('../img/senbud-icon.png')}}" alt="">
                      </div>
                      <div class="fc_middle" style="flex-basis: 80%;">
                        <h4 class="mb-0">Materi 5</h4>
                        <p class="sm fw-light mb-0">Anda belum mengikuti Materi Ini</p>
                      </div>
                      <div class="fc_right d-flex justify-content-end" style="flex-basis: 20%;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="fill:#4ce68f;"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                      </div>
                    </div>
                    <div class="for_content mt-3  p-3  d-flex justify-content-between align-items-center">
                      <div class="fc_left" style="flex-basis: 20%;">
                        <img src="{{asset ('../img/senbud-icon.png')}}" alt="">
                      </div>
                      <div class="fc_middle" style="flex-basis: 80%;">
                        <h4 class="mb-0">Materi 5</h4>
                        <p class="sm fw-light mb-0">Anda belum mengikuti Materi Ini</p>
                      </div>
                      <div class="fc_right d-flex justify-content-end" style="flex-basis: 20%;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="fill:#d31717"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M384 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H384zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"/></svg>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
</center>

@endsection
