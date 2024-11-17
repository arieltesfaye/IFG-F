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

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index" class="navbar-brand">IFG</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index" class="nav-item nav-link active">Home</a>
                        

                        <div class="nav-item dropdown">

                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About</a>
                            <div class="dropdown-menu">
                                <a href="about#our-story" class="dropdown-item">Our Story</a>
                                <a href="about#mission&vision" class="dropdown-item">Mission & Vision</a>
                                <a href="about#ourteam" class="dropdown-item">Our Team</a>
                                <a href="about#partners" class="dropdown-item">Partners</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Our Work</a>
                            <div class="dropdown-menu">
                                <a href="single#climate-action" class="dropdown-item">Climate Action</a>
                                <a href="single#education-initiatives" class="dropdown-item">Education Initiatives</a>
                                <a href="single#healthcare-programs" class="dropdown-item">Healthcare Programs</a>
                                <a href="single#social-empowerment" class="dropdown-item">Social Empowerment</a>
                                <a href="single#community-development" class="dropdown-item">Community Development</a>
                            </div>
                        </div>
                        

                        <div class="nav-item dropdown">

                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Get Involved</a>
                            <div class="dropdown-menu">
                                <a href="donate" class="dropdown-item">Donate</a>
                                <a href="volunteer" class="dropdown-item">Become a Volunteer</a>
                                <a href="fundraise" class="dropdown-item">Fundraise with Us</a>
                                <a href="member" class="dropdown-item">Membership</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Programs & Impact</a>
                            <div class="dropdown-menu">
                                <a href="service" class="dropdown-item">Current Projects</a>
                                <a href="service" class="dropdown-item">Case Studies</a>
                                <a href="service" class="dropdown-item">Impact Stories</a>
                                <a href="causes" class="dropdown-item">Causes</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog & News</a>
                            <div class="dropdown-menu">
                                <a href="event" class="dropdown-item">Current Projects</a>
                                <a href="single" class="dropdown-item">Case Studies</a>
                                <a href="blog" class="dropdown-item">Impact Stories</a>
                            </div>
                        </div>
                                               
                        <div class="carousel-btn">
                            <a class="btn btn-custom" href="donate">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-1a.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">

                            <h2>EVERY DONATION COUNTS</h2>
                            <p>
                                At IFG, we believe in maximizing the impact of every donation. Every dollar you contribute directly funds our work in sustainable community development, climate action, education, and social empowerment. With zero cuts for overhead, we ensure that 100% of your support goes straight to the communities we serve. Join us in creating a lasting difference—every contribution makes a world of impact.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        <!-- Become a Member Section -->
        <section class="section">
            <h2>Become a Member</h2>
            <form id="membershipForm" onsubmit="return validateMembershipForm(event)">
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="membershipType">Membership Type *</label>
                    <select id="membershipType" required>
                        <option value="">Select a membership type</option>
                        <option value="basic">Basic ($10/month)</option>
                        <option value="premium">Premium ($25/month)</option>
                        <option value="lifetime">Lifetime ($500 one-time)</option>
                    </select>
                </div>
                <button type="submit" class="submit-btn">Join Now</button>
            </form>
        </section>

        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Our Head Office</h2>
                            <p><i class="fa fa-map-marker-alt"></i>Nairobi, Kenya</p>
                            <p><i class="fa fa-phone-alt"></i>+254 712 345 678</p>
                            <p><i class="fa fa-envelope"></i>info@IFGoundation.org</p>
                            <div class="footer-social">
                                <a class="btn btn-custom" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-custom" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-custom" href="#"><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-custom" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-custom" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="about">About Us</a>
                            <a href="contact">Contact Us</a>
                            <a href="causes">Our Causes</a>
                            <a href="events">Upcoming Events</a>
                            <a href="blog">Latest Blog</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="terms">Terms of Use</a>
                            <a href="privacy">Privacy Policy</a>
                            <a href="cookies">Cookies Policy</a>
                            <a href="help">Help</a>
                            <a href="faq">FAQs</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form>
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn btn-custom">Submit</button>
                                <label>Don't worry, we don't spam!</label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; IFG, All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="#">Leah Sigana</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
