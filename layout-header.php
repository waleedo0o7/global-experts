<html dir="<?php if (isset($_GET['dir']))   echo $_GET['dir']; ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->
    <link href="assets/vendors/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- font-awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />

    <!-- Swiper Slider -->
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Fancybox -->
    <link rel="stylesheet" href="assets/vendors/fancybox/jquery.fancybox.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <!-- Custom -->
    <link href="assets/css/style.css" rel="stylesheet">

    <title> Home page </title>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light p-0">

        <a class="navbar-brand p-3" href="home.php">
            <img src="assets/images/logo.svg" class="img-fluid">
        </a>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item active"> <a class="nav-link" href="#">Home</a> </li>
            <li class="nav-item"> <a class="nav-link" href="about-us.php"> About us</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#"> Our brands</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#"> Distribution</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#"> Academy </a> </li>

            <li class="nav-item dropdown d-none">

                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    Order online
                </a>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Link 1</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                </div>

            </li>

            <li class="nav-item"> <a class="nav-link" href="#"> Order online </a> </li>
            
            <li class="nav-item"> <a class="nav-link" href="#"> Careers </a> </li>

            <li class="nav-item"> <a class="nav-link" href="#"> Contact us </a> </li>

            <a class="close-mobile-menu">
                <i class="fa-solid fa-times"></i>
            </a>

        </ul>

        <a class="open-mobile-menu">
            <i class="fa-solid fa-bars"></i>
        </a>

    </nav>