<!-- <?php
 $name = $_POST['name'];
 $from = $_POST['email'];
 $number = $_POST['number'];
 $message = $_POST['message'];
 $subject = "Recieved Mail from '$name' '$number' '$from'";
 
 $to = "admin@malwagold.com";
 $headers = "MIME-VERSION: 1.0" . "\r\n";
 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 $headers = "From : <$from> \r\n ";
?> -->


<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>MALWA GOLD</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>

   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="index.php"><h1 style="font-weight: 500; padding: 0px;color: black; ">MALWA GOLD</h1></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <!-- <li class="nav-item">
                        <a class="nav-link" href="services.html">Categories</a>
                     </li> -->
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="shop.html">our products</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="form.php">Enquiry</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact us</a>
                     </li>
                  </ul>
                  <!-- <form class="form-inline my-2 my-lg-0">
                     <h1 class="call_text">Call Us : +01 1234567890</h1>
                  </form> -->
                 
                     <form class="form-inline my-2 my-lg-0">
                        <h1 class="call_text">Call Us : +91-9407179310</h1>
                     </form>
                  
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="costum_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <h1 class="furniture_text">MALWA GOLD</h1>
                     <p class="there_text " style="font-weight: 500;">We provides our ropes to shipping, fishing, aquaculture and climbing etc....</p>
                     <div class="contact_bt_main">
                        <div class="contact_bt"><a href="contact.php">Contact Us</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <h1 class="furniture_text">MALWA GOLD</h1>
                     <p class="there_text"  style="font-weight: 500;">We provide premiun quality products suppliers and exports of Ropes</p>
                     <div class="contact_bt_main">
                        <div class="contact_bt"><a href="contact.php">Contact Us</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <h1 class="furniture_text">MALWA GOLD</h1>
                     <p class="there_text " style="font-weight: 500;">We provides our ropes to shipping, fishing, aquaculture and climbing etc....</p>
                     <div class="contact_bt_main">
                        <div class="contact_bt"><a href="contact.php">Contact Us</a></div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#costum_slider" role="button" data-slide="prev">
               <i class=""><img src="images/left-arrow.png"></i>
               </a>
               <a class="carousel-control-next" href="#costum_slider" role="button" data-slide="next">
               <i class=""><img src="images/right-arrow.png"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">our categories</h1>
            <p class="many_taital">We provide different kinds of Ropes</p>
            <div class="services_section2 layout_padding">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><img src="images/Features1.jpeg"></div>
                     <h2 class="furnitures_text">Manila Rope</h2>
                     <p class="dummy_text">Manila rope is very durable, flexible, and resistant to salt water damage, allowing its use in rope, hawsers, ships' lines, and fishing nets.</p>
                     <div class="read_bt_main">
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><img src="images/Features2.jpeg"></div>
                     <h2 class="furnitures_text">Braided Cotton</h2>
                     <p class="dummy_text">Little Birdie Cotton Braided Cord are 2 Ply, 25mtr long and 3mm thickness. Made from premium quality cotton yarn.Flexible, strong, and easy.</p>
                     <div class="read_bt_main">
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><img src="images/Features3.jpeg"></div>
                     <h2 class="furnitures_text">Black Cotton </h2>
                     <p class="dummy_text">black cotton soil appreciably shrinks during dry season and swells during rainy season. This alternate cycle of shrinking and swelling causes severe .</p>
                     <div class="read_bt_main">
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><img src="images/Features4.jpeg"></div>
                     <h2 class="furnitures_text">Portable Winch</h2>
                     <p class="dummy_text"> Rope is thicker and stronger than similarly constructed cord, string, Flexible, strong, and twine. Made from premium quality cotton yarn.</p>
                     <div class="read_bt_main">
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
 <!-- about section start -->
 <div class="about_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h1 class="about_text">About Us</h1>
            <p class="lorem_text">We, “BL Indurtires” are recognized manufacturers, suppliers and exporters of Monofilament/HDPE Ropes and Polypropylene Rashem Ropes. From Ratlam, Madhya Pradesh (India). With the usage of most dynamic and modern technology we have producing high quality product under the brand name ‘Malwa Gold’.  
               Our offered products are highly demanded in the market for their unmatched quality, perfect finishing, longer service life, high tensile strength which has has given a great reorganization to our brand into the market of HDPE rope market. Our team is not only actively involved in production focus but also constantly working on finding new market opportunities. We are regularly participating into national & international trade fares, exhibitions, conferences etc to get ourselves updated with the latest opportunities onto the market.</p>
            <div class="read_bt1"><a href="#">Read More</a></div>
         </div>
         <div class="col-md-6 my-lg-5">
            <div class="image_1"><img src="images/about.jpg"></div>
         </div>
      </div>
   </div>
