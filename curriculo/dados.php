<?php 
  if($_FILES){
    $destino = "./arquivos/".$_FILES['arquivo']['name'];
    move_uploaded_file($_FILES['arquivo']['tmp_name'],$destino);
  }
?>

<!DOCTYPE html>
<html lang="pt-br" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Curriculo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Curriculum vitae Felicity Jones" />
    <meta name="keywords" content="curriculo, vitae, geek, university, git, github" />
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/transition-animations.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/main-green.css" type="text/css">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
  </head>

  <body class="material-template">
    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page">
      <!-- Header -->
      <header id="site_header" class="header mobile-menu-hide">
        <div class="header-content">
          <div class="site-title-block mobile-hidden">
            <a href="index.html#home"><div class="site-title">Curri<span>culo</span></div></a>
          </div>

          <!-- Navigation -->
          <div class="site-nav">
            <!-- Main menu -->
            <ul id="nav" class="site-main-menu">
              <li>
                <a class="pt-trigger" href="index.html#home">Início</a>
              </li>
            </ul>
            <!-- /Main menu -->
          </div>
          <!-- Navigation -->
        </div>
      </header>
      <!-- /Header -->

      <!-- Mobile Header -->
      <div class="mobile-header mobile-visible">
        <div class="mobile-logo-container">
          <div class="mobile-site-title">Curriculo</div>
        </div>

        <a class="menu-toggle mobile-visible">
          <i class="fa fa-bars"></i>
        </a>
      </div>
      <!-- /Mobile Header -->

      <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
          <!-- Subpages -->
          <div class="subpages">

            <!-- Home Subpage -->
            <section class="pt-page" data-id="home">
              <div class="section-inner start-page-content">
                <div class="page-header">
                  <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                      <div class="photo">
                        <?php 
                          //echo $img = $_POST['img'];
                        ?>
                        <img src="<?php echo $destino?>">
                      </div>
                    </div>

                    <div class="col-sm-8 col-md-8 col-lg-8">
                      <div class="title-block">
                        <h1><?php echo $nome = $_POST['nome']; ?></h1>
                        <div class="owl-carousel text-rotation">                                    
                        <div class="item">
                            <div class="sp-subtitle"><?php echo $area =$_POST['area']?></div>
                          </div>
                          <div class="item">
                            <div class="sp-subtitle">Frontend-developer</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="page-content">
                  <div class="row">

                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="about-me">
                        <div class="block-title">
                          <h3>Quem <span>Sou?</span></h3>
                        </div>
                        <p><?php echo $TextoP =$_POST['txtP'] ?></p>
                      </div>
                      <div class="download-resume">
                        <button onclick="teste()" class="btn btn-secondary" target="_blank">Imprimir Currículo</button>
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <ul class="info-list">
                        <?php
                          if($_POST){
                            echo '<li><span class="title">idade:</span><span class="value">'.$idade =$_POST['idade'].'</span></li>';
                            echo '<li><span class="title">email:</span><span class="value">'.$email =$_POST['email'].'</span></li>';
                            echo '<li><span class="title">Genero:</span><span class="value">'.$genero =$_POST['genero'].'</span></li>';
                            echo '<li><span class="title">endereco:</span><span class="value">'.$endereco =$_POST['endereco'].'</span></li>';
                            echo '<li><span class="title">cep:</span><span class="value">'.$cep =$_POST['cep'].'</span></li>';
                        }
                        ?>
                      </ul>
                    </div>

                  </div>
                </div>
              </div>
            </section>
            <!-- End of Home Subpage -->

          </div>
        </div>
        <!-- /Page changer wrapper -->
      </div>
      <!-- /Main Content -->
    </div>
    <script>
      function teste() {
        window.print();
      } 
    </script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/pages-switcher.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/validator.js"></script>
    <script type="text/javascript" src="js/jquery.shuffle.min.js"></script>
    <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
    <script type="text/javascript" src="js/jquery.googlemap.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
