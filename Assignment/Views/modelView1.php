<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <title>Coca cola-3D Model</title>
    <link rel="stylesheet" href="static/css/fontawesome.min.css">
    <link rel="stylesheet" href="static/css/ionicons.min.css">
    <link rel="stylesheet" href="static/css/simple-line-icons.css">
    <link rel="stylesheet" href="static/css/jquery-ui.min.css">
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/plugins.css">
    <link rel="stylesheet" href="static/css/style.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.0.min.js" ></script>
    <link rel='stylesheet' type='text/css' href='https://www.x3dom.org/download/x3dom.css'/>
    <script type='text/javascript' src='https://www.x3dom.org/download/x3dom.js'> </script>

    <style type="text/css">
    .modal {
      display: none; 
      position: fixed; 
      z-index: 1; 
      padding-top: 60px; 
      left: 0;
      top: 0;
      width: 100%; 
      height: 100%; 
      overflow: auto; 
      background-color: rgb(0,0,0); 
      background-color: rgba(0,0,0,0.9); 
    }
    


    .modal-content {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
    }


    .close {
      position: absolute;
      top: 15px;
      right: 35px;
      color: #fff;
      font-size: 40px;
      font-weight: bold;
      transition: 0.3s;
    }

    .close:hover,
    .close:focus {
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
    }
      #demo_table {
      border:0;
    }
     #demo_table img {

   
    }
    #x3dElement1 {
    display: flex;
    flex-direction: row;
  }
  
  #x3dElement1 > div {
    flex: 1;
  }

   </style>
   
  <script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
      //Every time the user clicks on a catalogue entry
      $(".gallery td").on("click", function() {
        var file = $(this).attr('file');
        
        //Replace the x3d file in the context (if not already loaded)
        if(file != $('#inlineBox').attr('url'))
          $('#inlineBox').attr('url', file);
      });
    });
  </script>
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
            <li class="position-static active">
              <a href="modelController.php">3D Model</a>

            </li>
            <li > 
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
          <h2 class="title pb-4 text-dark text-capitalize">
            3D Model
          </h2>
        </div>
      </div>
      <div class="col-12">
        <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
          <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">
             3D Model
          </li>
        </ol>
      </div>
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<div class="product-tab bg-white pt-80 pb-80">
  <div class="container">
   
    <!-- product-tab-nav end -->
    <div class="tab-content" id="pills-tabContent">
      <!-- first tab-pane -->
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="row grid-view theme1 gallery">
          <div style="height:840px">
            <div id="x3dElement1">
              <div >
                <x3d width='1000px' height='800px'>
                  <scene id="mainScene">
                      <inline id="inlineBox" namespacename="model" mapdeftoid="true" url="./static/models/datongbei2.x3d" render="true" bboxcenter="0,0,0" bboxsize="-1,-1,-1" load="true">
                        <viewpoint DEF="Camera001" position="0.17676 2.06076 10.76071" orientation="0.19405 0.98099 0.00325 0.04096" fieldOfView="0.602400004863739" description="Camera001" centerOfRotation="0,0,0" zNear="-1" zFar="-1" id="model__Camera001"></viewpoint>
                        <transform DEF="cigarette" translation="-1.87699997425079 89.2799987792969 0.593699991703033" rotation="-0.00364100001752377 1 0.00708900019526482 -1.57099997997284" scale="0.163800001144409 0.163800001144409 0.163800001144409" render="true" bboxCenter="0,0,0" bboxSize="-1,-1,-1" center="0,0,0" scaleOrientation="0,0,0,0" id="model__cigarette">
                        </transform>
                      </inline>
                    </scene>
                </x3d>
              </div>
              <div>
                      <div class="product-thumbnail position-relative gallery">
                        <img class="first-img" style="width: 512px; height: 252px;" src="static/picture/bimg.png"  onclick="openModal(this)"> 
                      </div>
                      <div class="product-thumbnail position-relative gallery">
                        <img class="first-img" style="width: 512px; height: 252px;" src="static/picture/dimg.png" onclick="openModal(this)"> 
                      </div>
                      <div class="product-thumbnail position-relative gallery">
                        <img class="first-img" style="width: 512px; height: 252px;" src="static/picture/cimg.png"  onclick="openModal(this)"> 
                      </div>
              </div>
            </div>

            <div id='bt001' class="btn-group" role="group" aria-label="View Angle Buttons">
              <button id="switchViewBtn" type="button" class="btn btn-primary">Switch View</button>
              <button id="frontViewBtn" type="button" class="btn btn-primary">Front View</button>
              <button id="sideViewBtn" type="button" class="btn btn-primary">Side View</button>
              <button id="backViewBtn" type="button" class="btn btn-primary">Back View</button>
              <button id="bottomViewBtn" type="button" class="btn btn-primary">Bottom View</button>
     
              <button id="leftViewBtn" type="button" class="btn btn-primary">Left View</button>
            </div>


            
          </div>

          <table id="demo_table" class="gallery" style="margin-top: 5%;">
            <tr>
      
              <td onclick="printMessage('BARQ ROOT BEER')">
                <div class="col-sm-6 col-lg-4 col-xl-3 mb-30" style="width: 80%;">
                  <div class="card product-card">
                    <div class="card-body">
                      <div class="product-thumbnail position-relative gallery">
                    
                        <img class="first-img" style="width: 512px; height: 252px;" src="static/picture/bimg.png" alt="<?php echo $product['product_name']; ?>" > 
                      </div>
                      <div class="product-desc py-0 px-0" >
                        <h3 class="title">
                          <a href="">BARQ ROOT BEER</a>
                        </h3>
                        <p>Barq’s has bite! Do you know why? Well, it’s unique Barq’s spice is what makes this root beer soda truly original and truly tasty, complete with a caffeine kick. Not to mention the full-bodied flavor that is so distinct and different it can only be Barq’s</p>
                        <div class="star-rating">
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star de-selected"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- product-list End -->
                </div>
              </td>
              <td onclick="printMessage('TOPO CHICO MINERAL WATER')">
                <div class="col-sm-6 col-lg-4 col-xl-3 mb-30" style="width: 80%;">
                  <div class="card product-card">
                    <div class="card-body">
                      <div class="product-thumbnail position-relative gallery">
                    
                        <img class="first-img" style="width: 512px; height: 252px;" src="static/picture/cimg.png" alt="<?php echo $product['product_name']; ?>" > 
                      </div>
                      <div class="product-desc py-0 px-0" >
                        <h3 class="title">
                          <a href="">TOPO CHICO MINERAL WATER</a>
                        </h3>
                        <p>Topo Chico Sparkling Mineral Water has been bottled at the source in Monterrey, Mexico, since 1985. Its natural mineral composition is great for quenching thirst.</p>
                        <div class="star-rating">
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star de-selected"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- product-list End -->
                </div>
              </td>
              <td onclick="printMessage('PEACH CITRUS')">
                <div class="col-sm-6 col-lg-4 col-xl-3 mb-30" style="width: 80%;">
                  <div class="card product-card">
                    <div class="card-body">
                      <div class="product-thumbnail position-relative gallery">
                    
                        <img class="first-img" style="width: 512px; height: 252px;" src="static/picture/dimg.png" alt="<?php echo $product['product_name']; ?>" > 
                      </div>
                      <div class="product-desc py-0 px-0" >
                        <h3 class="title">
                          <a href="">PEACH CITRUS</a>
                        </h3>
                        <p>It's the grapefruit flavor you know with a crisp peach taste you'll love. It's a flavor experience born of sweet and citrus blends, with no sugar, no caffeine, and no calories.</p>
                        <div class="star-rating">
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star"></span>
                          <span class="ion-ios-star de-selected"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- product-list End -->
                </div>
              </td>
    
            </tr>
          </table>
    
        </div>
      </div>

    </div>

  </div>
