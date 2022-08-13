<!DOCTYPE html>
<html lang="pt-br">
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
<body>
    <h1>DADOS PESSOAIS</h1>

    <div class="section-inner start-page-content">
        <form action="dados.php" enctype="multipart/form-data" method="post">
            
            <label for="nome">Nome Completo:</label><br>
            <input type="text" name="nome" placeholder="Digite Seu Nome" required>

            <br><br>

            <label for="idade">Idade:</label><br>
            <input type="number" name="idade" required>

            <br><br>

            <label for="email">Email:</label><br>
            <input type="email" name="email" required>

            <br><br>

            <select name="genero" required>
                <option  value="">Genero</option>
                <option value="masculino">MASCULINO</option>
                <option value="feminino">FEMININO</option>
            </select>

            <br><br>

            <label for="endereco">Endereço:</label><br>
            <input type="text" name="endereco" required>
            
            <br><br>

            <label for="cep">CEP:</label><br>
            <input type="number" name="cep" required>

            <br><br>

            <label for="area">Escolha uma Area de Atuação:</label><br>
            <select name="area" required>
                <option value="Designer">Web Designer</option>
                <option value="Frontend">Frontend-developer</option>
                <option value="Backend">Backend-developer</option>
                <option value="Frontend/Backend">Frontend e Backend</option>
            </select>

            <br><br>

            <label for="txtP">Texto Simples sobre "Quem Sou?"</label><br>
            <textarea for="txtP" name="txtP" required></textarea>

            <br><br>

            <p><label for="">Selecione o arquivo</label>
                <input name="arquivo" type="file" id="img" required>
            </p>
            <br>
            <button type="submit" value="ENVIAR">
        </form>
    </div>

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


