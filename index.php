<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $to = "rajbanshibibek7@email.com"; // Replace with your email address
    $subject = "Contact Form Submission - $subject";
    $headers = "From: $email";
    
    // Send the email
    mail($to, $subject, $message, $headers);
    
    // Redirect to a thank-you page
    header("Location: thank-you.html"); // Create this page
    exit();
}




<!DOCTYPE html>
<html lang="en">

<head>
   <title>TechNexusHub l Contact</title>
   <link rel="icon" href="img/LOGO.png" type="image/x-icon">
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Your Post Title-->
    <meta property="og:title" content="Contact Us For Any Queries<">
    <!--Your Post Description-->
    <meta property="og:description" content="">
    <!--URL_to_your_post_image-->
    <meta property="og:image" content="img/TechNexusHub-Logo.png">
    <!--URL_of_the_shared_page-->
    <meta property="og:url" content="index.html">
    <!--article-->
    <meta property="og:type" content="article">
    <!---BLOG PLACED SHARE END--->

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
     <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-dark px-lg-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-n2">
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-white small" href="Privacy-Policy.html">Privacy Policy</a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-white small" href="Terms-&-Conditions.html">Terms & Conditions</a>
                        </li>
                        <li class="nav-item border-right border-secondary">
                            <a class="nav-link text-white small" href="Disclaimer.html">Disclaimer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white small" href="DMCA.html">DMCA </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 text-right d-none d-md-block">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-auto mr-n2">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><small class="fab fa-twitter"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><small class="fab fa-facebook-f"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><small class="fab fa-linkedin-in"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><small class="fab fa-instagram"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><small class="fab fa-tiktok"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><small class="fab fa-youtube"></small></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row align-items-center bg-white py-1 px-lg-5">
            <div class="col-lg-4">
                <a href="index.html" class="navbar-brand p-0 d-none d-lg-block">
                   <h1 class="m-0 display-10 text-primary">
                   <a href=""><img class="img-fluid w-100" src="img/TechNexusHub-Logo.png" alt=""></a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <a href=""><img class="img-fluid w-100" src="img/ads-daraz.png" alt=""></a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand d-block d-lg-none">
               <h1 class="m-0 display-4 text-uppercase text-primary">
  <img src="img/TechNexusHub-Logo1.png" alt="Logo" title="TechNexusHub-Logo" width="300" height="50" class="mr-2"></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.html" class="nav-item nav-link active"><strong>Home</strong></a>
                    <div class="dropdown">
                           <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><strong>About</strong></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                           <!-- Dropdown content goes here -->
                           <a class="dropdown-item" href="PageError.html">About us</a>
                            <a class="dropdown-item" href="PageError.html">Career Objectives</a>
                           <a class="dropdown-item" href="PageError.html">Our Teams</a>
                     </div>
                 </div>
                 
                     <div class="dropdown">
                           <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><strong>News</strong></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                         <!-- Dropdown content goes here -->
                            <a class="dropdown-item" href="PageError.html">Business</a>
                           <a class="dropdown-item" href="PageError.html">Esports</a>
                           <a class="dropdown-item" href="PageError.html">International</a>
                     </div>
                 </div>
                 
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><strong>Category</strong></a>
                           <!-- Dropdown content goes here -->
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="Categories/AI-Tools.html" class="dropdown-item">AI Tools</a>
                            <a href="Categories/Affiliate-Marketing.html" class="dropdown-item">Affiliate Marketing</a>
                            <a href="Categories/Computer-Tech.html" class="dropdown-item">Computer Tech</a>
                            <a href="Categories/Cyber-Security.html" class="dropdown-item">Cyber Security</a>
                            <a href="Categories/Domain-&-Hosting.html" class="dropdown-item">Domain & Hosting</a>
                            <a href="Categories/Digital-Marketing.html" class="dropdown-item">Digital Marketing</a>
                            <a href="Categories/Gadgets.html" class="dropdown-item">Gadgets</a>
                            <a href="Categories/Gaming-&-Esports.html" class="dropdown-item">Gaming & Esports</a>
                            <a href="Categories/Software-&-Apps.html" class="dropdown-item">Software & Apps</a>
                            <a href="Categories/Programming.html" class="dropdown-item">Programming</a>
                        </div>
                    </div>
                    <a href="Videos.html" class="nav-item nav-link"><strong>Videos</strong></a>
                    <a href="contact.html" class="nav-item nav-link"><strong>Contact</strong></a>
                </div>
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
    <input type="text" class="form-control border-0" placeholder="Search">
    <div class="input-group-append">
        <button class="input-group-text bg-primary text-dark border-0 px-3"><i class="fa fa-search"></i></button>
    </div> 
</div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    
    <!--  ACTIVE START -->
