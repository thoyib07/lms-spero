<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('back/images/favicon.png') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('back/css/style.css') }}" rel="stylesheet">
</head>
<body>

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

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="{{ asset('back/images/logo.png') }}" alt=""></b>
                    <span class="logo-compact"><img src="{{ asset('back/images/logo-compact.png') }}" alt=""></span>
                    <span class="brand-title">
                        <img src="{{ asset('back/images/logo-text.png') }}" alt="">
                    </span>
                </a>
            </div>
        </div>

        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        
        @include('back.templates.subtemplates.header')

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        
        @include('back.templates.subtemplates.sidebar')

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        
        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        
        @include('back.templates.subtemplates.footer')

        <!--**********************************
            Footer end
        ***********************************-->
    
      </div>

    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    
    <script src="{{ asset('back/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('back/js/custom.min.js') }}"></script>
    <script src="{{ asset('back/js/settings.js') }}"></script>
    <script src="{{ asset('back/js/gleek.js') }}"></script>
    <script src="{{ asset('back/js/styleSwitcher.js') }}"></script>
    <script>
        (function($) {
            "use strict"

            new quixSettings({
                sidebarPosition: "fixed"
            });
            
        })(jQuery);
    </script>
</body>
</html>