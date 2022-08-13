<div style=" height: 0px; text-align: center; margin: 80px">

    <h1><i class="certificate icon"></i>Calculo de áreas de polígonos</h1>

</div>

<div style=" width: 20%; margin: 0 auto;">

    <form action="" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Primeiro valor</label>
            <input type="text" class="form-control" name="N1" placeholder="0">
            <div id="emailHelp" class="form-text">Digite apenas numeros! </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Segundo valor</label>
            <input type="text" class="form-control" name="N2" placeholder="0">
            <div id="emailHelp" class="form-text">Digite apenas numeros! </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Terceiro valor</label>
            <input type="text" class="form-control" name="N3" placeholder="0">
            <div id="emailHelp" class="form-text">Digite apenas numeros! </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Quarto valor</label>
            <input type="text" class="form-control" name="N4" placeholder="0">
            <div id="emailHelp" class="form-text">Digite apenas numeros! </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Quinto valor</label>
            <input type="text" class="form-control" name="N5" placeholder="0">
            <div id="emailHelp" class="form-text">Digite apenas numeros! </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Sexto valor</label>
            <input type="text" class="form-control" name="N6" placeholder="0">
            <div id="emailHelp" class="form-text">Digite apenas numeros! </div>
        </div>

        <div style="text-align: center;">
            <button class="ui green button" type="submit" name="ir" value="Calcular">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Calcular</font>
                </font>
            </button>

            <br>
        </div>
    </form>






    <?php
    // Programa PHP para avaliar área de
    // um polígono usando a fórmula de cadarço

    // (X[i], Y[i]) são
    // coordenadas do mesmo ponto.
    function polygonArea($X, $Y, $n)
    {
        // Inicializa a área
        $area = 0.0;

        // Calcula o valor de
        // fórmula de cadarço
        $j = $n - 1;
        for ($i = 0; $i < $n; $i++) {
            $area += ($X[$j] + $X[$i]) *
                ($Y[$j] - $Y[$i]);

            // j é o vértice anterior a i     
            $j = $i;
        }

        // Retorna valor absoluto
        return abs($area / 2.0);
    }

    if (isset($_POST['ir'])) {

        $N1 = $_POST['N1'];
        $N2 = $_POST['N2'];
        $N3 = $_POST['N3'];
        $N4 = $_POST['N4'];
        $N5 = $_POST['N5'];
        $N6 = $_POST['N6'];



        // Código para rodar
        $X = array($N1, $N2, $N2);
        $Y = array($N4, $N5, $N6);

        $n = sizeof($X);
        echo '<div class="alert alert-primary" role="alert">';
        echo polygonArea($X, $Y, $n);
        echo '</div>';
    }
    ?>
</div>