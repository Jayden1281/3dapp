<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <title>Coca cola-Contact Us</title>
    <!-- cdn links -->

    <link rel="stylesheet" href="static/css/fontawesome.min.css">
    <link rel="stylesheet" href="static/css/ionicons.min.css">
    <link rel="stylesheet" href="static/css/simple-line-icons.css">
    <link rel="stylesheet" href="static/css/jquery-ui.min.css">
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/plugins.css">
    <link rel="stylesheet" href="static/css/style.min.css">
</head>

<body>
    

    
<!-- header start -->
<header>
  <div id="sticky" class="header-middle theme1 py-15 py-lg-0">
    <div class="container position-relative">
      <div class="row align-items-center">
        <div class="col-6 col-lg-2 col-xl-2">
          <div class="logo">
            <a href=""><img src="static/picture/logo.png" alt="logo"></a>
          </div>
        </div>
        <div class="col-xl-8 col-lg-7 d-none d-lg-block">
          <ul class="main-menu d-flex justify-content-center">
            <li class="ml-0">
              <a href="../index.php" class="ps-0">Home </a>
            </li>
            <li class="position-static">
              <a href="modelController.php">3D Model</a>

            </li>
            <li > 
              <a href="productsController.php">Products</a>
            </li>
            <li class="active "><a href="contactusController.php">contact Us</a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</header>
<!-- header end -->

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-4 text-dark text-capitalize">Contact Us</h2>
        </div>
      </div>
      <div class="col-12">
        <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
          <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
      </div>
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->

<!-- contact-section satrt -->
<section class="contact-section pt-80 pb-50">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-12 mb-30">
        <!--  contact page side content  -->
        <div class="contact-page-side-content">
          <h3 class="contact-page-title">Contact Us</h3>
          <p class="contact-page-message mb-30">
            Welcome to contact Coca-Cola! Whether you'd like to learn more about our products, provide feedback, or seek collaboration opportunities, we'd love to chat with you. Please fill out the form below and our team will contact you as soon as possible. You can also contact us directly via:
          </p>
          <!--  single contact block  -->

          <div class="single-contact-block">
            <h4><i class="fa fa-fax"></i> Address</h4>
            <p>One Coca-Cola Plaza, Atlanta, GA, 30313, USA/p>
          </div>

          <!--  End of single contact block -->

          <!--  single contact block -->

          <div class="single-contact-block">
            <h4><i class="fa fa-phone"></i> Phone</h4>
            <p>
              <a href="tel:123456789">Mobile: ＋8621 31301000</a>
            </p>
            <p><a href="tel:1009678456">Hotline: ＋8621 61928020</a></p>
          </div>

          <!-- End of single contact block -->

          <!--  single contact block -->

          <div class="single-contact-block">
            <h4><i class="fas fa-envelope"></i> Email</h4>
            <p>
              <a href="mailto:yourmail@domain.com">contact@coca-cola.com</a>
            </p>
            <p>
              <a href="mailto:support@hastech.company">support@coca-cola.com</a>
            </p>
          </div>

          <!--=======  End of single contact block  =======-->
        </div>

        <!--=======  End of contact page side content  =======-->
      </div>
      <div class="col-lg-6 col-12 mb-30">
        <!--  contact form content -->
        <div class="contact-form-content">
          <h3 class="contact-page-title">Tell Us Your Message</h3>
          <div class="contact-form">
            <form id="contact-form" action="addContactController.php" method="POST">
              <div class="form-group">
                <label>Your Name <span class="required">*</span></label>
                <input type="text" id="contact_name" name="contact_name"><br>
              </div>
              <div class="form-group">
                <label>Your Email <span class="required">*</span></label>
                <input type="text" id="contact_info" name="contact_info"><br>
              </div>
              <div class="form-group">
                <label>Subject</label>
                <input type="text" id="contact_subject" name="contact_subject"><br>
              </div>
              <div class="form-group">
                <label>Your Message</label>
                <textarea id="contact_content" name="contact_content"></textarea><br>
              </div>
              <div class="form-group mb-0">
                <button type="submit" value="submit" id="submit" class="btn btn-dark btn--lg" name="submit">
                  submit
                </button>
              </div>
            </form>
          </div>
        </div>
        <!-- End of contact -->
      </div>
    </div>
  </div>
