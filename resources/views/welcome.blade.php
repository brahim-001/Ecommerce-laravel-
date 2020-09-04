<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
         <link rel="stylesheet" href="assets/css/bootstrap.min.css">
         <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
         <link rel="stylesheet" href="assets/css/slicknav.css">
         <link rel="stylesheet" href="assets/css/flaticon.css">
         <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
         <link rel="stylesheet" href="assets/css/gijgo.css">
         <link rel="stylesheet" href="assets/css/animate.min.css">
         <link rel="stylesheet" href="assets/css/animated-headline.css">
         <link rel="stylesheet" href="assets/css/magnific-popup.css">
         <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
         <link rel="stylesheet" href="assets/css/themify-icons.css">
         <link rel="stylesheet" href="assets/css/slick.css">
         <link rel="stylesheet" href="assets/css/nice-select.css">
         <link rel="stylesheet" href="assets/css/style.css"> 
    </head>
    <body>

        <header>
            <!-- Header Start -->
            <div class="header-area ">
                <div class="main-header header-sticky">
                    <div class="container-fluid">
                        <div class="menu-wrapper d-flex align-items-center justify-content-between">
                            <div class="header-left d-flex align-items-center">
                                <!-- Logo -->
                                <div class="logo">
                                    <a href="boutique"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="boutique">Home</a></li> 
                                        </ul>
                                    </nav>
                                </div>   
                            </div>
                            <div class="header-right1 d-flex align-items-center">
                                <!-- Social -->
                                <div class="header-social d-none d-md-block">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                                <!-- Search Box -->
                                <div class="search d-none d-md-block">
                                    <ul class="d-flex align-items-center">
                                           {{-- <div class="nav-search search-switch">
                                            <i class="ti-search"></i>
                                           </div> --}}

            @if (Route::has('login'))
                    @auth
                        {{-- <li href="{{ url('/boutique') }}">Home</li> --}}
                    @else
                        <li><a href="{{ route('login') }}" style="color: #9f78ff; margin-right:20px">Login</a></li>

                        @if (Route::has('register'))
                            <li><a  href="{{ route('register') }}" style="color: #9f78ff; margin-right:20px">Register</a> </li>
                        @endif
                    @endauth
                
            @endif
      
                                      
                                      
                                        
                                    </ul>
                                </div>
                            </div>
                           
      
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>
       

           <!--? Hero Area Start-->
           <div class="container-fluid">
            <div class="slider-area">
               <div class="single-slider slider-bg3 hero-overly slider-height d-flex    align-items-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-9">
                                    <!-- Hero Caption -->
                                    <div class="hero__caption">
                                        <h1>fashion<br>changing<br>always</h1>
                                        <a href="boutique" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- End Hero -->


          
    </body>
</html>
