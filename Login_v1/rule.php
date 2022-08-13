<div style=" height: 0px; text-align: center; margin: 80px">

    <h1><i class="percent icon"></i>Regra de 3</h1>

</div>

<div style=" width: 20%; margin: 0 auto;">

    <form action="" method="post">

 <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Primeiro valor</label>
            <input type="text" class="form-control" name="valor1" placeholder="0">
            <div id="emailHelp" class="form-text">Digite apenas numeros! </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Segundo valor</label>
            <input type="text" class="form-control" name="valor2" placeholder="0">
            <div id="emailHelp" class="form-text">Digite apenas numeros! </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Terceiro valor</label>
            <input type="text" class="form-control" name="valor3" placeholder="0">
            <div id="emailHelp" class="form-text">Digite apenas numeros! </div>
        </div>

        <div style="text-align: center;">
            <button class="fluid ui green button" type="submit" name="go" value="Calcular">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Calcular</font>
                </font>
            </button>

            <br>
        </div>
    </form>









<?php

function subtract($aValues, $nSubtract) {

	$nValueSubtract = (array_sum($aValues) - $nSubtract) / count($aValues);
	
	foreach ($aValues as $key => $value) {
		$aValues[$key] = $value - $nValueSubtract;
	}
	
	return $aValues;
}
if (isset($_POST['go'])) {
    
   
    $N10 = $_POST['valor1'];
    $N20 = $_POST['valor2'];
    $N30 = $_POST['valor3'];
   
  

$aValues = array('x' => $N10, 'y' => $N20, 'z' => $N30);

list($x,$y,$z) = array_values(subtract($aValues, 300));


echo '<div class="alert alert-primary" role="alert">';
	echo $x;
    
    echo '</div>';
}


?>

