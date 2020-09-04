{{-- @extends('layouts.master')
@extends('layouts.master')


@section('content2')


<div class="col-md-12">
    <div class="row no-gutters p-3 border rounded d-flex align-items-center flex-md-row mb-4 shadow-sm position-relative">
      <div class="col-10  p-3 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-success">
        <div class="badge badge-pill badge-info">{{$stock}}</div>
          @foreach ($product->categories as $category)
          {{$category->name}}{{ $loop->last ? '' : ', '}}
      @endforeach
        </strong>
        <h5 class="mb-0">{{$product->title}}</h5>
        <div class="mb-1 text-muted">{{$product->created_at->format('d/m/y')}}</div>
        <p class="mb-auto"> {!! $product->description !!} </p>
        <strong class="mb-auto"> {{$product->getPrice()}} </strong>
     @if ($stock=='Disponible')
              <form action="{{route('cart.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        
                        <button type="submit" class="btn btn-dark">Ajouter au panier</button>
                </form>
     @endif
      
      </div>
      <div class="col-2 d-none d-lg-block">
            <img src=" {{asset('storage/'.$product->image)}} " id="mainImage"  style="height:100%; weidht:100%">
        <div class="mt-2">
                @if ($product->images)
                <img src=" {{asset('storage/'.$product->image)}} " alt="" class="img-thumbnail" width="100">
                          @foreach (json_decode($product->images,true) as $image)

                                   <img src=" {{asset('storage/'.$image)}} " width="100" class="img-thumbnail" >
        
                          @endforeach
                @endif
        </div>
      </div>
    </div>
  </div>

@endsection 



 @section('extra-js')
  <script>
 
 var mainImage=document.querySelector('#mainImage');
 var thumbnail=document.querySelectorAll('.img-thumbnail');
    mainImage.style.height = '200px';
    mainImage.style.width = '150px';
 thumbnail.forEach((element)=>element.addEventListener('click',changeImage));
 function changeImage(e){
  mainImage.src=this.src;
 }
  </script>
@endsection 

 --}}
 <!doctype html>
 <html class="no-js" lang="zxx">
 <head>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>Fashion | Teamplate</title>
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="manifest" href="site.webmanifest">
     <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
     <!-- CSS here -->
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
    <link rel="stylesheet" href="<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
     <style>
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
 </head>
 <body class="full-wrapper">
     <!-- ? Preloader Start -->
     <div id="preloader-active">
         <div class="preloader d-flex align-items-center justify-content-center">
             <div class="preloader-inner position-relative">
                 <div class="preloader-circle"></div>
                 <div class="preloader-img pere-text">
                     <img src="assets/img/logo/loder.png" alt="">
                 </div>
             </div>
         </div>
     </div>
     <!-- Preloader Start-->
     <header>
      <!-- Header Start -->
      <div class="header-area">
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
                                      <li><a href="\boutique">Home</a></li> 
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
     <main>
         <!-- breadcrumb Start-->
         <div class="page-notification">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12">
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb justify-content-center">
                                 <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                 <li class="breadcrumb-item"><a href="#">shop</a></li> 
                                 <li class="breadcrumb-item"><a href="#">Product Details</a></li> 
                             </ol>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
         <!-- breadcrumb End-->
         <!--?  Details start -->
         @foreach ($product->categories as $category)
         <div class="directory-details pt-padding">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-6">
                         <div class="small-tittle mb-20">
                           <strong>
                              <h1>{{$product->title}}</h1>        <div class="badge badge-pill badge-info">{{$stock}}</div>

                             
                           </strong>
                           <div class="mb-1 text-muted">{{$product->created_at->format('d/m/y')}}</div>
                           <p class="mb-auto"> {!! $product->description !!} </p>
                           <strong> {{$product->getPrice()}} </strong>
                        @if ($stock=='Disponible')
                                 <form  action="{{route('cart.store')}}" method="post">
                                           @csrf
                                           <input type="hidden" name="product_id" value="{{$product->id}}">
                                           
                                           <button type="submit" class="btn btn-dark">Ajouter au panier</button>
                                   </form>
                        @endif
                            
                         </div>
                        
                     </div>
                     <div class="col-lg-6">
                        
                         <div class="form-wrapper">
                             <div class="row ">
                                 <div class="col-xl-12">
                                  <div class="d-none d-lg-block">
                                    <img  style="height: 400px; width:600px" src=" {{asset('storage/'.$product->image)}} " id="mainImage">
                                    <div class="mt-2">
                                        @if ($product->images)
                                        <img src=" {{asset('storage/'.$product->image)}} " alt="" class="img-thumbnail" width="100">
                                                  @foreach (json_decode($product->images,true) as $image)
                        
                                                           <img src=" {{asset('storage/'.$image)}} " width="100" class="img-thumbnail" >
                                
                                                  @endforeach
                                        @endif
                                </div>
                              </div>
                                 </div>
                             </div>
                            
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         @endforeach
         
         <!--  Details End -->
         <!-- listing-area Area End -->
         <!--? Popular Locations Start 01-->
       
         <!-- Popular Locations End -->
 
         <!--? Services Area Start -->
         <div class="categories-area section-padding40 gray-bg">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="single-cat mb-50">
                             <div class="cat-icon">
                                 <img src="assets/img/icon/services1.svg" alt="">
                             </div>
                             <div class="cat-cap">
                                 <h5>Fast & Free Delivery</h5>
                                 <p>Free delivery on all orders</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="single-cat mb-50">
                             <div class="cat-icon">
                                 <img src="assets/img/icon/services2.svg" alt="">
                             </div>
                             <div class="cat-cap">
                                 <h5>Fast & Free Delivery</h5>
                                 <p>Free delivery on all orders</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="single-cat mb-30">
                             <div class="cat-icon">
                                 <img src="assets/img/icon/services3.svg" alt="">
                             </div>
                             <div class="cat-cap">
                                 <h5>Fast & Free Delivery</h5>
                                 <p>Free delivery on all orders</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="single-cat">
                             <div class="cat-icon">
                                 <img src="assets/img/icon/services4.svg" alt="">
                             </div>
                             <div class="cat-cap">
                                 <h5>Fast & Free Delivery</h5>
                                 <p>Free delivery on all orders</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!--? Services Area End -->
     </main>
 
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
 <!--? Search model Begin -->
 <div class="search-model-box">
     <div class="h-100 d-flex align-items-center justify-content-center">
         <div class="search-close-btn">+</div>
         <form class="search-model-form">
             <input type="text" id="search-input" placeholder="Searching key.....">
         </form>
     </div>
 </div>
 <!-- Search model end -->
 <!-- Scroll Up -->
 <div id="back-top" >
     <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
 </div>
 @yield('extra-js')
 <!-- JS here -->
 <!-- Jquery, Popper, Bootstrap -->
 <script src="{{asset('./assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{asset('./assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('./assets/js/popper.min.js')}}"></script>
<script src="{{asset('./assets/js/bootstrap.min.js')}}"></script>

<!-- Slick-slider , Owl-Carousel ,slick-nav -->
<script src="{{asset('./assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('./assets/js/slick.min.js')}}"></script>
<script src="{{asset('./assets/js/jquery.slicknav.min.js')}}"></script>

<!-- One Page, Animated-HeadLin, Date Picker -->
<script src="{{asset('./assets/js/wow.min.js')}}"></script>
<script src="{{asset('./assets/js/animated.headline.js')}}"></script>
<script src="{{asset('./assets/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('./assets/js/gijgo.min.js')}}"></script>

<!-- Nice-select, sticky,Progress -->
<script src="{{asset('./assets/js/jquery.nice-select.min.js')}}"></script>
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