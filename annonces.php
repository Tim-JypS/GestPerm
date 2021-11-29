<?php
    require("inc\config.php");
    $Page="ann";
    $PageTitle=SITENAME." - Annonces";
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

    <?php require("inc/header.php");?>
        

        <!-- Portfolio Area -->
        <section class="portfolio-area pt-70 pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    <!-- <span>Our Portfolio</span> -->
                    <h2>We Have Done Business with Thousand of Comapnies</h2>
                    <p>
                        It is a long established fact that a reader will be distracted 
                        by the readable content of a page when looking at its layout.
                    </p>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-4 col-md-6">
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
                    </div>

                    <div class="col-lg-4 col-md-6">
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
                    </div>

                    <div class="col-lg-4 col-md-6">
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
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <a href="portfolio.php">
                                    <img src="assets/img/portfolio/4.jpg" alt="Portfolio Images">
                                </a>
                                <div class="portfolio-tag">
                                    <a href="#"><span>Marketing</span></a>
                                </div>
                                <div class="portfolio-content">
                                    <a href="portfolio.php"><h3>Content Marketing</h3></a>
                                    <i class='bx bxs-chevron-right'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
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

                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-item">
                            <div class="portfolio-img">
                                <a href="portfolio.php">
                                    <img src="assets/img/portfolio/6.jpg" alt="Portfolio Images">
                                </a>
                                <div class="portfolio-tag">
                                    <a href="#"><span>Development</span></a>
                                </div>
                                <div class="portfolio-content">
                                    <a href="portfolio.php"><h3>Web Development</h3></a>
                                    <i class='bx bxs-chevron-right'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
						<div class="pagination-area">
							<nav aria-label="Page navigation example text-center">
								<ul class="pagination">
									<li class="page-item">
										<a class="page-link page-links" href="#">
											<i class='bx bx-chevrons-left'></i>
										</a>
									</li>
									<li class="page-item current">
										<a class="page-link" href="#">1</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">2</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">3</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">
											<i class='bx bx-chevrons-right'></i>
										</a>
									</li>
								</ul>
							</nav>
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

        <!-- Footer Area -->
        <footer id="footer" class="footer-area-bg">
            <div class="footer-area-top pt-100 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-single">
                                <div class="footer-single-content">
                                    <a href="index.php">
                                        <img src="assets/img/footer-logo.png" alt="Logo">
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum efficitur convallis arcu, id dapibus nulla tincidunt.</p>
                                </div>

                                <div class="newsletter-area">
                                    <form class="newsletter-form" data-toggle="validator">
                                        <input type="email" class="form-control" placeholder="Email" name="EMAIL" required autocomplete="off">
                                        <button class="subscribe-btn" type="submit">
                                            Subscribe
                                        </button>
                                        <div id="validator-newsletter" class="form-result"></div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-list ml-50">
                                <h3>Services</h3>
                                <ul>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="services.php">SEO Optimization</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="services.php">Social Marketing</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="services.php">Busines Growing</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="services.php"> Data Analysis</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="services.php">App Development </a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="services.php"> Web Development</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <div class="footer-list">
                                <h3>Quick Links</h3>
                                <ul>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="services.php">Service</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="about.php">About Us</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="testimonial.php">Testimonial</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="blog.php">Blog</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-list ml-20">
                                <h3>Contact Us</h3>
                                <ul>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="tel:+1123456789">+1  1234 56 789</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="tel:+19876543210">+1  9876 543 210</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="mailto:email@bonsa.com">email@bonsa.com</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="mailto:hello@bonsa.com">hello@bonsa.com</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        28/A Street, New York, USA
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="bottom-text text-center">
                                <p>
                                    Copyright ©2021 Bonsa. All Rights Reserved by 
                                    <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->


        <!-- Jquery Min JS -->
        <script src="assets/js/jquery-3.5.0.min.js"></script>
        <!-- Popper Min JS -->
        <script src="assets/js/popper.min.js"></script>
        <!-- Bootstrap Min JS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="assets/js/meanmenu.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Wow JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Ajaxchimp Min JS -->
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact Form JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/custom.js"></script>
    </body>
</html>