</div>
<!-- about section end -->
 <!-- products section start -->
 <div class="projects_section layout_padding" style="padding-bottom: 70px;">
   <div class="container">
      <h1 class="our_text">products</h1>
      <p class="ipsum_text">OUR PRODUCTS</p>
      <div id="main_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="projects_section2">
                  <div class="container_main2">
                     <div class="row"> 
                        <div class="col-sm-4">
                           <div class="container_main1">
                              <img src="images/hdpe_monofilament_rope_small_coil1.jpg" alt="Avatar" class="image" style="width:100%">
                                 <h3 class="temper_text" style="color:black">MonoFilament/HDPE Rope</h3>
                              <!--<h1 class="modern_text" style="color:black">HDPE Rope</h1>-->
                              <div class="middle">
                                 <a href="more3.html"><div class="text">VIEW MORE</div></a>                               </div>
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="container_main1">
                              <img src="images/Plastic-Pp-Sutli1.jpg" alt="Avatar" class="image" style="width:100%">
                                    <h3 class="temper_text" style="color:black">Plastic sutli</h3>
                              <!--<h1 class="modern_text" style="color:black">Polyester Resham Rope</h1>-->
                              <div class="middle">
                                 <a href="more1.html"><div class="text">VIEW MORE</div></a>                               </div>
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="container_main1">
                              <img src="images/rasi1.jpg" alt="Avatar" class="image" style="width:100%">
                                <h3 class="temper_text" style="color:black">POLYESTER RESHAM ROPE</h3>
                              <!--<h1 class="modern_text" style="color:black">MonoFilament Rope</h1>-->
                              <div class="middle">
                                 <a href="more4.html"><div class="text">VIEW MORE</div></a>                               </div>
                           </div>
                        </div>
                       
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="projects_section2">
                  <div class="container_main1">
                     <div class="row">
                        
                        <div class="col-sm-4">
                           <div class="container_main1">
                              <img src="images/s1.jpg" alt="Avatar" class="image" style="width:100%">
                                 
                               <h3 class="temper_text" style="color:black">MonoFilament/HDPE Rope</h3>  
                  
                              <!--<h1 class="modern_text" style="color:black">MonoFilament Rope</h1>-->
                              <div class="middle">
                                <a href="more2.html"><div class="text">VIEW MORE</div></a> 
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="container_main1">
                              <img src="images/plastic22-3.jpg" alt="Avatar" class="image" style="width:100%">
                                 <h3 class="temper_text" style="color:black">Plastic sutli</h3>
                              <!--<h1 class="modern_text"style="color:black">HDPE Rope</h1>-->
                              <div class="middle">
                                 <a href="more5.html"><div class="text">VIEW MORE</div></a>                               </div>
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="container_main1">
                              <img src="images/plastic 3-1.jpg" alt="Avatar" class="image" style="width:100%">
                               <h3 class="temper_text" style="color:black">POLYESTER RESHAM ROPE</h3>
                              <!--<h1 class="modern_text" style="color:black">Polyester Resham Rope</h1>-->
                              <div class="middle">
                                 <a href="more6.html"><div class="text">VIEW MORE</div></a>                               </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      
         </div> 
         <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
         <i class="fa fa-angle-left"></i>
         </a>
         <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
         <i class="fa fa-angle-right"></i>
         </a>
      </div>
   </div>
