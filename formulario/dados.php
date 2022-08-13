<?php
  $cookie_name = "NOME";
  $cookie_value = $_POST['nome'];
  setcookie($cookie_name, $cookie_value, time() + 120 , "/"); 

  if(!isset($_COOKIE['pontos'])){
    echo "tempo expirou. vaza!";
  }
  
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Curriculo</title>
  </head>

  <body>
    
    
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
