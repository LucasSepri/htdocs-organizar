<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <title>Curriculo</title>
    </head>
    <body>
        <h1>FORMULARIO</h1>
        <form action="dados.php" enctype="multipart/form-data" method="post">
            
            <label for="nome">Nome Completo:</label><br>
            <input type="text" name="nome" placeholder="Digite Seu Nome" required>

            <br><br>

            <label for="email">Email:</label><br>
            <input type="email" name="email" required>

            <br><br>

            <label for="senha">Senha: </label><br>
            <input type="password" name="senha" placeholder="Digite sua senha">
                        
            <br>
            <button type="submit" value="ENVIAR">CADASTRAR</button>
        </form>
        <?php
            $cookie_name = "Tempo";
            $cookie_value = 0;
            setcookie($cookie_name, $cookie_value, time() + 120); 
            setcookie('pontos', 0, time() + 120); 
        ?>
    </body>
</html>


