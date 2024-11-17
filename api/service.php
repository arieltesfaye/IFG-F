<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Impact For Good Foundation</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Impact For Good Foundation" name="keywords">
        <meta content="Impact For Good Foundation" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <!-- Template Stylesheet -->
        <link href="/css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- import header -->
        <?php
        require('templates/navigation.php')
        ?>
        
        <!-- Services Page Header Start -->
        <div class="service-page-header">
            <div class="service-page-header-bg2"></div> 
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>What are we up to right now?</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Services Page Header End -->
    

        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>Empowering Communities Through Sustainable Solutions</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-diet"></i>
                            </div>
                            <div class="service-text">
                                <h3>Climate Action</h3>
                                <p>We work with local communities to implement sustainable climate solutions and empower individuals to lead climate action.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-education"></i>
                            </div>
                            <div class="service-text">
                                <h3>Education Initiatives</h3>
                                <p>IFG provides access to education for vulnerable children, ensuring opportunities for learning and development.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-healthcare"></i>
                            </div>
                            <div class="service-text">
                                <h3>Healthcare Programs</h3>
                                <p>We deliver healthcare support and education to underserved communities, promoting well-being and access to medical care.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-water"></i>
                            </div>
                            <div class="service-text">
                                <h3>Clean Water Access</h3>
                                <p>Our projects focus on providing clean and sustainable water sources, ensuring safe drinking water for all.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-social-care"></i>
                            </div>
                            <div class="service-text">
                                <h3>Social Care Programs</h3>
                                <p>We support marginalized communities by offering social care services that enhance mental, social, and economic well-being.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-home"></i>
                            </div>
                            <div class="service-text">
                                <h3>Community Development</h3>
                                <p>IFG works closely with communities to implement sustainable development projects that enhance their economic opportunities.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Causes Start -->
        <div class="causes">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Causes</p>
                    <h2>Empowering Communities Through Key Initiatives</h2>
                </div>
                <div class="owl-carousel causes-carousel">
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-1.jpg" alt="Image">
                        </div>
                        
                        <div class="causes-text">
                            <h3>Climate Action Initiatives</h3>
                            <p>Supporting community-based climate action efforts to promote sustainable environmental practices.</p>
                            <a class="learn-more" href="causes-detail">Learn More</a>
                        </div>
                        
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-2.jpg" alt="Image">
                        </div>
                        
                        <div class="causes-text">
                            <h3>Gender Advocacy Programs</h3>
                            <p>Championing gender equality and providing resources for women in marginalized communities.</p>
                            <a class="learn-more" href="causes-detail">Learn More</a>
                        </div>
                        
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-3.jpg" alt="Image">
                        </div>
                        
                        <div class="causes-text">
                            <h3>Education for Vulnerable Communities</h3>
                            <p>Providing educational opportunities for children and women in underprivileged areas.</p>
                            <a class="learn-more" href="causes-detail">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Causes End -->

        <!-- import footer -->
        <?php
        require('templates/footer.php')
        ?>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>
        <script src="js/main.js"></script>
        <script>
            $(document).ready(function () {
            $(".causes-carousel").owlCarousel({
                autoplay: true,
                animateIn: 'slideInDown',
                animateOut: 'slideOutDown',
                items: 1,
                smartSpeed: 450,
                dots: false,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });
        });
            
        </script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        
    </body>
</html>
