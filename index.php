<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "es":
    header("Location: ./es/index.html");
     break;        
    default:
        break;
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <link rel="apple-touch-icon" sizes="57x57" href="./favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="./favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="./favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="./favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="./favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="./favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="./favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="./favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="./favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="./favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
<link rel="manifest" href="./favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="./favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Ecuador Treasure</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="css/style.css" rel="stylesheet">
        
        <script src="https://use.fontawesome.com/b123866fa7.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

        <script src='https://www.google.com/recaptcha/api.js'></script>

                 <meta name="description" content="We strive to be the best tourism agency. We are created by love and desire to satisfy your needs. That is why we are doing everything we can to give you an experience of a lifetime. We arrange tailor-made tours to the Andes, the Amazon Jungle and Galapagos." />
    <meta name="keywords" content="quito, adventure, tours, cheap, best, Ecuador Treasure, book hote, book ecuador tours online, galapagos, galapagos islands, amazon, amazon jungle, day tours, avenue of the volcanoes, quilotoa, cotopaxi, bikes, mindo, otavalo, climbing, cayambe, chimborazo, ilinizas, ilinizas hiking, hiking, corazon, ruminahui, cuyabeno, galapagos tours " />

    </head>

    <body>

        <!-- Side Menu -->
        <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
                    <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle">
                        <i class="fa fa-times"></i>
                    </a>
                </li>
                <li class="sidebar-brand">
                    <a href="index.html">Our Treasure</a>
                    <hr>
                </li>
                <li>
                    <a href="#top">Home</a>
                </li>
                <li>
                    <a href="#about">About</a>
                </li>
                <li>
                    <a href="#services">Services</a>
                </li>
                <li>
                    <a href="#dayTours">Tours</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
                 <li>
                    <a href="./es/index.html">Español</a>
                </li>
            </ul>
        </div>
        <!-- /Side Menu -->

        <!-- Full Page Image Header Area -->
        <div id="top" class="header">
            <div class="vert-text parallax">
                <h1 class="header-text"><img src="./img/logo3.png"></h1>
                <h3 class="header-text">
                    <em class="header-text">Book rides, activities, tours, and hotels</em>
                </h3><br/>
                <a href="#about" class="btn header-btn">Find Out More</a>
                <br/>
                
                <div class="top-scroll">
                   <a href="#about"><i class="fa fa-arrow-circle-down scroll"></i></a>
                </div>

            </div>
        </div>
        <!-- /Full Page Image Header Area -->

        <!-- Intro -->
        <div id="about">
            <div class="light-wrapper">
                <div class="container inner">
                    <div class="row">
                        <div class="text-center">
                            <h2 class="main-title">About Us</h2>
                            <hr>
                        </div>
                        <div class="divide50"></div>
                        <div class="col-sm-4">
                          <figure><img src="img/office.jpg" alt="" style="width: 100%;"></figure>
                        </div>
                        <div class="col-sm-8">
                          <h4>Ecuador Treasure</h4>
                          <p>WHY DREAM IT... LIVE IT! We strive to be the best tourism agency. We were created by love and desire to satisfy your needs. That is why we are doing everything we can to give you an experience of a lifetime. We arrange tailor-made tours to the Andes, the Amazon Jungle, and Galapagos. We love what we do so we'll do it great.</p>
                        </div>
                      </div>
                      <div class="divide50"></div>
                      <div class="row">
                        <div class="col-sm-4">
                          <h4>Tailor-made tours</h4><hr>
                          <p>Explore every corner of Ecuador. These are our most popular tours:</p>
                          <div class="divide5"></div>
                          <ul class="progress-list">
                            <li>
                              <p>Galapagos Islands<em>100</em></p>
                              <div class="progress plain">
                                <div class="bar" style="width: 100%;"></div>
                              </div>
                            </li>
                            <li>
                              <p>The Amazon Jungle <em>90</em></p>
                              <div class="progress plain">
                                <div class="bar" style="width: 90%;"></div>
                              </div>
                            </li>
                            <li>
                              <p>Day Tours <em>85%</em></p>
                              <div class="progress plain">
                                <div class="bar" style="width: 85%;"></div>
                              </div>
                            </li>
                            <li>
                              <p>Avenue of the volcanoes<em>83%</em></p>
                              <div class="progress plain">
                                <div class="bar" style="width: 83%;"></div>
                              </div>
                            </li>
                          </ul>
                          <!-- /.progress-list --> 
                        </div>
                        <!-- /.col -->
                        
                        <div class="col-sm-4">
                          <h4>Advantages of vacationing with us</h4><hr>
                          <div class="divide10"></div>
                          <ol class="color">
                            <li>Full travel assistance</li>
                            <li>Several destinations to enjoy</li>
                            <li>Affordable and well-organized trips</li>
                            <li>Customized trips and tours according to our clients’ needs</li>
                            <li>High quality services and experienced guides</li>
                            <li>Great reviews and happy clients</li>
                          </ol>
                        </div>
                        <!-- /.col -->
                        
                        <div class="col-sm-4">
                          <h4>More reasons to choose us</h4><hr>
                          <div class="divide10"></div>
                          <div class="services-2">
                            <div class="icon"> <img src="img/icon_you.png" data-src="style/images/icons/icon_you.png" data-ret="style/images/icons/icon_you@2x.png" class="retina" alt="" /> </div>
                            <!-- /.icon -->
                            <div class="text">
                              <h5>Built for you</h5>
                              <p>We can make tours just for your group</p>
                            </div>
                            <!-- /.text -->
                            <div class="divide20"></div>
                            <div class="icon"> <img src="img/unit_services_icon.png" data-src="style/images/icons/unit_services_icon.png" data-ret="style/images/icons/unit_services_icon@2x.png" class="retina" alt="" /> </div>
                            <!-- /.icon -->
                            <div class="text">
                              <h5>Separate Services</h5>
                              <p>Want to book the tour but not the ride with us or viceversa? You can do it here</p>
                            </div>
                            <!-- /.text -->
                            <div class="divide20"></div>
                            <div class="icon"> <img src="img/language_icon.png" data-src="style/images/icons/language_icon.png" data-ret="style/images/icons/language_icon@2x.png" class="retina" alt="" /> </div>
                            <!-- /.icon -->
                            <div class="text">
                              <h5>We speak your laguage</h5>
                              <p>If your language is Spanish or English =)</p>
                            </div>
                            <!-- /.text --> 
                            
                          </div>
                          <!-- /.services-2 --> 
                          
                        </div>
                        <!-- /.col --> 
                        
                      </div>
                      <!-- /.row --> 
                      
                    </div>
                    <!-- /.container --> 
                  </div>
                  <!-- /.light-wrapper -->
                </div>
        <!-- /Intro -->

        <!-- Services -->
        <div id="services" class="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center">
                        <h2 class="main-title">Our Services</h2>
                        <hr>
                    </div>
                </div>

                <a href="#dayTours">
                <div class="divide50"></div>
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="service-item">
                            <i class="service-icon fa fa-bus" style="color:#FFFFFF"></i>
                            <h4 class="service-title" style="color:#FFFFFF">Day Tours</h4>
                            <!--
                            <p class="service-desc">Don't settle for any transportation. Trust the best, trust the Ecuador Treasure</p>
                            -->
                        </div>
                    </div>
                </a>


                <a href="#climbingAndHiking">
                    <div class="col-md-3 text-center">
                        <div class="service-item">
                            <i class="service-icon fa fa-flag" style="color:#FFFFFF"></i>
                            <h4 class="service-title" style="color:#FFFFFF">Climbing and Hiking</h4>
                            <!--
                            <p class="service-desc">We do not offer the best prices in the business. But we don't want to offer you any service. We want to give you excellent service at a fair price. </p>
                            -->
                        </div>
                    </div>
                </a>






                    <a href="#amazonTrips">
                    <div class="col-md-3 text-center">
                        <div class="service-item">
                            <i class="service-icon fa fa-leaf" style="color:#FFFFFF"></i>
                            <h4 class="service-title" style="color:#FFFFFF">Amazon Trips</h4>
                            <!--
                            <p class="service-desc">Even if you go to the same area. The experience it's not the same without good companionship and the best guides.</p>
                            -->
                        </div>
                    </div>
                    </a>




                    <a href="#GalapagosLandTours" >
                    <div class="col-md-3 text-center">
                        <div class="service-item">
                            <i class="service-icon fa fa-ship" style="color:#FFFFFF"></i>
                            <h4 class="service-title" style="color:#FFFFFF">Galapagos Land Tours</h4>
                            <!--
                            <p class="service-desc">We understand sometimes you don't carry cash. That's why we accept Credit cards, debit cards, Payoneer and PayPal</p>
                            -->
                        </div>
                    </div>
                    </a>

                </div>
            </div>
        </div>
        <!-- /Services -->

        <!-- Callout -->

        <div class="callout">
            <div class="vert-text">
                <h1 class="main-title parallax2">Best Guides in Town</h1>
            </div>

        </div>
        <!-- /Callout -->

        <!-- Portfolio -->

        <div id="dayTours" class="places">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center">
                        <h2 class="main-title">Day Tours</h2>
                        <hr >
                    </div>
                </div>
            </div>  
            <div class="divide50"></div>  
            <div class="container">
                <div class="row">
                    
                    <a href="quilotoa_one_day.html" >
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/quilotoa.jpg" alt="Climbing" class="img-responsive center-block" >
                                <figcaption>
                                    <h2>QUILOTOA LAGOON  - 1 DAY</h2>
                                    <p class="description">
                                        Quilotoa is an exotic volcano with a beautiful lagoon inside its crater.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                    </a>


                    <a href="cotopaxi_bikes.html" >
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/cotopaxiBikes.jpg" alt="cotopaxiBikes" class="img-responsive center-block">
                                <figcaption>
                                    <h2>COTOPAXI BIKES - 1 DAY</h2>
                                    <p class="description">
                                        Cotopaxi National Park tour is an exciting day that begins with spectacular views of the Andean landscape in the Avenue of the Volcanoes. 
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                </a>

            </div>



            <div class="row">


                 <a href="mindo_one_day.html" >
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/mindo.jpg" alt="mindo" class="img-responsive center-block">
                                <figcaption>
                                    <h2>EXPLORE MINDO - 1 DAY</h2>
                                    <p class="description">
                                        Get to the cloud forest of Ecuador. Northwest of Quito you will find Mindo, the hummingbirds’ homeland.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                </a>


                 <a href="otavalo_one_day.html" >
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/otavalo.jpg" alt="otavalo" class="img-responsive center-block">
                                <figcaption>
                                    <h2>OTAVALO MARKET - 1 DAY</h2>
                                    <p class="description">
                                         After a two hours drive from Quito you'll find yourself at the most famous indigenous market of Ecuador: Otavalo, full of traditions and handicrafts.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>



                <div id="climbingAndHiking" class="places">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center">
                        <h2 class="main-title">Climbing and Hiking</h2>
                        <hr>
                    </div>
                </div>
            </div>  
            <div class="divide50"></div>  
            <div class="container">
                <div class="row">

                    <a href="cotopaxi_climbing_two_days.html" >
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/cotopaxiBikes2.jpg" alt="cotopaxiClimbing" class="img-responsive center-block">
                                <figcaption>
                                    <h2>COTOPAXI CLIMBING - 2 DAYS</h2>
                                    <p class="description">
                                        Climbing Cotopaxi volcano is a unique and exciting experience. This adventure starts at the parking lot of Cotopaxi National Park (4600 m / 15092 ft.) with a hike to the refuge.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                </a>   



                    <a href="cayambe_two_days.html" >
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/cayambe.jpg" alt="cayambe" class="img-responsive center-block">
                                <figcaption>
                                    <h2>CAYAMBE CLIMBING - 2 DAYS</h2>
                                    <p class="description">
                                        Climbing Cayambe volcano is a challenging experience. This adventure starts at the parking lot of the Cayambe Ecological Reserve (4800 m / 15092 ft.) with a hike to the refuge.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                </a>


                </div>



                <div class="row">


                     <a href="chimborazo_climbing_two_days.html" >
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/chimborazo.jpg" alt="chimborazo" class="img-responsive center-block">
                                <figcaption>
                                    <h2>CHIMBORAZO CLIMBING - 2 DAYS</h2>
                                    <p class="description">
                                         Chimborazo volcano is located at 150 Km southwest of Ecuador’s capital city. It is the highest mountain of both the country and the Andes, having an elevation of 6310 m.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                </a>



                <a href="ilinizas_climbing_south.html" >
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/ilinizas2.jpg" alt="ilinizasClimbingSouth" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Ilinizas Climbig South - 2 Days</h2>
                                    <p class="description">
                                        Ilinizas is an historical volcano located on the south of Quito. From this mega volcano, after the last eruption, the mountain got destroyed creating two peaks, the Ilinizas North and South.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                </a>     
                


                </div>



                <div class="row">
                
                <a href="ilinizas_climbing_north.html" >
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/ilinizas.jpg" alt="ilinizasClimbingNorth" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Ilinizas Hiking - 1 Day</h2>
                                    <p class="description">
                                        Ilinizas is an historical volcano located on the south of Quito. From this mega volcano, after the last eruption, the mountain got destroyed creating two peaks, the Ilinizas North and South.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                </a>     



                 <a href="corazon_hiking.html" >
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/corazon.jpg" alt="corazon" class="img-responsive center-block">
                                <figcaption>
                                    <h2>CORAZON HIKING - 1 DAY</h2>
                                    <p class="description">
                                        This extinct volcano is located south of Quito, in the Avenue of the Volcanoes. On the east side of this volcano you can find many crops spots.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                </a>

                </div>



                <div class="row">


                  <a href="pasochoa_hiking.html" >
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/pasochoa.jpg" alt="pasochoa" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Pasochoa Hiking - 1 Day</h2>
                                    <p class="description">
                                        This extinct volcano is one of the best options for watching the Andean Condor, not to mention the many species of hummingbirds that can be found in the region.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                </a>  




                                 <a href="ruminahui_hiking.html" >
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/ruminahui.jpg" alt="pasochoa" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Ruminahui Hiking - 1 Day</h2>
                                    <p class="description">
                                        With 3 different elevations, Rumiñahui is one of the most impressive volcanoes in Ecuador. 
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                </a>          

                </div>

        </div>
    </div>








             <div id="amazonTrips" class="places">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center">
                        <h2 class="main-title">Amazon Tours</h2>
                        <hr>
                    </div>
                </div>
            </div>  
            <div class="divide50"></div>  
            <div class="container">
                <div class="row">

                <a href="guacamayo_four_days.html" >
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/guacamayo.jpg" alt="guacamayo" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Cuyabeno Faunistic Reserve - 4 Days</h2>
                                    <p class="description">
                                        Sustainable tourism that benefits directly local communities in the reserve.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                </a>                                       

                </div>
            </div>
        </div>







            <div id="GalapagosLandTours" class="places">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center">
                        <h2 class="main-title">Galapagos Land Based tours</h2>
                        <hr>
                    </div>
                </div>
            </div>  
            <div class="divide50"></div>  
            <div class="container">


                 <div class="row">

                    <a href="galapagos_four_days.html" >
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/galapagos.jpg" alt="galapagos" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Galapagos Islands - 4 Days</h2>
                                    <p class="description">
                                        The Galápagos Islands will make you dream, love and respect nature.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                </a>                       


                <a href="galapagos_five_days.html" >
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/galapagos1.jpg" alt="pasochoa" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Galapagos Islands - 5 Days</h2>
                                    <p class="description">
                                        The Galápagos Islands will make you dream, love and respect nature.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                </a>                 
                    

                </div>






                <div class="row">

                    <a href="galapagos_six_days.html" >
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/galapagos2.jpg" alt="galapagos" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Galapagos Islands - 6 Days</h2>
                                    <p class="description">
                                        The Galápagos Islands will make you dream, love and respect nature.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                </a>                       


                <a href="galapagos_six_days1.html" >
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/galapagos3.jpg" alt="galapagos" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Galapagos Islands - 6 Days San Cristobal</h2>
                                    <p class="description">
                                        The Galápagos Islands will make you dream, love and respect nature.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                </a>                 
                    

                </div>







                <div class="row">

                    <a href="galapagos_eight_days.html" >
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/galapagos4.jpg" alt="galapagos" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Galapagos Islands - 8 Days</h2>
                                    <p class="description">
                                        The Galápagos Islands will make you dream, love and respect nature.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                </a>                       


                <a href="galapagos_eight_days1.html" >
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="img/galapagos5.jpg" alt="galapagos" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Galapagos Islands - 8 Days San Cristobal</h2>
                                    <p class="description">
                                        The Galápagos Islands will make you dream, love and respect nature.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                </a>                 
                    

                </div>










                </div>
            </div>
        </div>

        <!-- /Portfolio -->

        <!-- Call to Action -->
        <div class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h3>Book your ride to your next destination now!</h3>
                        <a href="#contact" class="btn booking-btn text-center" data-toggle="modal">Click for Booking !</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Call to Action -->

        <!-- Contact Section -->
        <div id="contact" class="container parallax">
                <div class="col-md-4 col-md-offset-4 text-center">
                <h2 class="main-title">Contact Us</h2> <br>
                <h3>Main</h3>
                <h4>Joaquin Pinto E4-289 y Av. Amazonas</h4>
                <h4>Edificio Saldaña 6th floor</h4>
                <br><br>
                <h3>Branch</h3>
                <h4>Jose Anteparra E4-27 y Vicente Leon</h4>
                <br><br>
                <h4>2559919 - 2282587</h4>
                <h4>info@ecuadortreasure.com</h4>
                <hr>
                <div class="divide50"></div>

            </div>
            <!-- Contact Inner -->
            <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="contact_form_handler.php">
                        <!-- Left Inputs -->
                        <div class="col-xs-6 col-xs-12 animated" data-animation="fadeInLeft" data-animation-delay="300">
                            <!-- Name -->
                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                            <!-- Email -->
                            <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
                                    <div class="g-recaptcha" data-sitekey="6LfCsC4UAAAAANk6zKISJTM7KzY14Rg5Ul7kquAz"></div>
                            
                        </div><!-- End Left Inputs -->


                        <!-- Right Inputs -->
                        <div class="col-xs-6 col-xs-12 animated" data-animation="fadeInRight" data-animation-delay="400">
                            <!-- Message -->
                            <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <br><br>
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button> 
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                    <!-- Your Mail Message -->
                    <div class="mail-message-area">
                        <!-- Message -->
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>Thank You !</strong> Your email has been delivered.
                        </div>
                    </div>

                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->
        </div><!-- End Contact Section -->
        
        <div class="map">
            <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.8968460795916!2d-78.49405146669493!3d-0.20131562700570438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMMKwMTInMDQuMyJTIDc4wrAyOSczNS40Ilc!5e0!3m2!1sen!2sec!4v1534958727320"></iframe>
        </div>
        <!-- /Map -->

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/ecuador.treasure/" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/treasureecuador?lang=en" target="_blank" ><i class="fa fa-twitter"></i></a>    
                            </li>
                            <li>
                                <a href="https://www.instagram.com/ecuadortreasure/" target="_blank" ><i class="fa fa-instagram"></i></a>    
                            </li>
                        </ul>
                        <hr>
                        <p><a href="http://ecuadortreasure.com/" style="color:#FFFFFF;">EcuadorTreasure.com</a>  2018</p>
                        <div class="top-scroll">
                            <a href="#top"><i class="fa fa-arrow-circle-up scroll" style="color:#FFFFFF;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /Footer -->

        <!-- begin:booking -->
        <div class="modal fade" id="booking" tabindex="-1" role="dialog" aria-labelledby="booking" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Online Booking Form</h4>
                    </div>
                    <div class="modal-body">
                        <form action = "contact-form-handler.php" method="post" name="contact-form" role="form">
                            <div class="form-group">
                                <label for="emailAddress">Email address</label>
                                <input id="email" name="email" type="email" class="form-control input-lg" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control input-lg" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="country">Which country do you want to travel?</label>
                                <select class="form-control" id="country">
                                    <option>Australia</option>
                                    <option>Bangladesh</option>
                                    <option>England</option>
                                    <option>France</option>
                                    <option>U.S.A</option>
                                </select>
                            </div>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn confirm-btn" value="Confirm">
                    </div>
                </div>
            </div>
        </div>
        <!-- end:booking -->

        <!-- JavaScript -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>

        <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
        <script>
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
        </script>
        <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
        </script>
        <script>
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
        </script>

        <!-- modal -->

        <script>

            $('.modal').on('shown.bs.modal', function () {
                var curModal = this;
                $('.modal').each(function(){
                    if(this != curModal){
                        $(this).modal('hide');
                    }
                });
            });

        </script>




        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a5ce5fed7591465c706c416/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    </body>
</html>