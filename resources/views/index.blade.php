<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Homepage</title>

       

        {{-- Built-In Bootstrap 4 --}}
        <link rel="stylesheet" type="text/css" href="css/app.css">

        {{-- Built-In Vue JS 2 --}}
        <script type="text/javascript" src="js/app.js"></script>

        <!-- jQuery -->
        <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous">
        </script>

        <!-- jQuery CDNs for Price Range Slider -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.9.1.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">


        <!-- Popper Js -->
        <script 
        src="https://cdn.bootcss.com/popper.js/1.9.3/umd/popper.min.js" integrity="sha384-knhBOwpf8/28D6ygAjJeb0STNDZqfPbKaWQ8wIz/xgSc0xXwKsKhNype8fmfMka2" crossorigin="anonymous">
        </script>

        <!-- Font Awesome -->
        <script src="https://use.fontawesome.com/b8fef9f667.js"></script>

        <!-- Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!-- Javascript -->
        <script type="text/javascript" src="js/script.js"></script>

        <!-- Pace Library for Loading progress bar -->
        <!-- <script type="text/javascript" src="js/pace.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/pace-theme-center-atom.css"> -->

        <!-- Google Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet"> --}}

        <!-- Favicon -->
        {{-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> --}}
        {{-- <link rel="icon" href="img/favicon.ico" type="image/x-icon"> --}}
        {{-- ********************************************************************** --}}
        <script type="text/javascript">
            
        </script>
        
    </head>
    <body>{{-- 
        <!--============================== Navigation Bar Starts ===================================-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
            <div class="container">
                  <a class="navbar-brand" href="index.html"><i class="fa fa-clock-o" aria-hidden="true"></i> Watches</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="mainnavbar">
                    <ul class="navbar-nav ml-auto Knavbarcontent">
                      <li class="nav-item">
                        <a class="nav-link Knavbarcontent" href="courses.html">Courses</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link Knavbarcontent" href="gallery.html">Gallery</a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link Knavbarcontent">Contact Us</a>
                      </li>
                    </ul>
                   
                  </div>
            </div>
        </nav>
<!--============================== Navigation Bar End ===================================--> --}}


