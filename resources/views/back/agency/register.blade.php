<style>
    .tab {
        display: none;
    }
    input {
      padding: 10px;
      width: 100%;
      border: 1px solid #aaaaaa;
    }
    textarea {
      padding: 10px;
      width: 100%;
      border: 1px solid #aaaaaa;
    }
    .step {
      height: 10;
      width: 10;
      margin: 0 2px;
      background-color: #bbbbbb;
      border-radius: 50%;
      display: inline-block;
      opacity: 0.5;
    }
    .step.active {
      opacity: 1;
    }
</style>

<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('back/assets/images/favicon.png') }}">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="{{ asset('back/css/style.css') }}" rel="stylesheet">
</head>
<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

    <!--*******************
        Preloader end
    ********************-->

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                  <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">
                            <a class="text-center" href="index.html"><h4>Register</h4></a>
                  
                              @if(Session::get('fail'))
                                <div class="alert alert-danger alert-dismissible fade show">
                                    {{ Session::get('fail') }}
                                </div>
                              @endif
                  
                            <form id="regForm" action="{{ route('agency.postregister') }}" method="POST" class="">
                              @csrf
                                <div class="tab">
                                  <div class="form-group">
                                    <label>Director Name</label>
                                    <input type="text" name="name" oninput="this.className = ''" value="{{ $director->name ?? '' }}" class="form-control" placeholder="Name">
                                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                                  </div>
                                  <div class="form-group">
                                      <label>Date Of Birth</label>
                                      <input type="date" name="date_of_birth" oninput="this.className = ''" value="{{ $director->date_of_birth ?? '' }}" class="form-control" placeholder="">
                                      <span class="text-danger">@error('date_of_birth'){{ $message }}@enderror</span>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label>Email</label>
                                      <input type="email" name="email" oninput="this.className = ''" value="{{ $director->email ?? '' }}" class="form-control" placeholder="Email">
                                      <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Phone Number</label>
                                      <input type="number" name="phone_number" oninput="this.className = ''" value="{{ $director->phone_number ?? '' }}" class="form-control" placeholder="Phone Number">
                                      <span class="text-danger">@error('phone_number'){{ $message }}@enderror</span>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label>Address</label>
                                    <textarea name="address" oninput="this.className = ''" class="form-control h-150px" rows="3" id="comment" placeholder="Address">{{ $director->address ?? '' }}</textarea>
                                    <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                                  </div>
                                </div>

                                <div class="tab">
                                  <div class="form-group">
                                      <label>Business Name</label>
                                      <input type="text" name="business_name" oninput="this.className = ''" value="{{ $agency->business_name ?? '' }}" class="form-control" placeholder="Business Name">
                                      <span class="text-danger">@error('business_name'){{ $message }}@enderror</span>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label>Business Identification Number</label>
                                      <input type="number" name="business_identification_number" oninput="this.className = ''" value="{{ $agency->business_identification_number ?? '' }}" class="form-control" placeholder="Business Identification Number">
                                      <span class="text-danger">@error('business_identification_number'){{ $message }}@enderror</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Telephone Number</label>
                                      <input type="number" name="telephone_number" oninput="this.className = ''" value="{{ $agency->phone_number ?? '' }}" class="form-control" placeholder="Telephone Number">
                                      <span class="text-danger">@error('telephone_number'){{ $message }}@enderror</span>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label>Email</label>
                                      <input type="email" name="email" oninput="this.className = ''" value="{{ $agency->email ?? '' }}" class="form-control" placeholder="Email">
                                      <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Password</label>
                                      <input type="text" name="password" oninput="this.className = ''" value="{{ $agency->password ?? '' }}" class="form-control" placeholder="Password">
                                      <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label>Address</label>
                                    <textarea name="address" oninput="this.className = ''" class="form-control h-150px" rows="3" id="comment" placeholder="Address">{{ $agency->address ?? '' }}</textarea>
                                    <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                                  </div>
                                </div>
                                <button type="button" id="prevBtn" class="btn btn-dark" onclick="nextPrev(-1)">Previous</button>
                                <button type="button" id="nextBtn" class="btn btn-dark" onclick="nextPrev(1)">Next</button>
                                <div class="text-center mt-2">
                                  <span class="step"></span>
                                  <span class="step"></span>
                                </div>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var currentTab = 0;
        showTab(currentTab);
        function showTab(n) {
          var x = document.getElementsByClassName("tab");
          x[n].style.display = "block";
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
          } else {
            document.getElementById("prevBtn").style.display = "inline";
          }
          if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
          } else {
            document.getElementById("nextBtn").innerHTML = "Next";
          }
          fixStepIndicator(n)
        }
        function nextPrev(n) {
          var x = document.getElementsByClassName("tab");
          if (n == 1 && !validateForm()) return false;
          x[currentTab].style.display = "none";
          currentTab = currentTab + n;
          if (currentTab >= x.length) {
            document.getElementById("regForm").submit();
            return false;
          }
          showTab(currentTab);
        }
        function validateForm() {
          var x, y, i, valid = true;
          x = document.getElementsByClassName("tab");
          y = x[currentTab].querySelectorAll('input');
          for (i = 0; i < y.length; i++) {
            if (y[i].value == "") {
              y[i].className += " invalid";
              valid = false;
            }
          }
          if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
          }
          return valid;
        }
        function fixStepIndicator(n) {
          var i, x = document.getElementsByClassName("step");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          x[n].className += " active";
        }
    </script>
    
    <!--**********************************
        Scripts
    ***********************************-->
    
    <script src="{{ asset('back/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('back/js/custom.min.js') }}"></script>
    <script src="{{ asset('back/js/settings.js') }}"></script>
    <script src="{{ asset('back/js/gleek.js') }}"></script>
    <script src="{{ asset('back/js/styleSwitcher.js') }}"></script>
</body>
</html>