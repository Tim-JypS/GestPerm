<?php
    require("inc/config.php");
    $Page="acc";
    $PageTitle=SITENAME." - Accueil";
?>

<!doctype html>
<html lang="fr">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <?php require("inc/links.php");?>

        <!-- Title -->
        <title><?=$PageTitle?></title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>

    <body>
        
        <?php require("inc/preloader.php");?>

        <!-- Start Navbar Area -->
        <?php require("inc/header.php");?>
        <!-- End Navbar Area -->

        <?php require("inc/banniere.php");?>

        <!-- Brand Area -->
        <div class="brand-area brand-bg ptb-100">
            <div class="container">
                <div class="brand-slider owl-carousel owl-theme">
                    <div class="brand-item">
                        <a href="#">
                            <img src="assets/img/brand/1.png" alt="Brand Images">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="assets/img/brand/2.png" alt="Brand Images">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="assets/img/brand/3.png" alt="Brand Images">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="assets/img/brand/4.png" alt="Brand Images">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="assets/img/brand/5.png" alt="Brand Images">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End -->

        <!-- About Area -->
        <div class="about-area pt-100 pb-70">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5 pl-0">
                        <div class="about-img">
                            <img src="assets/img/about/1.png" alt="About Images">
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="about-content about-width">
                            <span>About Us</span>
                            <h2>We Are Helping People to Reach Their Customer Since 2005</h2>
                            <p>
                                It is a long established fact that a reader will be distracted 
                                by the readable content of a page when looking at its layout. 
                                The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
                            </p>
                            <p>
                                As opposed to using 'Content here, content here', making it look 
                                like readable English. Many desktop publishing packages and web 
                                page editors now use Lorem Ipsum as their default model text, 
                                and a search for 'lorem ipsum' will uncover many web sites still 
                                in their infancy. Various versions have evolved over the years.
                            </p>

                            <div class="about-btn">
                                <a href="#" class="default-btn">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-shape">
                <img src="assets/img/shape/right-side.png" alt="Shape Images">
            </div>
        </div>
        <!-- About Area End -->
        
        <!-- Service Area -->
        <section class="service-area pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    <span>Our Service</span>
                    <h2>We Provide Fastest & Unique Business Growing Service</h2>
                    <p>
                        It is a long established fact that a reader will be distracted by 
                        the readable content of a page when looking at its layout.
                    </p>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.php">
                                <img src="assets/img/service-icon/1.png" alt="Images">
                            </a>
                            <a href="service-details.php">
                                <h3>SEO Optimization</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.php">
                                <img src="assets/img/service-icon/2.png" alt="Images">
                            </a>
                            <a href="service-details.php">
                                <h3>Social Marketing</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.php">
                                <img src="assets/img/service-icon/3.png" alt="Images">
                            </a>
                            <a href="service-details.php">
                                <h3>Content Marketing</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.php">
                                <img src="assets/img/service-icon/4.png" alt="Images">
                            </a>
                            <a href="service-details.php">
                                <h3>Analytical Analysis</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.php">
                                <img src="assets/img/service-icon/5.png" alt="Images">
                            </a>
                            <a href="service-details.php">
                                <h3>App Development</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.php">
                                <img src="assets/img/service-icon/6.png" alt="Images">
                            </a>
                            <a href="service-details.php">
                                <h3>Web Development</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Area End -->

        <!-- Faq Area -->
        <div class="faq-area pt-100 pb-70">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="faq-img">
                            <img src="assets/img/faq/1.png" alt="fAQ Images">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="faq-content">
                            <span>Why Choose Us</span>
                            <h2>We Are Top Ranked & Dedicated SEO Company</h2>
                            <p>
                                As opposed to using Content here, content here, 
                                making it look like readable English. Many desktop 
                                publishing packages and web page editors now use Lorem 
                                Ipsum as their default model text.
                            </p>
                        </div>

                        <div class="faq-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        Great Research Exparts 
                                    </a>
    
                                    <div class="accordion-content">
                                        <p> 
                                            Lorem ipsum dolor sit amet, consectetur adipis
                                            cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        Great Understanding
                                    </a>
    
                                    <div class="accordion-content">
                                        <p> 
                                            Lorem ipsum dolor sit amet, consectetur adipis
                                            cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        Top Ranking 
                                    </a>
    
                                    <div class="accordion-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipis
                                            cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title active" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        100% Trusted
                                    </a>
    
                                    <div class="accordion-content show">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipis
                                            cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <!-- Faq Area End -->

        <!-- Portfolio Area -->
        <section class="portfolio-area pt-100 pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    <span>Our Portfolio</span>
                    <h2>We Have Done Business with Thousand of Comapnies</h2>
                    <p>
                        It is a long established fact that a reader will be distracted 
                        by the readable content of a page when looking at its layout.
                    </p>
                </div>
                <div class="portfolio-slider pt-45 owl-carousel owl-theme">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="portfolio.php">
                                <img src="assets/img/portfolio/1.jpg" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                <a href="#"><span>Marketing</span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="portfolio.php"><h3>Social Marketing</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="portfolio.php">
                                <img src="assets/img/portfolio/2.jpg" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                <a href="#"><span>Research</span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="portfolio.php"><h3>Data Analysis</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="portfolio.php">
                                <img src="assets/img/portfolio/3.jpg" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                <a href="#"><span>Optimizing</span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="portfolio.php"><h3>SEO Optimization</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="portfolio.php">
                                <img src="assets/img/portfolio/5.jpg" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                <a href="#"><span>Development</span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="portfolio.php"><h3>App Development</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Area End -->

        <!-- Submission Area -->
        <div class="submission-area ptb-100">
            <div class="container">
                <div class="submission-title">
                    <h2>Know Your Website Ranking</h2>
                </div>
                <form class="submission-form">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="form-group">
								<input type="text" class="form-control" id="website" placeholder="Your website">
							</div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group border-line">
								<input type="text" class="form-control" id="email" placeholder="Email">
							</div>
                        </div>
                        <div class="col-lg-3 col-md-3 offset-md-5 offset-lg-0">
                            <button type="submit" class="default-btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Submission Area End -->

        <!-- Price Area -->
        <div class="price-area pt-100 pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    <span>Pricing Table</span>
                    <h2>We Have Pre-ready Pricing for Our Services</h2>
                    <p>
                        It is a long established fact that a reader will be 
                        distracted by the readable content of a page when looking at its layout.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-12 pt-45">
                        <div class="tabs-item-list">
                            <ul id="tabs-item" class="text-center">
                                <li class="active">
                                    <a href="#monthly" class="prices-tab">Monthly</a>
                                </li> 
                                <li>
                                    <a href="#yearly" class="prices-tab">Yearly</a>
                                </li> 
                            </ul> 
                        </div>
                    </div>
                </div>

                <div id="prices-content">
                    <div id="monthly" class="active prices-content-area animated">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price">
                                    <span>Basic Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>30<sub>/month</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Data Analysis</li>
                                        <li>Website Building</li>
                                        <li>Web Application</li>
                                        <li class="color-gray">SEO Optimizing</li>
                                        <li class="color-gray">Content Marketing</li>
                                        <li class="color-gray">Social Marketing</li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price current">
                                    <span>Standard Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>60<sub>/month</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Data Analysis</li>
                                        <li>Website Building</li>
                                        <li>Web Application</li>
                                        <li>SEO Optimizing</li>
                                        <li class="color-gray">Content Marketing</li>
                                        <li class="color-gray">Social Marketing</li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                                <div class="single-price">
                                    <span>Premium Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>90<sub>/month</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Data Analysis</li>
                                        <li>Website Building</li>
                                        <li>Web Application</li>
                                        <li>SEO Optimizing</li>
                                        <li>Content Marketing</li>
                                        <li>Social Marketing</li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="yearly" class="animated prices-content-area">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price">
                                    <span>Basic Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>70<sub>/Year</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Data Analysis</li>
                                        <li>Website Building</li>
                                        <li>Web Application</li>
                                        <li class="color-gray">SEO Optimizing</li>
                                        <li class="color-gray">Content Marketing</li>
                                        <li class="color-gray">Social Marketing</li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price current">
                                    <span>Standard Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>120<sub>/Year</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Data Analysis</li>
                                        <li>Website Building</li>
                                        <li>Web Application</li>
                                        <li>SEO Optimizing</li>
                                        <li class="color-gray">Content Marketing</li>
                                        <li class="color-gray">Social Marketing</li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                                <div class="single-price">
                                    <span>Premium Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>170<sub>/Year</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Data Analysis</li>
                                        <li>Website Building</li>
                                        <li>Web Application</li>
                                        <li>SEO Optimizing</li>
                                        <li>Content Marketing</li>
                                        <li>Social Marketing</li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price Area End -->

        <!-- Member Area -->
        <div class="member-area pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    <span>Our Expert Members</span>
                    <h2>Behind the Great Success of Bonsa They Playing Role</h2>
                    <p>
                        It is a long established fact that a reader will be distracted 
                        by the readable content of a page when looking at its layout.
                    </p>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-3 col-sm-6">
                        <div class="member-card">
                            <div class="member-img">
                                <a href="members.php">
                                    <img src="assets/img/member/1.jpg" alt="Member Images">
                                </a>
                                <div class="member-content">
                                    <a href="members.php">
                                        <h3>John Doe</h3>
                                    </a>
                                    <span>Head of Bonsa</span>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a href="#" target="_blank" >
                                                    <i class='bx bxl-facebook'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" >
                                                    <i class='bx bxl-twitter' ></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" >
                                                    <i class='bx bxl-instagram' ></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="member-card">
                            <div class="member-img">
                                <a href="members.php">
                                    <img src="assets/img/member/2.jpg" alt="Member Images">
                                </a>
                                <div class="member-content">
                                    <a href="members.php">
                                        <h3>John Smith</h3>
                                    </a>
                                    <span>SEO Expert</span>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a href="#" target="_blank" >
                                                    <i class='bx bxl-facebook'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" >
                                                    <i class='bx bxl-twitter' ></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" >
                                                    <i class='bx bxl-instagram' ></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="member-card">
                            <div class="member-img">
                                <a href="members.php">
                                    <img src="assets/img/member/3.jpg" alt="Member Images">
                                </a>
                                <div class="member-content">
                                    <a href="members.php">
                                        <h3>Evanaa</h3>
                                    </a>
                                    <span>Content Writer</span>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a href="#" target="_blank" >
                                                    <i class='bx bxl-facebook'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" >
                                                    <i class='bx bxl-twitter' ></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" >
                                                    <i class='bx bxl-instagram' ></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="member-card">
                            <div class="member-img">
                                <a href="members.php">
                                    <img src="assets/img/member/4.jpg" alt="Member Images">
                                </a>
                                <div class="member-content">
                                    <a href="members.php">
                                        <h3>Knot Doe</h3>
                                    </a>
                                    <span>Marketing Expert</span>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a href="#" target="_blank" >
                                                    <i class='bx bxl-facebook'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" >
                                                    <i class='bx bxl-twitter' ></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" >
                                                    <i class='bx bxl-instagram' ></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="member-shape">
                <img src="assets/img/shape/member-shape-1.png" alt="Shape">
            </div>
        </div>
        <!-- Member Area End -->
        
        <!-- Counter Area -->
        <div class="counter-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='flaticon-success'></i>
                            <h3><span class="counter">15</span></h3>
                            <p>Years Experience</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='flaticon-launch'></i>
                            <h3><span class="counter">900</span>+</h3>
                            <p>Projects Done</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='flaticon-customer'></i>
                            <h3><span class="counter">800</span>+</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='flaticon-team-building'></i>
                            <h3><span class="counter">25</span>+</h3>
                            <p>Expert Members</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Area End -->
        
        <!-- Testimonial Area -->
        <div class="testimonial-area pt-100 pb-70">
            <div class="container-fluid">
                <div class="scetion-title text-center">
                    <span>Testimonial</span>
                    <h2>Our Clients Feedback</h2>
                    <p>
                        It is a long established fact that a reader will be distracted by 
                        the readable content of a page when looking at its layout.
                    </p>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="testimonial-slider">
                            <div class="testimonial-icon">
                                <i class='bx bxs-quote-alt-right'></i>
                            </div>
                            
                            <div class="testimonial-item-slider owl-carousel owl-theme">
                                <div class="testimonial-item">
                                    <div class="testimonial-item-img">
                                        <img src="assets/img/testimonial/t1.png" alt="Testimonial Images">
                                    </div>
                                    <h3>John Doe</h3>
                                    <p>
                                        Restaurants range from inexpensive and informal lunching or dining places 
                                        catering to people working nearby, with modest food served in simple settings at low prices.
                                     </p>
                                </div>

                                <div class="testimonial-item">
                                    <div class="testimonial-item-img">
                                        <img src="assets/img/testimonial/t2.png" alt="Testimonial Images">
                                    </div>
                                    <h3>Knot Doe</h3>
                                    <p>
                                        Restaurants range from inexpensive and informal lunching or dining places 
                                        catering to people working nearby, with modest food served in simple settings at low prices.
                                     </p>
                                </div>

                                <div class="testimonial-item">
                                    <div class="testimonial-item-img">
                                        <img src="assets/img/testimonial/t3.png" alt="Testimonial Images">
                                    </div>
                                    <h3>Evanaa</h3>
                                    <p>
                                        Restaurants range from inexpensive and informal lunching or dining places 
                                        catering to people working nearby, with modest food served in simple settings at low prices.
                                     </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="testimonial-img">
                            <img src="assets/img/testimonial/1.png" alt="Testimonial Images">
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape-left">
                <img src="assets/img/testimonial/shape-left.png" alt="Images">
            </div>
            <div class="shape-right">
                <img src="assets/img/testimonial/shape-right.png" alt="Images">
            </div>
        </div>
        <!-- Testimonial Area End -->

        <!-- Blog Area -->
        <div class="blog-area pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    <span>Blogs</span>
                    <h2>Our Latest Post</h2>
                    <p>
                        It is a long established fact that a reader will be 
                        distracted by the readable content of a page when looking at its layout.
                    </p>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="blog-details.php">
                                    <img src="assets/img/blog/1.jpg" alt="Blog Images">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-tag">
                                    <a href="#"><span>SEO Optimization</span></a>
                                </div>
                                <a href="blog-details.php">
                                    <h3>Basic Guidline Layout for SEO  Bigenner Level</h3>
                                </a>
                                <a href="blog-details.php" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="blog-details.php">
                                    <img src="assets/img/blog/2.jpg" alt="Blog Images">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-tag">
                                    <a href="#"><span>Marketing</span></a>
                                </div>
                                <a href="blog-details.php">
                                    <h3>How to Become Most Skilled Person in Social Marketing</h3>
                                </a>
                                <a href="blog-details.php" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="blog-details.php">
                                    <img src="assets/img/blog/3.jpg" alt="Blog Images">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-tag">
                                    <a href="#"><span>Data Research</span></a>
                                </div>
                                <a href="blog-details.php">
                                    <h3>Basic Guidline Layout for SEO Bigenner Level</h3>
                                </a>
                                <a href="blog-details.php" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->

        <?php require "inc/footer.php"?>

    </body>
</html>