</div>
<div id="myModal" class="modal">
  <span class="close" onclick="closeModal()">&times;</span>
  <img class="modal-content" id="img01">
  <div class="social-network" style="magrin-left:50%">
      <ul class="d-flex" style="margin-top: 4%; margin-left: 48%;">
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
<!-- product tab end -->
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
  <script>



function openModal(element) {
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("img01");
    modal.style.display = "block";
    modalImg.src = element.src;
  }


  function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
  }

  document.getElementById('switchViewBtn').addEventListener('click', function() {
 
 var viewpoint = document.getElementById('model__Camera001');
 

 viewpoint.setAttribute('position', '0 10 0');
 viewpoint.setAttribute('orientation', '1 0 0 -1.57');
});
document.getElementById('frontViewBtn').addEventListener('click', function() {
 var viewpoint = document.getElementById('model__Camera001');
 viewpoint.setAttribute('position', '0.17676 2.06076 10.76071');
 viewpoint.setAttribute('orientation', '0.19405 0.98099 0.00325 0.04096');
});

document.getElementById('sideViewBtn').addEventListener('click', function() {
 var viewpoint = document.getElementById('model__Camera001');
 viewpoint.setAttribute('position', '-10.66235 2.10074 -0.58167');
 viewpoint.setAttribute('orientation', '0.00030 -1.00000 -0.00031 1.62541');
});

