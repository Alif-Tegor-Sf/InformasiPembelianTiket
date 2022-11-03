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
      <title>Tiket Online</title>
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
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="Home"><img src="images/bukit_tinggilogo1.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="header_information">
                     <a href="Home"><img src="images/coba2.jpg" alt="#" /></a>
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item active">
                                    <a class="nav-link" href="Home">Home</a>
                                 </li> 
                                 <li class="nav-item">
                                    <a class="nav-link" href="Pemesanan">Pemesanan</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="Pembayaran">Pembayaran</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="Cetak">Cetak</a>
                                 </li>
                              </ul>
                              <div class="sign_btn"><a href="/login">Admin</a></div>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
         </ol>
         <div class="row">
            <div class="carousel-item active">
               <img class="first-slide" src="images/gambar1.jpg" alt="First slide">
               <div class="container">
                  <div class="carousel-caption relative">
                     <!-- <h1> <span>We Provide</span> Web Services</h1> -->
                     <!-- <a href="#Pemesanan">Pemesanan</a> -->
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <img class="second-slide" src="images/image5.jpg" alt="Second slide">
               <div class="container">
                  <div class="carousel-caption relative">
                     <h1> <span></span>PETUNJUK WISATA BUKIT TINGGI</h1>
                     <!-- <a href="#Pemesanan">Pemesanan</a> -->
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <img class="third-slide" src="images/gambar3.jpg" alt="Third slide">
               <div class="container">
                  <div class="carousel-caption relative">
                     <h1> <span></span>SELAMAT DATANG PENGUNJUNG BUKIT TINGGI</h1>
                     <!-- <a href="#Pemesanan">Pemesanan</a> -->
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <img class="third-slide" src="images/image3.jpg" alt="four slide">
               <div class="container">
                  <div class="carousel-caption relative">
                     <h1> <span></span>SPOT FOTO WISATA BUKIT TINGGI</h1>
                     <!-- <a href="# Pemesanan">Pemesanan</a> -->
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <img class="third-slide" src="images/image4.jpg" alt="five slide">
               <div class="container">
                  <div class="carousel-caption relative">
                     <h1> <span></span> HOME LOVE</h1>
                     <!-- <a href="#Pemesanan">Pemesanan</a> -->
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>
      <!-- about -->
      <div id="about"  class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>Booking Online Wisata Bukit Tinggi</h2>
                     <span></span>
                     <p>
Booking online selama 24 jam. cermati tata cara dan aturan sesuai dengan prosedur yang sudah ditetapkan, disarankan untuk booking dan pembayaran dilakukan jauh hari sebelum tanggal keberangkatan.</p>
                     <a href="Pemesanan" class="read_more">PESAN SEKARANG<i aria-hidden="true"></i></a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="images/about_img.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
     
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row border-top">
                  <div class="col-md-6 padding_bottom1   ">
                     <!-- <h3>Subscribe Now</h3>
                     <form class="footer_form">
                        <input class="enter" placeholder="Enter your email" type="type" name="Enter your email">
                        <button class="submit">submit</button>
                     </form>
                  </div>
                  <div class="col-md-6">
                     <div class="row">
                        <div class="col-md-5 offset-md-1 padding_bottom1">
                           <h3>Links</h3>
                           <ul class="cont">
                              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </li>
                           </ul>
                        </div>
                        <div class="col-md-5 offset-md-1">
                           <h3>Contact us</h3>
                           <ul class="cont">
                              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </li>
                           </ul> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2022 WISATA BUKIT TINGGI SUMENEP MADURA</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
    
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

