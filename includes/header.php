<?php 
   $base_url = str_replace("\\", "/", dirname($_SERVER['SCRIPT_NAME']));

    // $port =  $_SERVER['SERVER_PORT'];
    // $server = $_SERVER['SERVER_NAME'] . ":" . $port;

    // // $base_url = dirname(dirname(__FILE__));
    // $base_url = $server."/MR%20Olatunji";
  // echo $base_url;

   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="    https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title><?=isset($title) ? $title : 'Family Affairs'; ?></title>
    <link rel="shortcut icon" href="assets/img/logo/Frame2.png" />

    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js" integrity="sha512-f5HTYZYTDZelxS7LEQYv8ppMHTZ6JJWglzeQmr0CVTS70vJgaJiIO15ALqI7bhsracojbXkezUIL+35UXwwGrQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W5F38NZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <main class="container-fluid p-0">
        <header class="py-2">
            <!-- Header Holding the Logo and the nav bars -->
<!-- 
            <div class="row justify-content-end m-0">
                <div class="col-6 text-capitalize text-center">
                    <p class="call-assistance text-secondary">need a counsellor? call : +1-862-888-0136</p>
                </div>
            </div> -->

            <div class="row">            
                <div class="col-6 col-md-6 col-sm-6 pl-6">
                    <!-- The Logo -->
                    <img src=" assets/img/logo/LogoMakr-4tS4wl.png" class="logo" alt="Family and Marriage Counselling Affairs">
                </div>

                <div class=" col-6 col-md-6 col-lg-6">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link text-danger" href=" index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-danger" href=" about_me.php">About<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-danger" href="https://blog.realfamilyaffairs.com/"> Blog <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-danger" href=" contact_me.php">Contact <span class="sr-only">(current)</span></a>
                                </li>
                            </ul>                         
                        </div>
                    </nav>
                    <div class="responsive-menu text-right pr-4">
                        <span><i class="bi bi-list"></i></span>
                    </div>                    
                </div>
            </div>   
        </header>

        <div class="responsive-menu-list bg-white">
            <ul class="nav flex-column">
                <li class="nav-item responsive-item">
                    <a href=" index.php" class="navlink"> Home</a>
                </li>
                <li class="nav-item responsive-item">
                    <a href=" about_me.php" class="navlink">About</a>
                </li>
                <li class="nav-item responsive-item">
                 <a href="https://blog.realfamilyaffairs.com/"> Blog </a>
                </li>
                <li class="nav-item responsive-item">
                    <a href="contact_me.php" class="navlink"> Contact us</a>
                </li>
            </ul>
        </div>
       