</section>
<!-- contact-section end -->
<!-- footer strat -->
<footer class="bg-light theme1 position-relative">
  <!-- footer bottom start -->
  <div>
    <audio id="audio" controls>
      <source src="static/media/OpenthatCocaCola.mp3" type="audio/mp3">
    </audio>

  </div>
  <div class="footer-bottom pt-80 pb-30">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-4 mb-30">
          <div class="footer-widget mx-w-400">
            <div class="footer-logo mb-25">
              <a href="">
                <img src="static/picture/logo.png" alt="footer logo">
              </a>
            </div>
            <p class="text mb-30">
            Founded 1886, Atlanta HQ. Global presence, iconic brands, commitment to sustainability.
            </p>

            <div class="social-network">
              <ul class="d-flex">
              <li>
                  <a href="https://www.facebook.com/" target="_blank"><span class="icon-social-facebook"></span></a>
                </li>
                <li>
                  <a href="https://x.com/" target="_blank"><span class="icon-social-twitter"></span></a>
                </li>
                <li>
                  <a href="https://www.youtube.com/" target="_blank"><span class="icon-social-youtube"></span></a>
                </li>
                <li class="mr-0">
                  <a href="https://www.instagram.com/" target="_blank"><span class="icon-social-instagram"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-2 mb-30">
          <div class="footer-widget">
            <div class="border-bottom cbb1 mb-25">
              <div class="section-title">
                <h2 class="title">Information</h2>
              </div>
            </div>
            <!-- footer-menu start -->
            <ul class="footer-menu">
              <li><a href="../index.php">Home </a></li>
              <li><a href="modelController.php">3D Models</a></li>
              <li><a href="productsController.php">Products</a></li>
              <li><a href="contactusController.php">Contact us</a></li>
            </ul>
            <!-- footer-menu end -->
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-2 mb-30">
          <div class="footer-widget">
            <div class="border-bottom cbb1 mb-25">
              <div class="section-title">
                <h2 class="title">social Links</h2>
              </div>
            </div>
            <!-- footer-menu start -->
            <ul class="footer-menu">
            <li><a href="../index.php">Home </a></li>
              <li><a href="modelController.php">3D Models</a></li>
              <li><a href="productsController.php">Products</a></li>
              <li><a href="contactusController.php">Contact us</a></li>
            </ul>
            <!-- footer-menu end -->
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4 mb-30">
          <div class="footer-widget">
            <div class="border-bottom cbb1 mb-25">
              <div class="section-title">
                <h2 class="title">Newsletter</h2>
              </div>
            </div>
            <p class="text mb-20">
            Subscribe to the Coca-Cola newsletter to receive the latest news, exclusive offers, discounts, and special promotions.
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer bottom end -->
  <!-- coppy-right start -->
  <div class="coppy-right bg-dark py-15">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-xl-4 order-last order-md-first">
          <div class="text-md-start text-center mt-3 mt-md-0">
            <p>
            Coca Cola &copy; 2024.Coca Cola
              
            </p>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-8">
          <div class="text-md-end text-center">
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- coppy-right end -->
</footer>
<!-- footer end -->


    <script src="static/js/jquery-3.6.0.min.js"></script>
    <script src="static/js/jquery-migrate-3.3.2.min.js"></script>
    <script src="static/js/modernizr-3.7.1.min.js"></script>
    <script src="static/js/jquery-ui.min.js"></script>
    <script src="static/js/bootstrap.bundle.min.js"></script>
    <script src="static/js/plugins.js"></script>
    <script src="static/js/ajax-contact.js"></script>
    <script src="static/js/main.js"></script>


</body>

</html>