<p class="m-2">
  <a href="#" style="color: #007FFF;"><strong>Home</a> / </strong>
  <a href="#" style="color: #007FFF;"><strong>Contact</strong></a>
</p>
<!-- ACTIVE END -->

    <!-- CONTACT FORM START -->
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Contact Us For Any Queries</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-4 mb-3">
                        <div class="mb-4">
                            <h6 class="text-uppercase font-weight-bold">Contact Info</h6>
                       
							<div class="mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-map-marker-alt text-primary mr-2"></i>
                                    <p class="m-0">Kanepokhari 02, Nepal</p>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-envelope-open text-primary mr-2"></i>
                                    <p class="m-0">technexushub5@gmail.com</p>
                                </div>
                                
                            </div>
                            <div class="mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-phone-alt text-primary mr-2"></i>
                                    <p class="m-0">+9779829312825</p>
                                </div>
                                
                            </div>
                        </div>
                        <h6 class="text-uppercase font-weight-bold mb-3">Contact Us</h6>
                        <form>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control p-4" placeholder="Your Full Name" required="required"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control p-4" placeholder="Your Email" required="required"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control p-4" placeholder="Subject" required="required"/>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="4" placeholder="Message" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;"
                                    type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                  <!-- CONTACT FORM END -->  
                
                
                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                                <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Fans</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                                <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                                <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Connects</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                                <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                                <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Subscribers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">
                                <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->

                   <!-- NEWSLETTER START -->
                    
  <div class="mb-3">
    <div class="section-title mb-0">
      <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
    </div>
    <div class="bg-white text-center border border-top-0 p-3">
      <p>Subscribe to our newsletter for a dose of valuable content directly in your inbox. Stay updated with the latest news, trends, and exclusive offers!</p>
      <form id="newsletterForm">
        <div class="input-group mb-2" style="width: 100%;">
          <input type="text" class="form-control form-control-lg" id="emailInput" placeholder="Your Email">
          <div class="input-group-append">
            <button class="btn btn-primary font-weight-bold px-3" onclick="subscribe()">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script>
    function subscribe() {
      var email = document.getElementById("emailInput").value;
      var emailRedirect = "mailto:technexushub5@gmail.com?subject=TechNexusHub Newsletter Subscription&body=Email: " + email;
      window.location.href = emailRedirect;
    }
  </script>

 <!-- NEWSLETTER END -->
 
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

      <!-- Footer Start -->
    <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
        <div class="row py-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Get In Touch</h5>
                <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>Kanepokhari 02, Daleli, Morang</p>
                <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>+9779829312825</p>
                <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>technexushub5@gmail.com</p>
                <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
 <h5 class="mb-4 text-white text-uppercase font-weight-bold">Popular News</h5>
                <div class="mb-3">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Software & Apps</a>
                        <a class="text-body" href=""><small>Jan 01, 2023</small></a>
                    </div>
                    <a class="small text-white text- font-weight-medium" href="">The company itself is a great company.</a>
                </div>
                <div class="mb-3">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">AI Tools</a>
                        <a class="text-body" href=""><small>Jan 01, 2023</small></a>
                    </div>
                    <a class="small text-white text- font-weight-medium" href="">The company itself is a great company.</a>
                </div>
                <div class="">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Domain & Hosting</a>
                        <a class="text-body" href=""><small>Jan 01, 2023</small></a>
                    </div>
                    <a class="small text-white text- font-weight-medium" href="">The company itself is a great company.</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Categories</h5>
                <div class="m-n1">
                    <a href="Categories/AI-Tools.html" class="btn btn-sm btn-secondary m-1">Affiliate Marketing</a>
                    <a href="Categories/Cyber-Security.html" class="btn btn-sm btn-secondary m-1">Cyber Security</a>
                    <a href="Categories/Digital-Marketing.html" class="btn btn-sm btn-secondary m-1">Digital Marketing</a>
                    <a href="Categories/Domain-&-Hosting.html" class="btn btn-sm btn-secondary m-1">Domain & Hosting</a>
                    <a href="Categories/Gadgets.html" class="btn btn-sm btn-secondary m-1">Gadgets</a>
                    <a href="Categories/Gaming-&-Esports.html" class="btn btn-sm btn-secondary m-1">Gaming & Esports</a>
                    <a href="Categories/Software-&-Apps.html" class="btn btn-sm btn-secondary m-1">Software & Apps</a>
                    <a href="Categories/Programing.html" class="btn btn-sm btn-secondary m-1">Programing</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Photos</h5>
                <div class="row">
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-1.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-2.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-3.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-4.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-5.jpg" alt=""></a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-1.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-3 px-sm-3 px-md-5" style="background: black;">
        <p class="m-0 small text-center"> <a href="#">©2023 TechNexusHub. All Rights Reserved.</a> <a href="https://rajbanshibibek.com.np/">Design by Bibek Rajbanshi</a></p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>