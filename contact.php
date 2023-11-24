<?php
 $name = $_POST['name'];
 $from = $_POST['email'];
 $number = $_POST['number'];
 $message = $_POST['message'];
 $content = "Name = '$name'  \n Email = '$from' \n Phone = '$number' \n Message = '$message' \n";
 $subject = "Recieved Mail from '$name'";
 
 $to = "admin@malwagold.com";
 $headers = "MIME-VERSION: 1.0" . "\r\n";
 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 $headers = "From : <$from> \r\n ";


?>

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
      <title>Contact</title>
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
               <div class="logo"><a href="index.php"><h1 style="font-weight: 500; padding: 0px; color: black;">MALWA GOLD</h1></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-lg-auto" style="font-size: 30px;">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <!-- <li class="nav-item">
                        <a class="nav-link" href="services.html">Categories</a>
                     </li> -->
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="shop.html">Our products</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="form.html">Enquiry</a>
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
      <!-- contact section start -->
     
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="contact_text">CONTACT US</h1>
                  <div class="mail_sectin">
                     <form action="" method="post">
                     <input type="text" class="email-bt" placeholder="Name" name="name" required id="name">
                     <input type="text" class="email-bt" placeholder="Email" name="email" required id="email">
                     <input type="text" class="email-bt" placeholder="Phone Number" id="number" required name="number">
                     <textarea class="massage-bt" placeholder="Message" rows="5"  name="message" id="message"></textarea>
                     <button type="submit" name="submit" required class="btn btn-primary">Submit</button>
                     
                     <?php
                     if(isset($_POST['submit']))
                     {
                         if(mail($to,$subject,$content,$headers))
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
                      <a href="form.html">Enquiry</a><br>
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