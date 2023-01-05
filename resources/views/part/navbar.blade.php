<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed w-100 py-3">
    <div class="container-fluid px-4 px-lg-5">
      <a class="navbar-brand" href="#"><img src="{{asset('../img/spero-logo-removebg-preview-edit.png')}} " class="w-75 me-0" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle dropdown-materi mt-3 mt-sm-0" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Materi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/dashboard">Basic</a></li>
              <hr class="bg-dark border-2 border-top border-dark m-0">
              <li><a class="dropdown-item" href="/lowongan">Lowongan</a></li>
            </ul>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">Materi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/daftarLowongan">Daftar Lowongan</a>
          </li>
        </ul>
          <div class="search me-5">
            <form class="d-flex mt-2 mt-sm-0">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-none btn-search" type="submit"><img src="{{asset('../img/search-icon.png')}}" alt=""></button>
            </form>
          </div>
        <div class="notification d-flex mt-4 mt-sm-0">
          <li class="nav-item dropdown" style="list-style: none; ">
            <a class="nav-link dropdown-toggle dropdown-news mt-3 mt-sm-0" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <button type="button" class="btn btn-notif position-relative">
            <img src="{{asset('../img/bell-nav.png')}}" alt="">
              <span class="position-absolute top-25 start-100 translate-middle badge rounded-pill bg-danger">
                10
                <span class="visually-hidden">unread messages</span>
              </span>
              </button>
            </a>
            <ul class="dropdown-menu news__dropdown" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="">
                  <div class="news d-flex">
                    <div class="news__left">
                      <p class="mb-0">Materi Kimia Segera Dimulai pada pukul 10:00 WIB</p>
                    </div>
                    <div class="news__right">
                      <img src="{{asset('../img/Ellipse-news.png')}}" alt="">
                    </div>
                  </div>
                </a>
                <hr class="bg-dark border-2 border-top border-dark m-0">
              </li>
              <li>
                <a class="dropdown-item" href="">
                  <div class="news d-flex">
                    <div class="news__left">
                      <p class="mb-0">Materi Kimia Segera Dimulai pada pukul 10:00 WIB</p>
                    </div>
                    <div class="news__right">
                      <img src="{{asset('../img/Ellipse-news.png')}}" alt="">
                    </div>
                  </div>
                </a>
                <hr class="bg-dark border-2 border-top border-dark m-0">
              </li>
              <li>
                <a class="dropdown-item" href="">
                  <div class="news d-flex">
                    <div class="news__left">
                      <p class="mb-0">Materi Kimia Segera Dimulai pada pukul 10:00 WIB</p>
                    </div>
                    <div class="news__right">
                      <img src="{{asset('../img/Ellipse-news.png')}}" alt="">
                    </div>
                  </div>
                </a>
                <hr class="bg-dark border-2 border-top border-dark m-0">
              </li>
            </ul>
          </li>
          <a href="/profil" class="my-auto mt-4 mt-sm-2">
            <button type="button" class="btn btn-notif position-relative">
              <img src="{{asset('../img/profil-nav.png')}}" alt="">
                <span class="position-absolute top-25 start-100 translate-middle badge rounded-pill bg-danger">
                  10
                  <span class="visually-hidden">unread messages</span>
                </span>
            </button>
          </a>
          
        </div>
      </div>
    </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

