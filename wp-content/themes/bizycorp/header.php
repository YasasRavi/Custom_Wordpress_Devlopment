<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Abingdon Smiles</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO Meta Tags -->
    <meta name="description" content="Abingdon Smiles offers gentle, patient-centered dental care in Abingdon. We provide personalized treatment plans, advanced dental technology, and a welcoming atmosphere.">
    <meta name="keywords" content="Abingdon dentist, dental clinic Abingdon, cosmetic dentistry, family dentistry, oral care, dental services, teeth cleaning, smile makeover, dental implants">
    <meta name="author" content="Abingdon Smiles Dental Clinic">

    <?php
        wp_head();
    ?>
</head> 

<body>
    <header class="header"  id="header">
        <div class="main-header-outer">
            <div class="container">
                <div class="main-header">
                    <div class="logo-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Biggio Logo">
                    </div>
                    <ul class="navbar-nav menu-box">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ABOUT US
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                SERVICES
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PATIENT INFO
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SUCCESS STORIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">GALLERY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">PAY ONLINE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACT</a>
                        </li>
                    </ul>
                    <a href="#" class="phone-btn">Let’s Talk Now</a>
                    <a href="#" class="request-btn">BOOK AN APPOINTMENT</a>
                    <button class="nav-toggle-btn" onclick="openNav()">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>	    
        </div>
    </header>
    
        <!-- Side Panel -->
    <div id="side-panel" class="side-panel">
        <button onclick="closeNav()" class="close-btn">&times;</button>
        <ul class="side-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">HOME</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ABOUT US
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    SERVICES
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    PATIENT INFO
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">SUCCESS STORIES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">GALLERY</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">PAY ONLINE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
            </li>
        </ul>

        <div class="mt-5 mb-4 text-center">
            <a href="#" class="phone-btn-side">Let’s Talk Now</a>
        </div>
        <div class="text-center">
            <a href="#" class="request-btn-side">BOOK AN APPOINTMENT</a>
        </div>
        
    </div>

    <!-- Overlay -->
    <div class="offnav-overlay"></div>
