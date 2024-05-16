<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <title>Coca cola-Products</title>
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
              <a href="homeController.php" class="ps-0">Home </a>
            </li>
            <li class="position-static">
              <a href="modelController.php">3D Model</a>

            </li>
            <li class="active"> 
              <a href="productsController.php">Products</a>
            </li>
            <li class=""><a href="contactusController.php">contact Us</a></li>
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
          <h2 class="title pb-4 text-dark text-capitalize">Products</h2>
        </div>
      </div>
      <div class="col-12">
        <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
          <li class="breadcrumb-item"><a href="homeController.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Products</li>
        </ol>
      </div>
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<section class="about-section pt-80 pb-50">
  <div class="container">
    <div class="row">
      <div class="col-12 col-xl-11 mx-auto mb-30">
        <div class="about-content text-center">
          <div class="about-left-image mb-30">
            <img src="static/picture/52.jpg" alt="img" class="img-responsive">
          </div>
          <div>
          <?php if (!empty($companyInfo)): ?>
            <h2 class="title mb-30">
              <?php echo $companyInfo['company_slogan']; ?>      
            </h2>
            <p class="mb-30">
              <?php echo $companyInfo['company_history']; ?>
            </p>
            <?php else: ?>
              <p></p>
          <?php endif; ?>
            <img src="static/picture/signature.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- product tab end -->
<section class="video-section pt-80 pb-50">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="video-wrapper">
          <video controls>
            <source src="static/media/cocacola.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="service-section pt-80 pb-50">
  <div class="container">
    <div class="row">
    <?php foreach ($products as $product): ?>
      <div class="col-sm-6 col-lg-4 mb-4">
        <div class="single-blog">
          <div class="single-thumb mb-25 zoom-in d-block overflow-hidden">
            <img src="static/picture/<?php echo $product['product_image_name']; ?>" alt="<?php echo $product['product_name']; ?>">
          </div>
          <div class="single-service">
            <h3 class="title text-capitalize mb-20"><?php echo $product['product_name']; ?></h3>
            <p>
                <?php echo $product['product_description']; ?>
            </p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

    </div>
  </div>
</section>
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
                  <a href="javascript:;" target="_blank"><span class="icon-social-facebook"></span></a>
                </li>
                <li>
                  <a href="javascript:;" target="_blank"><span class="icon-social-twitter"></span></a>
                </li>
                <li>
                  <a href="javascript:;" target="_blank"><span class="icon-social-youtube"></span></a>
                </li>
                <li class="mr-0">
                  <a href="javascript:;" target="_blank"><span class="icon-social-instagram"></span></a>
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
              <li><a href="homeController.php">Home </a></li>
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
              <li><a href="homeController.php">Home </a></li>
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
<!-- search-box and overlay end -->


    <!--*********************** 
        all js files
     ***********************-->

    <!--****************************************************** 
        jquery,modernizr ,poppe,bootstrap,plugins and main js
     ******************************************************-->

    <script src="static/js/jquery-3.6.0.min.js"></script>
    <script src="static/js/jquery-migrate-3.3.2.min.js"></script>
    <script src="static/js/modernizr-3.7.1.min.js"></script>
    <script src="static/js/jquery-ui.min.js"></script>
    <script src="static/js/bootstrap.bundle.min.js"></script>
    <script src="static/js/plugins.js"></script>
    <script src="static/js/ajax-contact.js"></script>
    <script src="static/js/main.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!--*************************** 
          Minified  js 
     ***************************-->

    <!--*********************************** 
         vendor,plugins and main js
      ***********************************-->

    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    <script src="assets/js/main.js"></script> -->


</body>

</html>