
        <div style=" height: 0px; text-align: center; margin: 80px">



<h1>Calculadora simples <i class="calculator icon"></i></h1>


</div>

<div style=" width: 20%; margin: 0 auto;">

<!-- Input que receberá o primeiro valor a ser calculado -->
<form method="post" action="">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Primeiro valor</label>
    <input type="text" class="form-control" name="v1" placeholder="0">
    <div id="emailHelp" class="form-text">Digite apenas numeros! </div>
  </div>

  <!-- Select com o tipo de operação (Somar, Diminuir, Multiplicar ou Dividir -->

  <select class="form-select" aria-label="Default select example" name="operacao">
    <option selected>Abra o menu de seleção</option>
    <option value="soma">SOMAR</option>
    <option value="subtrai">SUBTRAIR</option>
    <option value="multiplica">MULTIPLICAÇÃO</option>
    <option value="divide">DIVISÂO</option>
  </select>


  <!-- Input que receberá o segundo valor a ser calculado -->
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Segundo valor</label>
    <input type="text" class="form-control" name="v2" placeholder="0">
  </div>

  <!-- Input que enviará os valores para a função de cálculo -->
  <div style="text-align: center;">
    <button class="ui green button" type="submit" name="doCalc" value="Calcular">
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">Calcular</font>
      </font>
    </button>
    <br>
    
    <br>
  </div>

</form>

<?php
# classe :: Calculadora
class Calculadora
{

  # Função "Calcular" para executar o cálculo dos valores (v1 e v2)
  public function Calcular()
  {

    # Se for setado algum valor ào submit (doCalc), executa a operação
    if (isset($_POST['doCalc'])) {

      # Se a operação for soma (value = soma), então...
      if ($_POST['operacao'] == "soma") {

        # Armazena a soma de [v1 + v2] na variável $resultado
        $resultado = $_POST['v1'] + $_POST['v2'];


        # Exibe a variável $resultado com os valores já somados
        return $resultado;

        # Ou então, se a operação não for (value = soma), e sim (value = subtrai) então...
      } elseif ($_POST['operacao'] == "subtrai") {
        $resultado = $_POST['v1'] - $_POST['v2'];
        return $resultado;
      } elseif ($_POST['operacao'] == 'multiplica') {
        $resultado = $_POST['v1'] * $_POST['v2'];
        return $resultado;
      } elseif ($_POST['operacao'] == 'divide') {
        $resultado = $_POST['v1'] / $_POST['v2'];
        return $resultado;
      }
    }
  }
}

# Instancia a classe CALCULADORA()
$calcular = new Calculadora();

# Executa a função
if ($calcular == !null) {
  echo '<div class="alert alert-primary" role="alert">';
  echo $calcular->Calcular();
  echo '</div>';
} else {
  echo '<div class="alert alert-primary" role="alert">';
  echo "Função aritmetica não definida! ";
  echo '</div>';
}


?>
</div>