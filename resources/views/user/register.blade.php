<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" href="../css/register.css">

    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <title>Login</title>
  </head>
  <body>
   <section class="register">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-7">
                <img class="regist-icon d-none d-sm-block" src="{{asset('../img/regist-icon.png')}} " alt="">
                <img class="regist-icon-2" src="{{asset('../img/regist-icon-2.png')}} " alt="">
            </div>
            <div class="col-md-4 col-10 mt-2 mx-auto">
                <h2 class="mb-3 title-section">Registration</h2>
                <form class="mb-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Full Name</label>
                        <input type="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="title mt-4 mb-3">
                        <label for="">Birth Of Day</label>
                    </div>
                    <div class="group-dropdown d-flex gap-3">
                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              Hari
                            </button>
                            <ul class="dropdown-menu">
                              <!-- Dropdown menu links -->
                            </ul>
                        </div>
                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              Bulan
                            </button>
                            <ul class="dropdown-menu">
                              <!-- Dropdown menu links -->
                            </ul>
                        </div>
                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              Tahun
                            </button>
                            <ul class="dropdown-menu">
                            </ul>
                        </div>
                    </div>
                    <div class="title mt-4 mb-3">
                        <label for="">Address</label>
                    </div>
                    <div class="group-dropdown d-flex gap-3">
                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              Provinsi
                            </button>
                            <ul class="dropdown-menu">
                              <!-- Dropdown menu links -->
                            </ul>
                        </div>
                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              Kota
                            </button>
                            <ul class="dropdown-menu">
                              <!-- Dropdown menu links -->
                            </ul>
                        </div>
                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              Kecamatan
                            </button>
                            <ul class="dropdown-menu">
                              <!-- Dropdown menu links -->
                            </ul>
                        </div>
                    </div>
                </form>
                <a href="login.html">
                    <button type="submit" class="btn btn-primary w-100 btn-submit">Registration</button>
                </a>
                <div class="register d-flex justify-content-center mt-3">
                    <p>Already Have An Account?</p>
                    <a href="/" class="fw-bold ms-2">Sign In </a>
                  </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
   </section>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>