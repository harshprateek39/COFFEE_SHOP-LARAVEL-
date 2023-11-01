<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.css">
<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">

    <title>Perk and Palette</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    <body>


    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->



    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky hdr-clr">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <nav class="main-nav flex items-center justify-between w-full  ">
                    <a href="/" class="logo pl-8">
                            <img src="assets/images/logooo.png" class=" h-11 w-11" align="klassy cafe html template">
                            <a class="menu-trigger">
                                
                                <span>Menu</span>
                            </a>
                        </a>
                        <!-- ***** Logo Start ***** -->
                       
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav flex justify-items-stretch bg-red-900 ">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                           
                           <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                           
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                    <li class="scroll-to-section"  >
                    @auth
                <a href="{{url('/showcart',Auth::user()->id)}}">
                   
                    Cart{{$count}}
                </a>
                    @endauth
                    @guest
                    Cart[0]
                    @endguest
                </a></li> 
            <li>
                                
                 @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                      <li class="">
                        <x-app-layout>
                        </x-app-layout>
                      </li>
                    @else
                        <div><li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>

                        @if (Route::has('register'))
                          <li>  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li></div>
                        @endif
                    @endauth
                </div>
            @endif
                      </li>

             </ul>
               
             <!-- <a href="/" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                            <a class="menu-trigger">
                                
                                <span>Menu</span>
                            </a>
                        </a> -->
                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->



    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row gap-2">
                <div class="col-lg-12 h-96 rounded-lg gap-2 flex bg-yellow-50 px-3 py-3">
                    <div class="left-content rounded-3xl ">
                        <div class="inner-content">
                            <h4>Perk & Palette</h4>
                            <h6>Welcome to The Cozy Corner
                                     Coffee Shop, your ultimate destination 
                                     for the finest coffee experience in town.
                                      Nestled in the heart of the city, our charming 
                                      coffee shop is the perfect place to unwind,
                                       socialize, or simply savor a cup of
                                        freshly brewed coffee.</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Book Yours Today!!!</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-12">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-01.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-02.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-03.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>Coffe and Memories</h2>
                        </div>
                        <p>The interior exudes a blend of rustic and modern elements, with exposed brick walls, reclaimed wooden tables, and cozy leather armchairs. Soft jazz melodies play in the background, creating a soothing atmosphere that encourages relaxation and conversation. Large, sun-drenched windows let in natural light, and a collection of potted plants adds a touch of greenery, making it an ideal place to escape the hustle and bustle of city life.</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="https://www.flourandspiceblog.com/wp-content/uploads/2021/04/IMG_3530-500x375.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="https://previews.123rf.com/images/torsakarin/torsakarin1312/torsakarin131200160/24463228-slice-of-grilled-bread-and-coffee.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="data:image/jpeg;base64,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" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="https://png.pngtree.com/background/20230522/original/pngtree-an-industrial-styled-coffee-shop-picture-image_2690167.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->
 




    @include("food")


@include("foodchef")

   

   @include("reservation")

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Klassy Week</h6>
                        <h2>This Week’s Special Meal Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                          <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt="">Breakfast</a></li>
                                          <li><a href='#tabs-2'><img src="assets/images/tab-icon-02.png" alt="">Lunch</a></a></li>
                                          <li><a href='#tabs-3'><img src="assets/images/tab-icon-03.png" alt="">Dinner</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-01.png" alt="">
                                                            <h4>Fresh Chicken Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$10.50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-02.png" alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$8.50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-03.png" alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$9.90</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-04.png" alt="">
                                                            <h4>Eggs Omelette</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$6.50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-05.png" alt="">
                                                            <h4>Dollma Pire</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$5.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-06.png" alt="">
                                                            <h4>Omelette & Cheese</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$4.10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-04.png" alt="">
                                                            <h4>Eggs Omelette</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$14</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-05.png" alt="">
                                                            <h4>Dollma Pire</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$18</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-06.png" alt="">
                                                            <h4>Omelette & Cheese</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$22</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-01.png" alt="">
                                                            <h4>Fresh Chicken Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-02.png" alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$20</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-03.png" alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$30</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-05.png" alt="">
                                                            <h4>Eggs Omelette</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$14</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-03.png" alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$18</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-02.png" alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-06.png" alt="">
                                                            <h4>Fresh Chicken Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$8.50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-01.png" alt="">
                                                            <h4>Dollma Pire</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$9</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-04.png" alt="">
                                                            <h4>Omelette & Cheese</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$11</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>   
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** --> 
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/white-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Klassy Cafe Co.
                        
                        <br>Design: TemplateMo</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>




  
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>



   


  </body>
</html>