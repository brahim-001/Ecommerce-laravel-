<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    
    @yield('meta')

    <title>Ecommerce</title>
       <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="manifest" crossorigin="use-credentials" href="%PUBLIC_URL%/manifest.json" />
    @yield('extra-script')
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/blog/">
    <!-- Bootstrap core CSS -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
 
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> 
    

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      /* stylelint-disable selector-list-comma-newline-after */

.blog-header {
  line-height: 1;
  border-bottom: 1px solid #e5e5e5;
}

.blog-header-logo {
  font-family: "Playfair Display", Georgia, "Times New Roman", serif;
  font-size: 2.25rem;
}

.blog-header-logo:hover {
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display", Georgia, "Times New Roman", serif;
}

.display-4 {
  font-size: 2.5rem;
}
@media (min-width: 768px) {
  .display-4 {
    font-size: 3rem;
  }
}

.nav-scroller {
  position: relative;
  z-index: 2;
  height: 2.75rem;
  overflow-y: hidden;
}

.nav-scroller .nav {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  padding-bottom: 1rem;
  margin-top: -1px;
  overflow-x: auto;
  text-align: center;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch;
}

.nav-scroller .nav-link {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: .875rem;
}

.card-img-right {
  height: 100%;
  border-radius: 0 3px 3px 0;
}

.flex-auto {
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
}

.h-250 { height: 250px; }
@media (min-width: 768px) {
  .h-md-250 { height: 250px; }
}

/* Pagination */
.blog-pagination {
  margin-bottom: 4rem;
}
.blog-pagination > .btn {
  border-radius: 2rem;
}

/*
 * Blog posts
 */
.blog-post {
  margin-bottom: 4rem;
}
.blog-post-title {
  margin-bottom: .25rem;
  font-size: 2.5rem;
}
.blog-post-meta {
  margin-bottom: 1.25rem;
  color: #999;
}

/*
 * Footer
 */
.blog-footer {
  padding: 2.5rem 0;
  color: #999;
  text-align: center;
  background-color: #f9f9f9;
  border-top: .05rem solid #e5e5e5;
}

.blog-footer p:last-child {
  margin-bottom: 0;
}

