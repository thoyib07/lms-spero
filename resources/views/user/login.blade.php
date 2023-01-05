
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" href="../css/styleLogin.css">

    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <title>Login</title>
  </head>
  <body>
    <section class="login">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-6 col-10 login-content">
            <img src="{{asset('../img/spero-logo.png')}} " alt="">
            <h3 class="text-center mb-5">Login</h3>
            <form>
              <div class="mb-3">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="mb-3 form-check login-remember">
                <div class="left">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label text-start" for="exampleCheck1" style="font-size: 12.5px;">Remember Me</label>
                </div>
                <div class="right">
                  <a href="" class="text-end" style="font-size: 12.5px;">Forgot Password?</a>
                </div>
              </div>
                <a href="/dashboard" type="submit" class="btn btn-danger w-100 btn-login text-white d-flex">Login</a>
            </form>
            <div class="register d-flex justify-content-center mt-3">
              <p>Dont Have An Account?</p>
              <a href="/regist" class="fw-bold ms-2" style="color: #000;">Sign Up </a>
            </div>
          </div>
          <img class="login-icon d-none d-sm-block" src="{{asset('../img/login-icon.png')}} " alt="">
          <img class="login-icon-2" src="{{asset('../img/login-icon-2.png')}} " alt="">
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