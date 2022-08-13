<?php
session_start();
if (!isset($_SESSION['submit']) || $_SESSION['submit'] == false) {
  header("Location: index.php");
}



?>







<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Login V1</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!--===============================================================================================-->

  <link rel="shortcut icon" href="images/icons/favicon.ico" type="image/x-icon">
  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="./css/div.css">
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./fonts/icon-font/css/style.css">
  <link rel="stylesheet" href="./fonts/typography-font/typo.css">
  <link rel="stylesheet" href="./fonts/fontawesome-5/css/all.css">

  <script defer src="./js/div.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="./plugins/aos/aos.min.css">
  <link rel="stylesheet" href="./plugins/slick/slick.min.css">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="./css/stif.css">
  <link rel="stylesheet" href="./css/fundo.css">
  <!-- Custom stylesheet -->
</head>
<style>
  #myDIV {
    width: 100%;
    padding: 50px 0;
    text-align: center;
    background-color: lightblue;
    margin-top: 20px;
  }
</style>
</head>

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'Mazzard H';">

  <div class="limiter">

    <body class="bg">

      <div class="site-wrapper overflow-hidden position-relative">
        <!-- Site Header -->
        <!-- Preloader -->
        <!-- <div id="loading">
    <div class="preloader">
     <img src="./image/preloader.gif" alt="preloader">
   </div>
   </div>    -->
        <!--Site Header Area -->
        <header class="site-header site-header--menu-left landing-11-menu site-header--absolute site-header--sticky">
          <div class="container">
            <nav class="navbar site-navbar">
              <!-- Brand Logo-->
              <div class="brand-logo">
                <a href="#">
                  <!-- light version logo (logo must be black)-->
                  <img src="images/logo/logo-black.png" alt="" class="light-version-logo">
                  <!-- Dark version logo (logo must be White)-->
                  <img src="images/logo/logo-white.png" alt="" class="dark-version-logo">
                </a>
              </div>
              <div class="menu-block-wrapper">
                <div class="menu-overlay"></div>
                <nav class="menu-block" id="append-menu-header">
                  <div class="mobile-menu-head">
                    <div class="go-back">
                      <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="current-menu-title"></div>
                    <div class="mobile-menu-close">&times;</div>
                  </div>
                  <ul class="site-menu-main">
                    <li class="nav-item nav-item-has-children">
                      <a href="#" class="nav-link-item drop-trigger"> Serviços <i class="fas fa-angle-down"></i>
                      </a>
                      <ul class="sub-menu" id="submenu-9">
                        <li class="sub-menu--item">
                          <a href="#">Dropdown 01</a>
                        </li>
                        <li class="sub-menu--item">
                          <a href="#">Dropdown 02</a>
                        </li>
                        <li class="sub-menu--item">
                          <a href="#">Dropdown 03</a>
                        </li>
                        <li class="sub-menu--item">
                          <a href="#">Dropdown 04</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link-item">Portifólio</a>

                    </li>
                    <li class="nav-item">
                      
                      <a href='fim.php' class="nav-link-item"> <i class="home icon"></i> Sair </a>
                      
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="header-btns  header-btn-l11 ms-auto d-none d-xs-inline-flex align-items-center">
                <a class=" big fluid ui inverted red button" href='fim.php'>
                  <i class="home icon"></i>
                  Sair
                </a>
                <a class="small ui blue button" href="#">
                  Bem vindo, Administrador
                </a>
              </div>
              <!-- mobile menu trigger -->
              <div class="mobile-menu-trigger">
                <span></span>
              </div>
              <!--/.Mobile Menu Hamburger Ends-->
            </nav>
          </div>
        </header>
        <!-- navbar- -->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
 
        <div class="card-deck">
          
  <div class="card">
    
    <div class="card-body">
      <h5 class="card-title">Conversor de temperaturas</h5>
      <p class="card-text"><?php include 'temp.php';?></p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card">
    
    <div class="card-body">
      <h5 class="card-title">Calculadora simples</h5>
      <p class="card-text"><?php include 'calc.php';?></p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card">
    
    <div class="card-body">
      <h5 class="card-title">Calculo de áreas de polígonos</h5>
      <p class="card-text"><?php include 'poli.php';?></p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
</div>
<br>
<br>
<div class="card-deck">
          
          <div class="card">
            
            <div class="card-body">
              <h5 class="card-title">Conversor de Números Romanos</h5>
              <p class="card-text"><?php include 'roma.php';?></p>
              <p class="card-text"><small class="text-muted"></small></p>
            </div>
            <div class="card">
            
            <div class="card-body">
              <h5 class="card-title">regra de 3</h5>
              <p class="card-text"><?php include 'rule.php';?></p>
              <p class="card-text"><small class="text-muted"></small></p>
            </div>
          </div>
         
          
            
            
        </div>
        



        <!-- Footer Area -->
        <footer class="footer-l-11 text-center text-md-start">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="footer-logo-l-11">
                  <a href="#"><img src="images/logo/logo-black.png" alt="logo"></a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="footer-widget-l-11">
                  <ul class="pl-0 list-unstyled d-flex flex-wrap justify-content-center align-items-end ">
                    <li class="d-flex"><a href="">Sobre</a></li>
                    <li class="d-flex"><a href="">Feedback</a></li>
                    <li class="d-flex"><a href="">Trabalhos</a></li>
                    <li class="d-flex"><a href="">Quem sou eu?</a></li>
                    <li class="d-flex"><a href="">Contato</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3">
                <div class="social-icons-l-11">
                  <ul class="pl-0 list-unstyled d-flex  justify-content-center justify-content-md-end align-items-end ">
                    <li class="d-flex flex-column justify-content-center"><a href="https://twitter.com/softgame5"><i class="fab fa-twitter"></i></a></li>
                    <li class="d-flex flex-column justify-content-center"><a href="https://br.linkedin.com/in/adrielfdias"><i class="fab fa-linkedin"></i></a></li>
                    <li class="d-flex flex-column justify-content-center"><a href="https://www.instagram.com/adrielf_diazz/"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <div class="copyright-area-l-11">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="text-center">
                  <p>© Adriel Dias copyright. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>

  <!-- Vendor Scripts -->
  <script src="js/vendor.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Plugin's Scripts -->
  <script src="./plugins/aos/aos.min.js"></script>
  <script src="./plugins/slick/slick.min.js"></script>
  <script src="./plugins/menu/menu.js"></script>
  <!-- Activation Script -->
  <script src="js/custom.js"></script>































  <!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script>
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
  <!--===============================================================================================-->
  <script src="js/main.js"></script>
</body>


</html>