.dropbtn {
  /* background-color: #3498DB; */
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color:  #9F78FF;
  color: white
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 60px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
.caret.caret-up {
    border-top-width: 0;
    border-bottom: 4px solid #fff;
  }

    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/ecommerce.css')}}">
  </head>
  <body>
<!-- Preloader Start-->
    <header>
      <!-- Header Start -->
      <div class="header-area ">
          <div class="main-header header-sticky">
              <div class="container-fluid">
                  <div class="menu-wrapper d-flex align-items-center justify-content-between">
                      <div class="header-left d-flex align-items-center">
                          <!-- Logo -->
                          <div class="logo">
                              <a href="boutique"><img src="{{asset('assets/img/logo/logo.png')}}" alt=""></a>
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
                                     @include('partials.search')

                                  <li>
                                      <div class="card-stor">
                                        <i class="fas fa-shopping-cart" style="color:white"></i> 
                                          <a class="text-muted" href="{{route('cart.index')}}"> 
                                            <span class="badge badge-pill "> {{Cart::count()}} </span></a>
                                      </div>
                                       
                                  </li>
                                  
                                    @include('partials.auth')
                                  
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

<div class="container">

        <div class="popular-items pt-50">
          <div class="container-fluid">
              <div class="row">
                @foreach ( App\Category::all() as $category)

                 <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s"         data-wow-delay=".6s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.6s;         animation-name: fadeInUp;">
                      <div class="popular-img">
                      <img src="assets/img/gallery/{{$category->image}}" alt="">
                          <div class="img-cap">
                              <span>{{$category->name}}</span>
                          </div>
                          <div class="favorit-items">
                           <a href="{{route('products.index',['categorie'=>$category->slug])}}"" class="btn">See {{$category->name}}</a>
                       </div>
                   </div>
               </div>
                  </div>

               @endforeach

</div>
</div>
</div>
  </main>

  {{-- <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      @foreach ( App\Category::all() as $category)
      <a class="p-2 text-muted" href="{{route('products.index',['categorie'=>$category->slug])}}">{{$category->name}}</a>
      @endforeach
      
    </nav>
  </div> --}}



    @if (session('success'))
     <div class="alert alert-success">
     {{session('success')}}
  </div>
    
@endif



@if (session('danger'))
<div class="alert alert-danger">
    {{session('danger')}}
</div>
    
@endif



@if (count($errors)>0)
<div class="alert alert-danger">

<ul class="mb-0 mt-0">
  @foreach ($errors->all() as $error)
<li>{{$error}}</li>
  @endforeach



</ul>


</div>

@endif
 
@if (request()->input())
  <div style="border: 2px solid black">
    <h1 style="text-align: center; padding:50px">{{$products->total()}} article(s) 
     <span style="color: red"> {{request()->q}}</span> </h1>

  </div>
@endif
  <div class="mb-2">
    
   @yield('content')
   @yield('content1')
   @yield('content2')

  </div>
</div>
{{-- 
<footer class="blog-footer">
</footer> --}}
<div class="categories-area section-padding40 gray-bg">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">
                  <div class="cat-icon">
                      <img src="assets/img/icon/services1.svg" alt="">
                  </div>
                  <div class="cat-cap">
                      <h5>Fast &amp; Free Delivery</h5>
                      <p>Free delivery on all orders</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">
                  <div class="cat-icon">
                      <img src="assets/img/icon/services2.svg" alt="">
                  </div>
                  <div class="cat-cap">
                      <h5>Fast &amp; Free Delivery</h5>
                      <p>Free delivery on all orders</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="single-cat mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInUp;">
                  <div class="cat-icon">
                      <img src="assets/img/icon/services3.svg" alt="">
                  </div>
                  <div class="cat-cap">
                      <h5>Fast &amp; Free Delivery</h5>
                      <p>Free delivery on all orders</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="single-cat wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
                  <div class="cat-icon">
                      <img src="assets/img/icon/services4.svg" alt="">
                  </div>
                  <div class="cat-cap">
                      <h5>Fast &amp; Free Delivery</h5>
                      <p>Free delivery on all orders</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<footer>
  <!-- Footer Start-->
  <div class="footer-area footer-padding">
      <div class="container-fluid ">
          <div class="row d-flex justify-content-between">
              <div class="col-xl-3 col-lg-3 col-md-8 col-sm-8">
               <div class="single-footer-caption mb-50">
                 <div class="single-footer-caption mb-30">
                    <!-- logo -->
                    <div class="footer-logo mb-35">
                     <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                 </div>
                 <div class="footer-tittle">
                     <div class="footer-pera">
                         <p>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</p>
                     </div>
                 </div>
                 <!-- social -->
                 <div class="footer-social">
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-pinterest-p"></i></a>
              </div>
          </div>
      </div>
  </div>
  <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
      <div class="single-footer-caption mb-50">
          <div class="footer-tittle">
              <h4>Quick links</h4>
              <ul>
                  <li><a href="#">Image Licensin</a></li>
                  <li><a href="#">Style Guide</a></li>
                  <li><a href="#">Privacy Policy</a></li>
              </ul>
          </div>
      </div>
  </div>
  <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
      <div class="single-footer-caption mb-50">
          <div class="footer-tittle">
              <h4>Shop Category</h4>
              <ul>
                  <li><a href="#">Image Licensin</a></li>
                  <li><a href="#">Style Guide</a></li>
                  <li><a href="#">Privacy Policy</a></li>
              </ul>
          </div>
      </div>
  </div>
  <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
      <div class="single-footer-caption mb-50">
          <div class="footer-tittle">
              <h4>Pertners</h4>
              <ul>
                  <li><a href="#">Image Licensin</a></li>
                  <li><a href="#">Style Guide</a></li>
                  <li><a href="#">Privacy Policy</a></li>
              </ul>
          </div>
      </div>
  </div>
  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
      <div class="single-footer-caption mb-50">
          <div class="footer-tittle">
              <h4>Get in touch</h4>
              <ul>
                  <li><a href="#">(89) 982-278 356</a></li>
                  <li><a href="#">demo@colorlib.com</a></li>
                  <li><a href="#">67/A, Colorlib, Green road, NYC</a></li>
              </ul>
          </div>
      </div>
  </div>
</div>
</div>
</div>
<!-- footer-bottom area -->
<div class="footer-bottom-area">
  <div class="container">
      <div class="footer-border">
         <div class="row d-flex align-items-center">
             <div class="col-xl-12 ">
                 <div class="footer-copy-right text-center">
                     <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End-->
</footer>
@yield('extra-js')

<!-- JS here -->
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('./assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{asset('')}}./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{asset('')}}./assets/js/popper.min.js"></script>
<script src="{{asset('')}}./assets/js/bootstrap.min.js"></script>

<!-- Slick-slider , Owl-Carousel ,slick-nav -->
<script src="{{asset('./assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('./assets/js/slick.min.js')}}"></script>
<script src="{{asset('./assets/js/jquery.slicknav.min.js')}}"></script>

<!-- One Page, Animated-HeadLin, Date Picker -->
<script src="{{asset('./assets/js/wow.min.js')}}"></script>
<script src="{{asset('./assets/js/animated.headline.js')}}"></script>
<script src="{{asset('./assets/js/jquery.magnific-popup.js')}}"></script>!
<script src="{{asset('./assets/js/gijgo.min.js')}}"></script>

<!-- Nice-select, sticky,Progress -->
{{-- <script src="{{asset('./assets/js/jquery.nice-select.min.js')}}"></script> --}}
<script src="{{asset('./assets/js/jquery.sticky.js')}}"></script>
<script src="{{asset('./assets/js/jquery.barfiller.js')}}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{asset('./assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('./assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('./assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('./assets/js/hover-direction-snake.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('./assets/js/contact.js')}}"></script>
<script src="{{asset('./assets/js/jquery.form.js')}}"></script>
<script src="{{asset('./assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('./assets/js/mail-script.js')}}"></script>
<script src="{{asset('./assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="{{asset('./assets/js/plugins.js')}}"></script>
<script src="{{asset('./assets/js/main.js')}}"></script>

</body>
</html>