document.getElementById('backViewBtn').addEventListener('click', function() {
 var viewpoint = document.getElementById('model__Camera001');
 viewpoint.setAttribute('position', '1.00867 2.09379 10.6318');
 viewpoint.setAttribute('orientation', '0.00661 0.99998 0.00039 0.09461');
});

document.getElementById('bottomViewBtn').addEventListener('click', function() {
 var viewpoint = document.getElementById('model__Camera001');
 viewpoint.setAttribute('position', '2.63498 -5.35188 0.26160');
 viewpoint.setAttribute('orientation', '0.53695 0.68924 -0.48646 1.84087');
});
</script>
<script>
document.getElementById('leftViewBtn').addEventListener('click', function() {
 var viewpoint = document.getElementById('model__Camera001');
 viewpoint.setAttribute('position', '9.95810 2.24534 0.10140');
 viewpoint.setAttribute('orientation', '-0.00247 0.99997 0.00748 1.58735');
});




</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      

    });


    function printMessage(productName) {

      switch (productName) {
    case 'BARQ ROOT BEER':
      // x3dElement1.style.display = 'block';
      // x3dElement2.style.display = 'none';
      // x3dElement3.style.display = 'none';

      // btn001.style.display = 'block';
      // btn002.style.display = 'none';
      // btn003.style.display = 'none';
      window.location.href = 'http://localhost/Controls/modelController.php';
      break;
    case 'TOPO CHICO MINERAL WATER':
      // x3dElement1.style.display = 'none';
      // x3dElement2.style.display = 'block';
      // x3dElement3.style.display = 'none';
      // btn001.style.display = 'none';
      // btn002.style.display = 'block';
      // btn003.style.display = 'none';
      window.location.href = 'http://localhost/Controls/modelController.php?view=model1';
      break;
    case 'PEACH CITRUS':
      // x3dElement1.style.display = 'none';
      // x3dElement2.style.display = 'none';
      // x3dElement3.style.display = 'block';
      // btn001.style.display = 'none';
      // btn002.style.display = 'none';
      // btn003.style.display = 'block';
      window.location.href = 'http://localhost/Controls/modelController.php?view=model2';
      break;
    default:
      // x3dElement1.style.display = 'none';
      // x3dElement2.style.display = 'none';
      // x3dElement3.style.display = 'block';
      // btn001.style.display = 'none';
      // btn002.style.display = 'none';
      // btn003.style.display = 'block';
      window.location.href = 'http://localhost/Controls/modelController.php';
  }
}

  </script>
</body>

</html>