
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
<header class="header-area">
   <style>
      .header-area {
         .container{
            padding-left: 100px;
         }
      }

   </style>
      <div class="left">
         <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
      </div>
      <div class="right">
         <a href="Javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i></a>
      </div>
      <div class="container">
         <div class="row d_flex">
            <div class="col-sm-2 logo_sm">
               <div class="logo">
                  <a href="index.html"></a>
               </div>
            </div>
            <div class="col-lg-12 offset-lg-1 col-md-12 col-sm-8">
               <div class="navbar-area">
                  <nav class="site-navbar short">
                     <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>

                        <li><a href="index.php" class="logo_midle">covido</a></li>
                        <li><a href="news.php">news</a></li>
                        <li><a href="doctores.php">doctors</a></li>
                        <?php
                        if (!isset($_SESSION['P_id'])) {



                        ?>
                           <li><a href="register.php">Register</a></li>
                           <li><a href="login.php">Login</a></li>
                        <?php

                        } else {
                        ?>
                           <li><a href="book.php" >Test</a> </li>
                           <li><a href="vaccine.php" >Vaccination</a> </li>
                           <li><a href="logout.php" >logout</a></li>
                        <?php

                        } ?>
                           
                          


                     </ul>
                     <button class="nav-toggler">
                        <span></span>
                     </button>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </header>
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/custom.js"></script>
