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
        <link href="/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- import header -->
        <?php
        require('templates/navigation.php')
        ?>

        <!-- Donate Page Header -->
        <div class="donate-page-header">
            <div class="donate-page-header-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>Every Donation Counts</h2>
                        <p>
                            At IFG, we believe in maximizing the impact of every donation. 
                            Every dollar you contribute directly funds our work in sustainable community 
                            development, climate action, education, and social empowerment. 
                            With zero cuts for overhead, we ensure that 100% of your support goes straight 
                            to the communities we serve. Join us in creating a lasting difference—every 
                            contribution makes a world of impact.
                        </p>
                    </div>
                </div>
            </div>
        </div>




        <!-- Donate Start -->

        <div class="section-container">
            <!-- Background Story Section -->
            <section class="story-section">                                                
                <div class="story-content">
                    <div class="story-text">
                        <h2>Our Impact Story</h2>
                        <div class="story-image">
                            <img src="img/donation-1a.jpg" alt="Impact Story" style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <p>Our foundation has been working tirelessly to create positive change in communities around the world. Through your generous donations, we've been able to make a significant impact in various areas of need.</p>
                        <p style="margin-top: 1rem">Your contribution, no matter the size, makes a real difference in people's lives. Join us in our mission to create lasting positive change.</p>
                        <div class="impact-list>
                            <h3 style="color: #E6007E; margin-bottom: 1rem">Our Achievements</h3>
                            <ul style="margin-left: 1.5rem;">
                                <li style="margin-bottom: 0.5rem">Provided education to over 1,000 children in Zanzibar</li>
                                <li style="margin-bottom: 0.5rem">Built sustainable water systems in rural communities</li>
                                <li style="margin-bottom: 0.5rem">Supported local healthcare initiatives</li>
                                <li style="margin-bottom: 0.5rem">Empowered women through skills training programs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Donation Form Section -->
            <section class="form-section">
                <h2>Make a Donation</h2>
                <form id="donationForm" onsubmit="return validateForm(event)">
                    <!-- Donor Information -->
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" required>
                    </div>
    
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" required>
                    </div>
    
                    <!-- Cause Selection -->
                    <div class="form-group">
                        <label for="cause">Select Cause *</label>
                        <select id="cause" required>
                            <option value="general">General Fund</option>
                            <option value="zanzibar">Climate Action</option>
                            <option value="education">Education</option>
                            <option value="healthcare">Healthcare</option>
                        </select>
                    </div>
    
                    <!-- Donation Amount -->
                    <div class="form-group">
                        <label for="amount">Donation Amount *</label>
                        <div class="currency-input">
                            <span class="currency-symbol">$</span>
                            <input type="number" id="amount" class="amount-input" required min="1">
                        </div>
                    </div>
    
                    <!-- Currency Selection -->
                    <div class="form-group">
                        <label for="currency">Currency</label>
                        <select id="currency">
                            <option value="USD">USD</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                        </select>
                    </div>
    
                    <!-- Monthly Donation Option -->
                    <div class="checkbox-group">
                        <input type="checkbox" id="monthly">
                        <label for="monthly">Make this a monthly donation</label>
                    </div>
    
                    <!-- Captcha -->
                    <div class="captcha-box">
                        <input type="checkbox" id="captcha">
                        <label for="captcha">I am not a robot</label>
                    </div>
    
                    <!-- Submit Button -->
                    <button type="submit" class="submit-btn">Continue to Payment</button>
    
                    <!-- Tax Notice -->
                    <p class="tax-notice">* All donations are tax-deductible to the extent allowed by law.</p>
                </form>
            </section>
            <!-- Donate end -->            
        </div>

        <!-- Volunteer Start -->
        <div class="volunteer" data-parallax="scroll" data-image-src="img/volunteer.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="volunteer-form">
                            <form>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" placeholder="Why do you want to become a volunteer?" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Become a volunteer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="volunteer-content">
                            <div class="section-header">
                                <p class="section-title">Become A Volunteer</p>
                                <h2 class="section-subtitle">Make a Lasting Impact in Our Communities</h2>
                            </div>                               
                            <div class="volunteer-text">
                                <p>
                                    Join us in empowering communities through education, climate action, and advocacy for gender equality. Your time and dedication will help create real, sustainable change.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Volunteer End -->


        <!-- Become a Member Section -->
        <section class="member-section">
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
        <!-- Become a Member Section -->
   
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
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
