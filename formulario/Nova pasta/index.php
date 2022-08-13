<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Curriculo</title>
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
</body>
</html>


