<?php
// Inisialisasi session
session_start();
 
// Cek apakah user sudah login, jika tidak maka alihkan ke halaman login, namun jika iya maka lanjutkan
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
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
    <title>Galaxy Intership <?php echo htmlspecialchars($_SESSION["name"]); ?></title>
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
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.php"><img src="images/Untitled-1.png" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.php">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://socialmediatam.wordpress.com/">Sosial Media</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="gallery.php">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">Contact Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="logut.php">Logut</a>
                                    </li>
                                    <li class="nav-item d_none">
                                        <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    <section class="banner_main">
        <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <!-- <li data-target="#banner1" data-slide-to="0" class="active"></li> -->
                <!-- <li data-target="#banner1" data-slide-to="1"></li>
                <li data-target="#banner1" data-slide-to="2"></li>
                <li data-target="#banner1" data-slide-to="3"></li>
                <li data-target="#banner1" data-slide-to="4"></li> -->
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="row d_flex">
                                <div class="col-md-6">
                                    <div class="text-bg">
                                        <h1>Galaxy <br>Networking</h1>
                                        <p>Hello! we are students and now we're doing industrial work practice in one of the network companies called PT. Berdikari Prima Mandiri. SOOO NICE TO MEET YOU GUYSSS!!</p>
                                        <a href="about.html">About More </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text_img">
                                        <figure>
                                            <img src="images/pct.png" alt="#" />
                                            <h3>01</h3>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="row d_flex">
                                <div class="col-md-6">
                                    <div class="text-bg">
                                        <h1>Galaxy <br>Networking</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                        <a href="#">About More </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text_img">
                                        <figure>
                                            <img src="images/pct.png" alt="#" />
                                            <h3>01</h3>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
        </div>
    </section>
    <!-- end banner -->
    <!-- team -->
    <div class="team">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-5">
                    <div class="team_img">
                        <figure><img src="images/scoI.png" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="titlepage">
                        <h2>Zona TeKaJe
                        </h2>
                        <p>TKJ Adalah singkatan dari Teknik Komputer Jaringan yang merupakan sebuah kejuruan yang mempelajari tentang komputer serta mempelajari jaringan dasar di dunia IT.</p>
                        <h3>PROJECTS COMPLETED</h3>
                        <strong>18 <span class="yellow">+</span></strong>
                        <a class="read_more" href="https://offigalaxynetwork.wordpress.com/"> Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- team -->
        <!-- New Ideas  section -->

    </div>
    <!-- end New Ideas  section -->
    <!--  contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Kontak Team Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form id="request" class="main_form">
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Name" type="type" name="Name">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email" type="type" name="Email">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus1" placeholder="Message" type="type" Message="Name">
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="map">
                        <figure><img src="images/map_img.png" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <img class="logo1" src="images/seoooo.png" alt="#" />
                        <ul class="about_us">
                            <li>If you want to get to know us, click on our social media account below!!</li>
                        </ul>
                        <ul class="social_icon">
                            <li><a href="https://www.bpm.net.id/home"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> -->
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <h3>Useful Link</h3>
                        <ul class="link_menu">
                            <li><a href="login.php">Login / Register</a></li>
                            <li><a href="about.php">Tentang Kami</a></li>
                            <li><a href="contact.php">Kontak Team Kami</a></li>
                        </ul>
                    </div>
                    <div class="col-md-8 offset-md-4 ">
                        <form class="bottom_form">
                            <h3>Newsletter</h3>
                            <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                            <button class="sub_btn">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <p>?? 2022 All Rights Reserved. Design by Galaxy Intership</a>
                            </p>
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
</body>

</html>