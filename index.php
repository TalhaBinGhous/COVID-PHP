<?php
session_start();
include ('auth.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Covido</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<style>
   .bn{
      width: 200px;
      margin-left: -20px;
   }
   .fwb{
      font-weight: bold;
   }
</style>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
         <div class="loader"><img src="images/f6656aa6fdb6b8f905dea0bcc2d71dd8.gif" alt="#"/></div>
      </div>
   <!-- end loader -->
   <!-- top -->
   <!-- header -->
   <?php 
include('nav.php');
?>
   <!-- end header -->
   <div class="full_bg">
      <!-- header inner -->
      <div class="section">
         <!-- carousel code -->
         <div id="banner1" class="carousel slide slider_main">
            <ol class="carousel-indicators ">
               <li data-target="#banner1" data-slide-to="0" class="indicator-li-1">01</li>
               <li data-target="#banner1" data-slide-to="1" class="">02</li>
               <li data-target="#banner1" data-slide-to="2" class="active">03</li>
            </ol>
            <div class="carousel-inner">
               <!-- first slide -->
               <div class="carousel-item active">
                  <div class="carousel-caption cuplle">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="photog">
                                 <h1>Care early<br>Coronavirus</h1>
                                 <a class="read_more" href="action.php">Read More</a>
                                 <a class="read_more" href="about.php">About Us</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- second slide -->
               <div class="carousel-item">
                  <div class="carousel-caption cuplle">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="photog">
                                 <h1>Care early<br>Coronavirus</h1>
                                 <a class="read_more" href="action.php">Read More</a>
                                 <a class="read_more" href="about.php">About Us</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- third slide -->
               <div class="carousel-item">
                  <div class="carousel-caption cuplle">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="photog">
                                 <h1>Care early<br>Coronavirus</h1>
                                 <a class="read_more" href="action.php">Read More</a>
                                 <a class="read_more" href="about.php">About Us</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- controls -->
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
               <i class="fa fa-angle-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
   </div>
   <!-- end banner -->
   <!-- about -->
   <div class="about">
      <div class="container_width">
         <div class="row d_flex">
            <div class="col-md-7">
               <div class="titlepage text_align_left">
                  <h2>About Corona Virus </h2>
                  <p>English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for
                  </p>
                  <a class="read_more" href="about.html">About More</a>
               </div>
            </div>
            <div class="col-md-5">
               <div class="about_img text_align_center">
                  <figure><img src="images/about.png" alt="#" /></figure>
               </div>
            </div>

         </div>
      </div>
   </div>
   <!-- end about -->
   <!-- coronata -->
   <div class="coronata">
      <div class="container">
         <div class="row d_flex grid">
            <div class="col-md-7">
               <div class="coronata_img text_align_center">
                  <figure><img src="images/corona.png" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-5 oder1">
               <div class="titlepage text_align_left">
                  <h2>Coronavirus what it is?</h2>
                  <p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                  </p>
                  <a class="read_more" href="coronata.html">About More</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end coronata -->

   <!-- protect -->
   <div class="protect">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage text_align_center">
                  <h2>How to Protect Yourself</h2>
                  <p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="protect_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <!--  Demos -->
                  <div class="owl-carousel owl-theme">
                     <div class="item">
                        <div class="protect_box text_align_center">
                           <div class="desktop">
                              <i><img src="images/pro1.png"alt="#" /></i>
                              <h3> Wear Mask</h3>
                              <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                           </div>
                           <a class="read_more" href="protect.html">Read More</a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="protect_box text_align_center">
                           <div class="desktop">
                              <i><img src="images/pro2.png"alt="#" /></i>
                              <h3> Wash Your Hands</h3>
                              <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                           </div>
                           <a class="read_more" href="protect.html">Read More</a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="protect_box text_align_center">
                           <div class="desktop">
                              <i><img src="images/pro3.png" alt="#" /></i>
                              <h3> Stay at Home</h3>
                              <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                           </div>
                           <a class="read_more" href="protect.html">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   <!-- end protect -->
   <!-- cases -->
   <div class="cases">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage text_align_center ">
                  <h2>Coronavirus Cases</h2>
                  <p>making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful</p>
               </div>
            </div>
         </div>
         <div class="row d_flex">
            <div class=" col-md-4">
               <div class="latest text_align_center">
                  <figure><img src="images/cases1.png" alt="#" /></figure>
                  <a class="read_more" href="cases.html">Read More</a>
                  <div class="nostrud">
                     <h3>Cases 01</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                  </div>
               </div>
            </div>
            <div class=" col-md-4">
               <div class="latest text_align_center">
                  <figure><img src="images/cases2.png" alt="#" /></figure>
                  <a class="read_more" href="cases.html">Read More</a>
                  <div class="nostrud">
                     <h3>Cases 02</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                  </div>
               </div>
            </div>
            <div class=" col-md-4">
               <div class="latest text_align_center">
                  <figure><img src="images/cases3.png" alt="#" /></figure>
                  <a class="read_more" href="cases.html">Read More</a>
                  <div class="nostrud">
                     <h3>Cases 03</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end cases -->
   <!-- doctors -->
   <div class="doctors">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage text_align_center ">
                  <h2>What doctors say..</h2>
               </div>
            </div>
         </div>
         <div class="row d_flex">
            <div class=" col-md-6">
               <div id="ho_efcet" class="reader text_align_center">
                  <i><img src="images/doctor1.png" alt="#" /></i>
                  <h3>Dr.Golap den</h3>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                  <span><img src="images/do.png" alt="#" /></span>
               </div>
            </div>
            <div class=" col-md-6">
               <div id="ho_efcet" class="reader text_align_center">
                  <i><img src="images/doctor2.png" alt="#" /></i>
                  <h3>Dr.Golap den</h3>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                  <span><img src="images/do.png" alt="#" /></span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end cases -->
   <!-- update -->
   <div class="update">
      <div class="cevery_white">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Get Every Update.... </h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="cevery_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <form id="colof" class="form_subscri">
                     <input class="newsl" placeholder="Your Email" type="text" name="Email">
                     <button class="subsci_btn">Subscribe Now</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- update -->
   <!-- start footer -->
<?php
include('footer.php');
?>

   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>