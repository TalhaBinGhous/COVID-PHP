<?php
session_start();

include 'conn.php';
if(isset($_POST["btn"])){

        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $pass = $_POST['pass'];
        $gen = $_POST['ma'];
        $age = $_POST['age'];
        
        
        $sql = "INSERT INTO `dash_user`(`D_Name`, `D_Email`, `D_Password`, `Gender`, `Age`) VALUES ('$name','$email','$pass','$gen','$age');";
     
        $result = mysqli_query($conn,$sql);
        if($result){   
            header('location: login.php');
          }else{
            echo "<script>alert('Failed to Create User')</script>";
          
            header('location: register.php');
          
        }
    }




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
   <link rel="stylesheet" href="../css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="../css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="../css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="../images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="../css/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   <style>
      .gan {
         font-weight: bolder;
         text-transform: uppercase;
         font-size: 17px;
      }

      .mafa {
         font-size: 16px;
         text-transform: uppercase;
      }

      .log-a {
         text-transform: uppercase;
         font-size: 16px;
      }

      .log-a:hover {
         color: red;
      }

      .blob-btn {
         z-index: 1;
         position: relative;
         padding: 20px 46px;
         margin-bottom: 30px;
         text-align: center;
         text-transform: uppercase;
         color: #212121;
         font-size: 16px;
         font-weight: bold;
         background-color: transparent;
         outline: none;
         border: none;
         transition: color 0.5s;
         cursor: pointer;
         border-radius: 30px;
      }

      .blob-btn:before {
         content: "";
         z-index: 1;
         position: absolute;
         left: 0;
         top: 0;
         width: 100%;
         height: 100%;
         border: 2px solid #212121;
         border-radius: 30px;
      }

      .blob-btn:after {
         content: "";
         z-index: -2;
         position: absolute;
         left: 3px;
         top: 3px;
         width: 100%;
         height: 100%;
         transition: all 0.3s 0.2s;
         border-radius: 30px;
         /* background-color: black; */
      }

      .blob-btn:hover {
         color: #FFFFFF;
         border-radius: 30px;
      }

      .blob-btn:hover:after {
         transition: all 0.3s;
         left: 0;
         top: 0;
         border-radius: 30px;
      }

      .blob-btn__inner {
         z-index: -1;
         overflow: hidden;
         position: absolute;
         left: 0;
         top: 0;
         width: 100%;
         height: 100%;
         border-radius: 30px;
         background: #ffffff;
         /* background-color: red; */
      }

      .blob-btn__blobs {
         position: relative;
         display: block;
         height: 100%;
         filter: url("#goo");
      }

      .blob-btn__blob {
         position: absolute;
         top: 2px;
         width: 25%;
         height: 100%;
         background: #333;
         border-radius: 100%;
         /* transform: translate3d(0, 150%, 0) scale(1.7); */
         transition: transform 0.45s;
      }

      @supports (filter: url("#goo")) {
         .blob-btn__blob {
            transform: translate3d(0, 150%, 0) scale(1.4);
         }
      }

      .blob-btn__blob:nth-child(1) {
         left: 0%;
         transition-delay: 0s;
      }

      .blob-btn__blob:nth-child(2) {
         left: 30%;
         transition-delay: 0.08s;
      }

      .blob-btn__blob:nth-child(3) {
         left: 60%;
         transition-delay: 0.16s;
      }

      .blob-btn__blob:nth-child(4) {
         left: 90%;
         transition-delay: 0.24s;
      }

      .blob-btn:hover .blob-btn__blob {
         transform: translateZ(0) scale(1.7);
      }

      @supports (filter: url("#goo")) {
         .blob-btn:hover .blob-btn__blob {
            transform: translateZ(0) scale(1.4);
         }
      }
      .bn{
      width: 200px;
      margin-left: -20px;
   }
   .fwb{
      font-weight: bold;
   }
   </style>

</head>
<!-- body -->

<body class="main-layout inner_page">
   <!-- loader  -->
   <div class="loader_bg">
         <div class="loader"><img src="../images/f6656aa6fdb6b8f905dea0bcc2d71dd8.gif" alt="#"/></div>
      </div>
   <!-- end loader -->
   <!-- top -->
   <!-- header -->
   <?php 
include('nev.php');
?>
   <!-- end header -->

   <!-- contact -->
   <div class="contact">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage text_align_left">
                  <h2>Register</h2>
               </div>
            </div>
         </div>
         <div class="row">

            <div class="col-md-6">
               <form id="request" class="main_form" method="post">
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="contactus text-dark" placeholder="Full Name" type="text" name=" Name" required>
                     </div>
                     <div class="col-md-12">
                        <input class="contactus text-dark" placeholder=" Enter your Email" type="type" name="Email" required>

                     </div>
                     <div class="col-md-12">
                        <input class="contactus text-dark" placeholder="Enter your Password" type="password" name="pass" required>

                     
                     </div>
                     
                     <div class="col-md-12">
                        <input class="contactus text-dark" placeholder="Enter your Age" type="number" name="age" required>

                     </div>
                     <div class="col-md-12">


                        <span class="gan"> Gender:</span>

                        <label for="" class="mafa ms-2">Male:</label>
                        <input type="radio" name="ma" id="" value="male">
                        <label for="" class="mafa ms-2">Female:</label>
                        <input type="radio" name="ma" id="" value="female" class="mafa">

                     </div>
                     
                     <div class="col-md-12">
                        <a href="log.php" class="log-a">I have already account</a>
                     </div>
                     <div class="col-md-12">
                        <button class="blob-btn mt-4" name="btn" type="submit" value="submit">
                           Register Now
                           <span class="blob-btn__inner">
                              <span class="blob-btn__blobs">
                                 <span class="blob-btn__blob"></span>
                                 <span class="blob-btn__blob"></span>
                                 <span class="blob-btn__blob"></span>
                                 <span class="blob-btn__blob"></span>
                              </span>
                           </span>
                        </button>
                        <br />

                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                           <defs>
                              <filter id="goo">
                                 <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
                                 <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
                                 <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                              </filter>
                           </defs>
                        </svg>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-md-6">
               <div class="map-responsive">
                  <img src="../images/about.png" alt="#" />
                  <!-- <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="540" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe> -->
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end contact -->
   <!--  footer -->
   <?php
include('footer.php');
?>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="../js/jquery.min.js"></script>
   <script src="../js/bootstrap.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
   <script src="../js/owl.carousel.min.js"></script>
   <script src="../js/custom.js"></script>
</body>

</html>