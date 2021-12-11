<?php
    require("inc/config.php");
    $Page="ann";
    $PageTitle="GestPerm - Annonces";
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
    <?php //require("inc/inner.php");?>

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
        <!-- <div class="submission-area ptb-100">
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
        </div> -->
        <!-- Submission Area End -->

        <?php require "inc/footer.php"?>
    </body>
</html>