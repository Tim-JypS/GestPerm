<!-- Start Navbar Area -->

<!-- Main Banner -->
<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="index.php" class="logo">
            <img src="assets/img/logo.png" alt="Logo" style="width: 12em; height: auto;">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav top-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo.png" alt="Logo"  style="width: 12em; height: auto;">
                </a>
                <a class="navbar-brand-sticky" href="index.php" style="width: 12em; height: auto;">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="./" class="nav-link<?php if($Page=="acc") echo " active"?>">
                                Accueil 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="annonces.php" class="nav-link<?php if($Page=="ann") echo " active"?>">
                                Annonces
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="<?php if($Page=="con") echo " active"?>">
                                Contact
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="abpout.php" class="nav-link">
                                Contact
                            </a>
                        </li> -->
                    </ul>

                    <?php if(isset($_SESSION["auth"]["status"]) && $_SESSION["auth"]["status"]): ?>
                        <ul class="nav navbar-nav navbar-right nav-avatar">
                            <li class="dropdown" style="width: 12em;">
                                <a href="" data-toggle="dropdown" class="dropdown-toggle user-action"><img src="https://www.tutorialrepublic.com/examples/images/avatar/2.jpg" class="avatar rounded-circle" width="40" height="40" alt="Avatar"> Paula Wilson <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="admin/profile.php"><i class="fa fa-user-o"></i> Profil</a></li>
                                    <li class="divider"></li>
                                    <li><a href="deco.php"><i class="fa fa-sign-out"></i>Déconnexion</a></li>
                                </ul>
                            </li>
                        </ul>
                    <?php else: ?>
                        <div class="menu-btn">
                            <a href="login.php" class="seo-btn">Connexion</a>
                        </div>
                        <div class="menu-btn">
                            <a href="register.php" class="seo-btn">S'enregistrer</a>
                        </div>
                    <?php endif; ?>
                </div>
            </nav>
        </div>
    </div>
</div>
        <!-- Main Banner End -->



<?php /*
<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="index.php" class="logo">
            <img src="assets/img/logo.png" alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav top-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo.png" alt="Logo">
                </a>
                <a class="navbar-brand-sticky" href="index.php">
                    <img src="assets/img/sticky-logo.png" alt="Logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Home 
                                <i class='bx bxs-chevron-right'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link">
                                        Home One 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-two.php" class="nav-link">
                                        Home Two
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-three.php" class="nav-link">
                                        Home Three
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Pages 
                                <i class='bx bxs-chevron-right'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="members.php" class="nav-link">
                                        Members
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="portfolio.php" class="nav-link">
                                        Portfolio
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pricing.php" class="nav-link">
                                        Pricing
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="404.php" class="nav-link">
                                        404 Page
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="faq.php" class="nav-link">
                                        FAQ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="sign-in.php" class="nav-link">
                                        Sign In
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="sign-up.php" class="nav-link">
                                        Sign Up
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="recover-password.php" class="nav-link">Recover Password</a>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-condition.php" class="nav-link">
                                        Terms & Conditions
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.php" class="nav-link">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Level 1
                                        <i class="bx bx-chevron-right"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Level 2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Level 2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Level 2
                                                <i class="bx bx-chevron-right"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">Level 3</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link">Level 3</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Services 
                                <i class='bx bxs-chevron-right'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="services.php" class="nav-link">
                                        Services 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="service-details.php" class="nav-link">
                                        Service Details 
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="testimonial.php" class="nav-link">
                                Testimonial
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Blog 
                                <i class='bx bxs-chevron-right'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog.php" class="nav-link">
                                        Blog
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-details.php" class="nav-link">
                                        Blog Details 
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link active">
                                Contact
                            </a>
                        </li>
                    </ul>

                    <div class="menu-btn">
                        <a href="#" class="seo-btn">SEO Score</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>*/
?>
<!-- End Navbar Area -->