{{-- =============================== Products Start ============================ --}}
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 form-group">
                    <h3 id="categories">CATEGORIES</h3>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-6 col-sm-12 form-group">
                    <h3 id="featuredItems">FEATURED ITEMS</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 form-group">
                    <div class="categories">
                        <p>
                            <label class="btn btn-default" data-toggle="collapse" href="#collapse1" aria-expanded="false" aria-controls="collapse1">SPORTSWEAR</label><i class="fa fa-plus btn btn-default" data-toggle="collapse" href="#collapse1" aria-expanded="false" aria-controls="collapse1" aria-hidden="true"></i>
                        </p>
                        <div class="collapse" id="collapse1">
                          <div class="card card-body">
                            1
                          </div>
                        </div>
                        <p><label class="btn btn-default" data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapse2">MEN</label><i class="fa fa-plus btn btn-default" data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapse2" aria-hidden="true"></i></p>
                        <div class="collapse" id="collapse2">
                          <div class="card card-body">
                            2
                          </div>
                        </div>
                        <p><label class="btn btn-default" data-toggle="collapse" href="#collapse3" aria-expanded="false" aria-controls="collapse3">WOMEN</label><i class="fa fa-plus btn btn-default" data-toggle="collapse" href="#collapse3" aria-expanded="false" aria-controls="collapse3" aria-hidden="true"></i></p>
                        <div class="collapse" id="collapse3">
                          <div class="card card-body">
                            3
                          </div>
                        </div>
                        <p><label class="btn btn-default" data-toggle="collapse" href="#collapse4" aria-expanded="false" aria-controls="collapse4">KIDS</label><i class="fa fa-plus btn btn-default" data-toggle="collapse" href="#collapse4" aria-expanded="false" aria-controls="collapse4" aria-hidden="true"></i></p>
                        <div class="collapse" id="collapse4">
                          <div class="card card-body">
                            4
                          </div>
                        </div>
                    </div>
                    <br>
                    <h3 id="brands">BRANDS</h3>
                    <br>
                    <div class="brands">
                        <p>
                            <label class="btn btn-default">HOT</label><span class="badge badge-pill badge-primary pull-right">50</span></p>
                        <p><label class="btn btn-default">SALE</label><span class="badge badge-pill badge-primary pull-right">50</span></p>
                        <p><label class="btn btn-default">ROLEX</label><span class="badge badge-pill badge-primary pull-right">50</span></p>
                        <p><label class="btn btn-default">CASIO</label><span class="badge badge-pill badge-primary pull-right">50</span></p>
                    </div>
                    <br>
                    <h3 id="priceRange">PRICE RANGE</h3>
                    <br>
                    <div class="price">
                        <form method="POST" action="#">
                            <p>
                               <label for="amount"></label>
                               <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
                            </p>
                            <div id="slider-range"></div>
                        </form>    
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 box form-group text-center productCard">
                            <div class="productInfo">
                                <img src="/images/1.jpg" class="watchGrid">
                                <p class="productPrice">$50</p>
                                <p class="productDescription">asdasd</p>
                                <a href="#" class="btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 box form-group text-center productCard">
                            <div class="productInfo">
                                <img src="/images/2.jpg" class="watchGrid">
                                <p class="productPrice">$5</p>
                                <p class="productDescription">asdasd</p>
                                <a href="#" class="btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mr-auto box form-group text-center productCard">
                            <div class="productInfo">
                                <img src="/images/3.jpg" class="watchGrid">
                                <p class="productPrice">$50</p>
                                <p class="productDescription">asdasd</p>
                                <a href="#" class="btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 box form-group text-center productCard">
                            <div class="productInfo">
                                <img src="/images/3.jpg" class="watchGrid">
                                <p class="productPrice">$50</p>
                                <p class="productDescription">asdasd</p>
                                <a href="#" class="btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 box form-group text-center productCard">
                            <div class="productInfo">
                                <img src="/images/3.jpg" class="watchGrid">
                                <p class="productPrice">$50</p>
                                <p class="productDescription">asdasd</p>
                                <a href="#" class="btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 box form-group text-center productCard">
                            <div class="productInfo">
                                <img src="/images/3.jpg" class="watchGrid">
                                <p class="productPrice">$50</p>
                                <p class="productDescription">asdasd</p>
                                <a href="#" class="btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 box form-group text-center productCard">
                            <div class="productInfo">
                                <img src="/images/3.jpg" class="watchGrid">
                                <p class="productPrice">$50</p>
                                <p class="productDescription">asdasd</p>
                                <a href="#" class="btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 box form-group text-center productCard">
                            <div class="productInfo">
                                <img src="/images/3.jpg" class="watchGrid">
                                <p class="productPrice">$50</p>
                                <p class="productDescription">asdasd</p>
                                <a href="#" class="btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 box form-group text-center productCard">
                            <div class="productInfo">
                                <img src="/images/3.jpg" class="watchGrid">
                                <p class="productPrice">$50</p>
                                <p class="productDescription">asdasd</p>
                                <a href="#" class="btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- =============================== Products Start ============================ --}}
    {{-- ========================== Go To Top Button Starts ===================================== --}}
        <button id="buttonTop" class="btn btn-default btn-lg" onclick="goTop();"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
    {{-- ========================== Go To Top Button Ends ===================================== --}}
    <!--============================== Footer Section Starts ===================================-->
        <div class="footerinfo">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <h4>About Us</h4>
                        <br>
                        <p id="footerinfoaboutus">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <h4>Community</h4>
                        <br>
                        <p><a href="#" class="footerlink">Contact Us</a></p>
                        <p><a href="#" class="footerlink">Brands</a></p>
                        <p><a href="#" class="footerlink">Team</a></p> 
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <h4>Others</h4>
                        <br>
                        <p><a href="#" class="footerlink">Privacy Policy</a></p>
                        <p><a href="#" class="footerlink">Terms and Conditions</a></p>
                        <p><a href="#" class="footerlink">Frequently Asked Questions</a></p>
                        <p><a href="#" class="footerlink">Refund Policy</a></p>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <h4>Follow Us @</h4>
                        <br>
                        <a href="#" data-toggle="tooltip" title="Facebook" data-animation="true" data-offset="0 15"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" title="Instagram" data-animation="true" data-offset="0 15"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!--============================== Footer Section Ends ===================================-->

        <!--============================== Copyright Section Starts ===================================-->
        <div class="copyright">
          <div class="container">
            <div class="row">
                <div class="col-md-6">
                  <p>Copyright © 2017 - All Rights Reserved</p>
                </div>
            </div>
          </div>
        </div>
        <!--============================== Copyright Section Ends ===================================-->
    </body>
</html>