</div>
<!-- products section end -->

      <!-- furnitures section end -->
      <!-- who section start -->
      <div class="clients_section layout_padding">
      <div class="who_section layout_padding">
         <div class="container">
            <h1 class="who_taital">who we are ?</h1>
            <h4 class="designer_text">we provide different kind of ropes to our clients</h4>
            <p class="lorem_ipsum_text">We, “BL Indurtires ” are recognized manufacturers, suppliers and exporters of Monofilament/HDPE Ropes and Polypropylene Rashem Ropes. From Ratlam, Madhya Pradesh (India). With the usage of most dynamic and modern technology we have producing high quality product under the brand name ‘Malwa Gold’. </p>
         </div>
         <div class="get_bt_main">
            <div class="get_bt"><a href="#">Get A Quote</a></div>
         </div>
      </div>
      <div class="clients_section layout_padding"></div>
      <!-- who section end -->
     
      <!-- client section start -->
      <!-- <div class="clients_section layout_padding">
         <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <h1 class="client_text">what is says our clients</h1>
                     <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                     <div class="clients_section2 layout_padding">
                        <div class="client_1">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img-7.png"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">loksans</h1>
                                 <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit, sed  veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit in voluptate velit</p>
                              </div>
                           </div>
                        </div>
                        <div class="client_2">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img-8.png"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">loksans</h1>
                                 <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit, sed  veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit in voluptate velit</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <h1 class="client_text">what is says our clients</h1>
                     <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                     <div class="clients_section2 layout_padding">
                        <div class="client_1">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img-7.png"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">loksans</h1>
                                 <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit, sed  veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit in voluptate velit</p>
                              </div>
                           </div>
                        </div>
                        <div class="client_2">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img-8.png"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">loksans</h1>
                                 <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit, sed  veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit in voluptate velit</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <h1 class="client_text">what is says our clients</h1>
                     <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                     <div class="clients_section2 layout_padding">
                        <div class="client_1">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img-7.png"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">loksans</h1>
                                 <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit, sed  veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit in voluptate velit</p>
                              </div>
                           </div>
                        </div>
                        <div class="client_2">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img-8.png"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">loksans</h1>
                                 <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit, sed  veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit in voluptate velit</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <h1 class="client_text">what is says our clients</h1>
                     <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                     <div class="clients_section2 layout_padding">
                        <div class="client_1">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img-7.png"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">loksans</h1>
                                 <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit, sed  veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit in voluptate velit</p>
                              </div>
                           </div>
                        </div>
                        <div class="client_2">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="image_7"><img src="images/img-8.png"></div>
                                 <div class="quote_icon"><img src="images/quote-icon.png"></div>
                              </div>
                              <div class="col-sm-9">
                                 <h1 class="loksans_text">loksans</h1>
                                 <p class="dolor_ipsum_text">ipsum dolor sit amet, consectetur adipiscing elit, sed  veniam, quis nostrud exercitation ullamco laboris nisi ut reprehenderit in voluptate velit</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- client section end -->
      <!-- <div class="furnitures_section layout_padding">
         <div class="container">
            <h1 class="our_text">PRODUUCT COMING SOON</h1>
            <p class="ipsum_text" style="font-weight: 600; font-size: 22px;">POLYPROPLENE ROPES (PP ropes)</p>
            <div class="furnitures_section2 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <div class="container_main">
                        <img src="images/p1.jpeg" alt="Avatar" class="image">
                        <div class="overlay">
                           <a href="#" class="icon" title="User Profile">
                           <i class="fa fa-search"></i>
                           </a>
                        </div>
                     </div>
                      <h3 class="temper_text"></h3>  
                  </div>
                  <div class="col-md-6">
                     <div class="container_main">
                        <img src="images/p2.jpeg" alt="Avatar" class="image">
                        <div class="overlay">
                           <a href="#" class="icon" title="User Profile">
                           <i class="fa fa-search"></i>
                           </a>
                        </div>
                     </div>
                     <h3 class="temper_text"></h3> 
                  </div>
                  <div class="col-md-6">
                     <div class="container_main">
                        <img src="images/p3.jpeg" alt="Avatar" class="image">
                        <div class="overlay">
                           <a href="#" class="icon" title="User Profile">
                           <i class="fa fa-search"></i>
                           </a>
                        </div>
                     </div>
                     <h3 class="temper_text"></h3> 
                  </div>
                  <div class="col-md-6">
                     <div class="container_main">
                        <img src="images/p4.jpeg" alt="Avatar" class="image">
                        <div class="overlay">
                           <a href="#" class="icon" title="User Profile">
                           <i class="fa fa-search"></i>
                           </a>
                        </div>
                     </div>
                     <h3 class="temper_text"></h3>
                  
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- furnitures section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="contact_text">CONTACT US</h1>
                  <div class="mail_sectin">
                     <form action="" method="post">
                     <input type="text" class="email-bt" placeholder="Name" name="name" id="name">
                     <input type="text" class="email-bt" placeholder="Email" name="email" id="email">
                     <input type="text" class="email-bt" placeholder="Phone Number" id="number" name="number">
                     <textarea class="massage-bt" placeholder="Message" rows="5"  name="message" id="message"></textarea>
                     <button type="submit" name="submit" style="padding: 5px 20px; margin-top: 10px" class="btn btn-primary">Submit</button>
                     
                     <?php
                     if(isset($_POST['submit']))
                     {
                         if(mail($to,$subject,$message,$headers))
                         {
                             echo "Thanks ! for Mail";
                         }
                         else {
                             echo "Failed To send an email";
                         }
                     }
                     
                     ?>
                  </form>
                  </div>
               </div>
               <div class="col-md-6">
                  <!--<div class="image_9"  ><img src="images/c1.jpg" style="padding-top: 8px; padding-left:16px; padding-right: 88px;" ></div>-->
                  <iframe class="image_9" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3664.504859400693!2d75.07217941497282!3d23.29743448481457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjPCsDE3JzUwLjgiTiA3NcKwMDQnMjcuNyJF!5e0!3m2!1sen!2sin!4v1677938045071!5m2!1sen!2sin" width="600" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <!-- <div class="fooer_logo"><img src="images/footer-logo.png"></div> -->
                  <h1 style="font-size: 40px; font-weight: 800px;">MALWA<br>GOLD</h1>
                  <p class="footer_lorem_text">We, “BL Indurtires ” are recognized manufacturers, suppliers and exporters of Monofilament/HDPE Ropes and Polypropylene Rashem Ropes. From Ratlam, Madhya Pradesh (India). 
                  </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="customer_text">WHY CHOOSE US</h1>
                  <p class="footer_lorem_text">Our offered products are highly demanded in the market for their unmatched quality, perfect finishing, longer service life, high tensile strength which has has given a great reorganization to our brand into the market of HDPE rope market.
                  </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="customer_text"> POPULAR LINKS</h1>
                  <p class="footer_lorem_text1">
                      <a href="index.php">Home</a><br>
                      <a href="about.html">About Us</a><br> 
                      <a href="shop.html">Our Products</a><br>
                      <a href="form.php">Enquiry</a><br>
                      <a href="contact.php">Contact Us</a><br>
                    
                  </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="customer_text">Our Products</h1>
                  <p class="footer_lorem_text">POLYESTER RESHAM ROP <br>
                     PLASTIC SUTLI <br>
                     HDPE ROPE <br>
                    
                  </p>
               </div>
            </div>
            <div class="input-group mb-3">
               <input type="text" class="form-control" placeholder="Enter your email" aria-label="Enter your email" aria-describedby="basic-addon2">
               <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2"><a href="#">Subscribe</a></span>
               </div>
            </div>
         </div>
      </div>
            <a href="https://api.whatsapp.com/send/?phone=919407179310&text&type=phone_number&app_absent=0"  target="_blank" class="whatsapp_float"><i class="fa-brands fa-whatsapp whatsapp-icon"></i></a>

      <!--  footer section end -->
     
       <!-- copyright section start -->
      <div class="copyright_section">
      <div class="container">
         <div class="social_icon">
            <ul>
               <!--<li><a href="#"><img src="images/fb-icon.png"></a></li>-->
               <!--<li><a href="#"><img src="images/twitter-icon.png"></a></li>-->
               <!--<li><a href="#"><img src="images/instagram-icon.png"></a></li>-->
               <!--<li><a href="#"><img src="images/linkedin-icon.png"></a></li>-->
            </ul>
         </div>
         <p class="copyright_text">All Rights Reserved. Design by <a href="">Quality Webs</a></p>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>