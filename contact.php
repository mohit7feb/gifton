<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
    Gifton
  </title>

  <!-- slider stylesheet -->

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.php">
          <span>
            Gifton
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">
                About
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">
                Shop
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="testimonial.php">
                Testimonials
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
          <div class="user_option">
            <!-- <a href="">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Login
              </span>
            </a> -->
            <!-- <a href="">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a> -->
            <form class="form-inline ">
              <!-- <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button> -->
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->

  <!-- </div> -->
  <!-- end hero area -->

  <!-- contact section -->
  <section class="contact_section ">
    <div class="container px-0">
        <div class="heading_container ">
            <h2 class="heading_container heading_center">
                Contact Us
            </h2>
        </div>
    </div>
    <div class="container container-bg">
        <div class="row">
            <!-- <div class="col-lg-7 col-md-6 px-0">
                <div class="map_container">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                            width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
                    </div>
                </div>
            </div> -->
            <div class="col-md-6 col-lg-12 px-0">
                <form id="contactForm" action="javascript:void(0);">
                    <div>
                        <input type="text" id="name" placeholder="Name" required />
                    </div>
                    <div>
                        <input type="email" id="email" placeholder="Email" required />
                    </div>
                    <div>
                        <input type="text" id="phone" placeholder="Phone" required />
                    </div>
                    <div>
                        <input type="text" id="message" class="message-box" placeholder="Message" required />
                    </div>
                    <div class="d-flex">
                        <button type="submit">
                            SEND
                        </button>
                    </div>
                    <div id="confirmationMessage" style="display:none; margin-top: 10px; color: green;">
                        Your message has been sent!
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    document.getElementById('contactForm').addEventListener('submit', function (event) {
        // Prevent form submission
        event.preventDefault();
        
        // Show confirmation message
        document.getElementById('confirmationMessage').style.display = 'block';
    });
</script>

  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section layout_padding2-top">
    <div class="social_container">
        <!-- <div class="social_box">
            <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="">
                <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
        </div> -->
    </div>
    <div class="info_container">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <h6>
                        ABOUT US
                    </h6>
                    <p>
                        We are a leading gift shop agency dedicated to helping love & affection grow their personal and professional relations with each other.
                    </p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info_form">
                        <h5>
                            Newsletter
                        </h5>
                        <form action="#">
                            <input type="email" placeholder="Enter your email" required>
                            <button>
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h6>
                        NEED HELP?
                    </h6>
                    <p>
                    Our team is readily available to assist you with any inquiries or support you may require. Feel free to reach out for guidance or advice regarding our services.
                    </p>
                </div>
                <div class="col-md-6 col-lg-3">
    <h6>
        Quick Links
    </h6>
    <div class="info_link-box">
        <a href="index.php">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span>Home</span>
        </a>
        <a href="about.php">
            <i class="fa fa-info-circle" aria-hidden="true"></i>
            <span>About</span>
        </a>
        <a href="shop.php">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <span>Shop</span>
        </a>
        <a href="testimonial.php">
            <i class="fa fa-star" aria-hidden="true"></i>
            <span>Testimonials</span>
        </a>
        <a href="policy.php">
            <i class="fa fa-shield" aria-hidden="true"></i>
            <span>Privacy Policy</span>
        </a>
    </div>
</div>

            </div>
        </div>
    </div>
    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="index.php">Gifton</a>
            </p>
        </div>
    </footer>
</section>

    <!-- footer section -->

  </section>

  <!-- end info section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>

  <script src="js/custom.js"></script>

</body>

</html>