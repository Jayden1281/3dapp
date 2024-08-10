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
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <link rel="stylesheet" href="static/css/custom.css">

    <link rel="stylesheet" href="static/css/jquery.fancybox.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
    <link rel='stylesheet' type='text/css' href='https://www.x3dom.org/download/x3dom.css' />
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
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.9);
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
        border: 0;
      }

      #demo_table img {}
    </style>

    <script type="text/javascript" charset="utf-8">
      $(document).ready(function () {
        //Every time the user clicks on a catalogue entry
        $(".gallery td").on("click", function () {
          var file = $(this).attr('file');

          //Replace the x3d file in the context (if not already loaded)
          if (file != $('#inlineBox').attr('url'))
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
                <li>
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

    <div class="container ">
      <div class="row">
        <div class="col-8" style="">
          <h1>3D Model</h1>
          <table id="demo_table" class="gallery justify-content-center">
            <tr>
              <td file="./static/models/BottleCoke.x3d"><button type="button" class="btn btn-success"> Glass
                  Coca-Cola</button>
              </td>
              <td file="./static/models/YiLaGuan.x3d"><button type="button" class="btn btn-success">Cans</button>
              </td>
              <td file="./static/models/Water.x3d"><button type="button" class="btn btn-success">Mineral Water</button>
              <td file="./static/models/Sprite.x3d"><button type="button" class="btn btn-success">Sprite</button>
              <td file="./static/models/datongbei2.x3d"><button type="button" class="btn btn-success">Cup</button>
            </tr>
          </table>
        </div>
        <div class="col-4 text-center">
          <h1>Images</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-8" style="">
          <x3d width='855px' height='865px' id="x3dElement">
            <scene id="mainScene">
              <Inline id="inlineBox" nameSpaceName="model" mapDEFToID="true" class="model"
                url="./static/models/datongbei2.x3d" />
            </scene>
          </x3d>
        </div>
        <div class="col-4 text-center">
          <div class="row">
            <div class="col ">
              <img class="first-img" style="margin:10px;" src="static/picture/pc1.jpg" onclick="openModal(this)">
            </div>
            <div class="col">
              <img class="first-img" style="margin:10px;" src="static/picture/pc2.jpg" onclick="openModal(this)">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <img class="first-img" style="margin:10px;" src="static/picture/pc3.jpg" onclick="openModal(this)">
            </div>
            <div class="col">
              <img class="first-img" style="margin:10px;" src="static/picture/pc4.jpg" onclick="openModal(this)">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <img class="first-img" style="margin:10px;" src="static/picture/pc5.jpg" onclick="openModal(this)">
            </div>
            <div class="col">
              <img class="first-img" style="margin:10px;" src="static/picture/pc6.jpg" onclick="openModal(this)">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <img class="first-img" style="margin:10px;" src="static/picture/pc7.jpg" onclick="openModal(this)">
            </div>
            <div class="col">
              <img class="first-img" style="margin:10px;" src="static/picture/pc8.jpg" onclick="openModal(this)">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <img class="first-img" style="margin:10px;" src="static/picture/pc9.jpg" onclick="openModal(this)">
            </div>
            <div class="col">
              <img class="first-img" style="margin:10px;" src="static/picture/pc10.jpg" onclick="openModal(this)">
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="product-tab bg-white pt-80 pb-80">
      <div class="container text-center">
        <div class="row">
          <div class="col">
            <div class="card" style="width: 18rem;">
              <div class="card-header">
                Camera perspective
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><button type="button" class="btn btn-primary" onclick="camFront()">Frontal
                    view</button></li>
                <li class="list-group-item"><button type="button" class="btn btn-primary" onclick="camTop()">Top
                    view</button></li>
                <li class="list-group-item"><button type="button" class="btn btn-primary" onclick="camBottom()">Bottom
                    view</button></li>
                <li class="list-group-item"><button type="button" class="btn btn-primary" onclick="camSide()">Side
                    view</button></li>
              </ul>
              <div class="card-footer">
                Click the button to switch the viewing angle
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <div class="card-header">
                Model animation
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><button type="button" class="btn btn-primary"
                    onclick="AnimationMoveY()">Move up and down</button></li>
                <li class="list-group-item"><button type="button" class="btn btn-primary"
                    onclick="AnimationRotationX()">Rotate around the X
                    axis</button></li>
                <li class="list-group-item"><button type="button" class="btn btn-primary"
                    onclick="AnimationRotationY()">Rotate around the Y
                    axis</button></li>
                <li class="list-group-item"><button type="button" class="btn btn-primary"
                    onclick="AnimationRotationZ()">Rotate around the Z
                    axis</button></li>
              </ul>
              <div class="card-footer">
                Tap the button to perform the button animation, and tap the button again to stop the animation
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <div class="card-header">
                Object lights
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><button type="button" class="btn btn-primary" onclick="NaviLight()">Camera
                    lights</button></li>
                <li class="list-group-item"><button type="button" class="btn btn-primary"
                    onclick="DireLight()">Directional light</button>
                </li>
                <li class="list-group-item"><button type="button" class="btn btn-primary" onclick="PointLight()">Point
                    light sources</button>
                </li>
                <li class="list-group-item"><button type="button" class="btn btn-primary"
                    onclick="SportLight()">Spotlight</button></li>
              </ul>
              <div class="card-footer">
                Tap the button to turn on the light, and tap the button again to turn off the light
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <div class="card-header">
                Object Render
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><button type="button" class="btn btn-primary"
                    onclick="wireFrame()">Point/Line/Surface</button></li>
                <li class="list-group-item"><button type="button" class="btn btn-primary"
                    onclick="changeTexture()">Change the map</button>
                </li>
              </ul>
              <div class="card-footer">
                Click the button to change the way the model is displayed
              </div>
            </div>
          </div>
        </div>
      </div>



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
                      <a href="https://www.instagram.com/" target="_blank"><span
                          class="icon-social-instagram"></span></a>
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
                  Subscribe to the Coca-Cola newsletter to receive the latest news, exclusive offers, discounts, and
                  special promotions.
                </p>

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
      document.getElementById('switchViewBtn').addEventListener('click', function () {

        var viewpoint = document.getElementById('model__Camera001');


        viewpoint.setAttribute('position', '0 10 0');
        viewpoint.setAttribute('orientation', '1 0 0 -1.57');
      });
      document.getElementById('frontViewBtn').addEventListener('click', function () {
        var viewpoint = document.getElementById('model__Camera001');
        viewpoint.setAttribute('position', '0.17676 2.06076 10.76071');
        viewpoint.setAttribute('orientation', '0.19405 0.98099 0.00325 0.04096');
      });

      document.getElementById('sideViewBtn').addEventListener('click', function () {
        var viewpoint = document.getElementById('model__Camera001');
        viewpoint.setAttribute('position', '-10.66235 2.10074 -0.58167');
        viewpoint.setAttribute('orientation', '0.00030 -1.00000 -0.00031 1.62541');
      });

      document.getElementById('backViewBtn').addEventListener('click', function () {
        var viewpoint = document.getElementById('model__Camera001');
        viewpoint.setAttribute('position', '1.00867 2.09379 10.6318');
        viewpoint.setAttribute('orientation', '0.00661 0.99998 0.00039 0.09461');
      });

      document.getElementById('bottomViewBtn').addEventListener('click', function () {
        var viewpoint = document.getElementById('model__Camera001');
        viewpoint.setAttribute('position', '2.63498 -5.35188 0.26160');
        viewpoint.setAttribute('orientation', '0.53695 0.68924 -0.48646 1.84087');
      });
    </script>
    <script>
      document.getElementById('leftViewBtn').addEventListener('click', function () {
        var viewpoint = document.getElementById('model__Camera001');
        viewpoint.setAttribute('position', '9.95810 2.24534 0.10140');
        viewpoint.setAttribute('orientation', '-0.00247 0.99997 0.00748 1.58735');
      });










    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      var BottleCoke1 = "./BottleCoke2.jpg";
      var BottleCoke2 = "./BottleCoke1.jpg";
      var Yilaguan1 = "./logo_31.png";
      var Yilaguan2 = "./logo_2.png";
      var Water1 = "./Water2.jpg";
      var Water2 = "./Water1.jpg";
      var Sprite1 = "./sprite2.jpg";
      var Sprite2 = "./sprite1.jpg";
      var Cup1 = "./cup1.jpg";
      var Cup2 = "./cup2.jpg";

      var DireLightvalue = "0";
      var PointLightvalue = "0";
      var NaviLightvalue = "0";
      var SportLightvalue = "0";

      var rotationX_state = "0"
      var rotationY_state = "0"
      var rotationZ_state = "0"
      var rotationY_key = "0 0.5 1";
      var rotationY_key_value = "0 1 0 0.0  0 1 0 3.14159  0 1 0 6.28318";
      var rotationY_key_value_stop = "0 1 0 0.0  0 1 0 0  0 1 0 0";

      var rotationX_key_value = "1 0 0 0.0  1 0 0 3.14159  1 0 0 6.28318";
      var rotationZ_key_value = "0 0 1 0.0  0 0 1 3.14159  0 0 1 6.28318";

      var move_state = "0";
      var moveY_key = "0 0.33  0.66 1";
      var moveY_key_value = "0 0 0  0 2 0  0 -2 0  0 0 0";
      var moveY_key_value_stop = "0 0 0  0 0 0  0 0 0  0 0 0";

      function wireFrame() {
        var e = document.getElementById('x3dElement');
        e.runtime.togglePoints(true);
        e.runtime.togglePoints(true);
      }

      function changeTexture() {

        const BottleLogoTexture = document.getElementById("model__BottleLogoTexture");
        const WaterTexture = document.getElementById("model__WaterTexture");
        const YilaguanTexture = document.getElementById("model__YilaguanTexture");
        const SpriteLogoTexture = document.getElementById("model__SpriteLogoTexture");
        const CupLogoTexture = document.getElementById("model__CupLogoTexture");


        if (BottleLogoTexture) {
          if (BottleLogoTexture.getAttribute("url") === BottleCoke1) {
            BottleLogoTexture.setAttribute("url", BottleCoke2);
          } else {
            BottleLogoTexture.setAttribute("url", BottleCoke1);
          }
        }


        if (WaterTexture) {
          if (WaterTexture.getAttribute("url") === Water1) {
            WaterTexture.setAttribute("url", Water2);
          } else {
            WaterTexture.setAttribute("url", Water1);
          }
        }

        if (YilaguanTexture) {
          if (YilaguanTexture.getAttribute("url") === Yilaguan1) {
            YilaguanTexture.setAttribute("url", Yilaguan2);
          } else {
            YilaguanTexture.setAttribute("url", Yilaguan1);
          }
        }
        if (SpriteLogoTexture) {
          if (SpriteLogoTexture.getAttribute("url") === Sprite1) {
            SpriteLogoTexture.setAttribute("url", Sprite2);
          } else {
            SpriteLogoTexture.setAttribute("url", Sprite1);
          }
        }

        if (YilaguanTexture) {
          if (YilaguanTexture.getAttribute("url") === Yilaguan1) {
            YilaguanTexture.setAttribute("url", Yilaguan2);
          } else {
            YilaguanTexture.setAttribute("url", Yilaguan1);
          }
        }
        if (CupLogoTexture) {
          if (CupLogoTexture.getAttribute("url") === Cup1) {
            CupLogoTexture.setAttribute("url", Cup2);
          } else {
            CupLogoTexture.setAttribute("url", Cup1);
          }
        }
      }



      function camFront() {
        document.getElementById("model__CameraFront").setAttribute("bind", "true");
        document.getElementById("model__canCameraFront").setAttribute("bind", "true");
        document.getElementById("model__cupCameraFront").setAttribute("bind", "true");
      }

      function camTop() {
        document.getElementById("model__CameraTop").setAttribute("bind", "true");
        document.getElementById("model__canCameraTop").setAttribute("bind", "true");
        document.getElementById("model__cupCameraTop").setAttribute("bind", "true");
      }

      function camBottom() {
        document.getElementById("model__CameraBottom").setAttribute("bind", "true");
        document.getElementById("model__canCameraBottom").setAttribute("bind", "true");
        document.getElementById("model__cupCameraBottom").setAttribute("bind", "true");
      }
      function camSide() {
        document.getElementById("model__CameraSide").setAttribute("bind", "true");
        document.getElementById("model__CameraSide").setAttribute("bind", "true");
        document.getElementById("model__CameraSide").setAttribute("bind", "true");
      }

      function DireLight() {
        if (NaviLightvalue == "0") {
          document.getElementById("model__DL11").setAttribute("on", "true");
          NaviLightvalue = "1"
        } else {
          document.getElementById("model__DL11").setAttribute("on", "false");
          NaviLightvalue = "0"
        }


      }

      function PointLight() {
        if (PointLightvalue == "0") {
          document.getElementById("model__PL11").setAttribute("on", "true");
          PointLightvalue = "1"
        } else {
          document.getElementById("model__PL11").setAttribute("on", "false");
          PointLightvalue = "0"
        }
      }

      function NaviLight() {
        if (NaviLightvalue == "0") {
          document.getElementById("model__NI11").setAttribute("headlight", "true");
          NaviLightvalue = "1"
        } else {
          document.getElementById("model__NI11").setAttribute("headlight", "false");
          NaviLightvalue = "0"
        }
      }
      function SportLight() {
        if (SportLightvalue == "0") {
          document.getElementById("model__SL11").setAttribute("on", "true");
          SportLightvalue = "1"
        } else {
          document.getElementById("model__SL11").setAttribute("on", "false");
          SportLightvalue = "0"
        }
      }

      function AnimationRotationX() {
        if (rotationX_state == "0") {
          document.getElementById("model__RotationInterpolator").setAttribute("key", rotationY_key);
          document.getElementById("model__RotationInterpolator").setAttribute("keyValue", rotationX_key_value);
          rotationX_state = "1"
        } else {
          document.getElementById("model__RotationInterpolator").setAttribute("key", rotationY_key);
          document.getElementById("model__RotationInterpolator").setAttribute("keyValue", rotationY_key_value_stop);
          rotationX_state = "0"
        }
      }
      function AnimationRotationY() {
        if (rotationY_state == "0") {
          document.getElementById("model__RotationInterpolator").setAttribute("key", rotationY_key);
          document.getElementById("model__RotationInterpolator").setAttribute("keyValue", rotationY_key_value);
          rotationY_state = "1"
        } else {
          document.getElementById("model__RotationInterpolator").setAttribute("key", rotationY_key);
          document.getElementById("model__RotationInterpolator").setAttribute("keyValue", rotationY_key_value_stop);
          rotationY_state = "0"
        }
      }
      function AnimationRotationZ() {
        if (rotationZ_state == "0") {
          document.getElementById("model__RotationInterpolator").setAttribute("key", rotationY_key);
          document.getElementById("model__RotationInterpolator").setAttribute("keyValue", rotationZ_key_value);
          rotationZ_state = "1"
        } else {
          document.getElementById("model__RotationInterpolator").setAttribute("key", rotationY_key);
          document.getElementById("model__RotationInterpolator").setAttribute("keyValue", rotationY_key_value_stop);
          rotationZ_state = "0"
        }
      }
      function AnimationMoveY() {
        if (move_state == "0") {
          console.error('move_state == "0"');
          document.getElementById("model__move").setAttribute("keyValue", moveY_key_value_stop);
          document.getElementById("model__move").setAttribute("keyValue", moveY_key_value);
          move_state = "1"
        } else {
          console.error('move_state = "1"');

          document.getElementById("model__move").setAttribute("keyValue", moveY_key_value_stop);
          move_state = "0"
        }
      }
    </script>
  </body>

</html>